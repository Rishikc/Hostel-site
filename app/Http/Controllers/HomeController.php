<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hostels as Hostels;
use App\Mess as Mess;
use App\complaints as Complaints;
use App\quick_links as Quick_links;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return view('bootstrap-grid');
        //return view('bootstrap-elements');
        //return view('blank');
        //return view('tables');
        //return view('charts');
        //return view('forms');
        $quick_links = Quick_links::orderBy('id','DESC')->get();
        return view('Home/index',compact('quick_links'));
        //return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function login()
    {
        return view('Home/login');
    }

   public function auth(Request $request)
    {
            $username = $request->get('username'); 
            $password=$request->get('password');
            $shellcmd = "python2 nitt_imap_login.py ".$username." ".$password;
            $imap = shell_exec($shellcmd);
            if($imap == 1)
            {	
            	if($username == '106113077'||$username == '106114073'||$username == '106113051'||$username == '106113076'||$username == 'studentgensec')
               { 
                 Session::put('user_name','admin');
                 Session::put('roll_number',$username);
               }
                else
                {
                Session::put('roll_number',$username);
                }
                return Redirect::to('/');
                
            }
            else
            {
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }
            
               
    }
    public function logout()
    {
       
            Session::flush();
            return Redirect::to('/login')->with('message', 'Successfully Logged out.');
           
    }

    public function complaint()
    {
        $hostel = Hostels::all();
        $mess= Mess::all();
        $categories = Categories::all();
        return view('Complaints/complaintform', ['hostels' => $hostel,'mess' => $mess,'categories' => $categories]);
    }
    public function complaint_submit(Request $request)
    {
        $rollno = Session('roll_number');

        $ldapconn = ldap_connect("10.0.0.38")
            or die("Could not connect to LDAP server.");

        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
    
        $ldapbind = @ldap_bind($ldapconn,env('LDAP_USERNAME'),env('LDAP_PASSWORD'));
        
        if ($ldapbind)
        {
            $sr=ldap_search($ldapconn,"DC=octa,DC=edu", "cn=".$rollno);
            $ldaparr = ldap_get_entries($ldapconn,$sr); 

            if($ldaparr['count']==0)
                return redirect('/registration/nitt')->with("message","Not a Valid Roll Number");
            $name = $ldaparr[0]['displayname'][0];
            $building=$request->get('option');
            $rollnumber=Session('roll_number');
            $subject=$request->get('subject');
            $details=$request->get('details');
            $hostel_name=$request->get('hostel_name');
            $phoneno = $request->get('phoneno');

            $complaint = Complaints::insert(['building' => $building,'hostel' => $hostel_name,'subject' => $subject,'description' => $details,'created_name' => $name,'created_rollnumber' => $rollnumber, 'phoneno' => $phoneno]);
            
            if($complaint)
                return Redirect::to('/complaints')->with('message', 'Complaint recorded successfully.');
            else
                return Redirect::to('/complaints')->with('message', 'Complaint could not be recorded.');
        }
        
        else
            return Redirect::to('/complaints')->with('message', 'Complaint could not be recorded.');
        
        //return view('Hostels.complaint', ['details' => $hostel]);   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        /*if(!Session::has('user_name')&&!Session::has('roll_number'))
        {
            return redirect('login');
        }*/
        $complaints = Complaints::paginate(10);
        return view('Complaints.view', compact('complaints'));
    }

    public function get_complaint(Request $request)
    {
        $complaint_id = $request->get('complaint_id');
        $complaint = Complaints::find($complaint_id);
        Session::put('complaint_id',$complaint_id);
        echo(json_encode($complaint));
    }

    public function modify_complaint_status(Request $request)
    {
        $complaint = Complaints::find(Session::get('complaint_id'));
        $complaint->status = $request->get('status');
        $complaint->save();
        echo(json_encode($complaint));
    }

    public function contacts_info()
    {
        return view('contacts');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function get_quicklink(Request $request)
    {
        $quicklink = Quick_links::find($request->id);
        echo(json_encode($quicklink));

    }

    public function store_quicklink(Request $request)
    {
        if($request->id == 0)
        {
            $quicklink          = new Quick_links();
            $quicklink->link    = $request->link;
            $quicklink->type    = $request->type;
            $quicklink->title   = $request->title;
        }
        else
        {
            $quicklink          = Quick_links::find($request->id);
            $quicklink->link    = $request->link;
            $quicklink->title   = $request->title;
        }

        $quicklink->save();
        return redirect('/');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
