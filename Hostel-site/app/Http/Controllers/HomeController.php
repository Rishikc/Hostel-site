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
        return view('index');
        //return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function login()
    {
        return view('login');
    }

     public function auth(Request $request)
    {
            $username=explode("@",$request->get('email')); 
            $username = $username[0];
            $password=$request->get('password');
            /*$url="{vayu.nitt.edu:993/imap/ssl/novalidate-cert}";
            $imap=@imap_open($url,$username,$password);
            if($imap == true)
            {
                Session::put('user_name',$username);
                Session::put('user_handle',$username);
                Session::put('user_type','faculty');
                return Redirect::to('user/home');
            }
            else
            {
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }*/
            if($username == 'admin' and $password == 'delta')
               { 
                 Session::put('user_name',$username);
                 return Redirect::to('hostels ')   ;
                }
                else
                {
                 return Redirect::to('login ')->with('message', 'Invalid username and password.')   ;
                   
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
        return view('complaint', ['hostels' => $hostel,'mess' => $mess]);   
    }
    public function complaint_submit(Request $request)
    {
        $name =$request->get('name');
        $building=$request->get('option');
        $rollnumber=$request->get('roll');
        $subject=$request->get('subject');
        $details=$request->get('details');
        $hostel_name=$request->get('hostel_name');

        $complaint = Complaints::insert(['building' => $building,'hostel' => $hostel_name,'subject' => $subject,'description' => $details,'created_name' => $name,'created_rollnumber' => $rollnumber]);
        
        if($complaint)
            return 'complaint recored successfully';
        else
            return 'complaint could not be recorded';
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
