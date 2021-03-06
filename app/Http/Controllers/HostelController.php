<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Hostels as Hostels;
use App\H_Incharge as H_Incharge;
use App\complaints as Complaints;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   $hostels = Hostels::all();
        
        return view('Hostels.overview',compact('hostels'));
    }

    public function show()
    {
        $hostels = Hostels::all();
        return view('Hostels.index', compact('hostels'));
    }
    public function create()
    {
        $hostels = Hostels::all();
        return View('Hostels.create',compact('hostels'));
    }

    public function store(Request $request)
    {
        $hostel = new Hostels;
        $hostel->name = $request->get('name');
        $hostel->description = $request->get('description');
        $hostel->url_name = $request->get('url_name');
        $hostel->tags = $request->get('tags');

        
        //$request->file('image')->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/Hostels/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $hostel->url_name .'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); 


        $hostel->save();
        return redirect('hostels/create')->with('message', 'Successfully created Hostel!!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function hostelhome($hostel_name)
    {
        $hostel = Hostels::where('url_name', '=', $hostel_name)->first();
        if(!$hostel)
            return redirect()->action('HostelController@index');
        $hi = H_Incharge::where('hostel_id', '=', $hostel->id)->get();
        $hostels = Hostels::all();
        return view('Hostels.home', ['details' => $hostel, 'hostels' => $hostels, 'selected_hostel' => $hostel_name, 'incharge' => $hi]);
    }
    
    public function hostelgallery($hostel_name)
    {
        $hostel = Hostels::where('url_name', '=', $hostel_name)->first();
        return view('Hostels.gallery', ['details' => $hostel]);   
    }
    
   

    public function hosteledit($hostel_name)
    {
        $hostel = Hostels::where('url_name', '=', $hostel_name)->first();
        return view('Hostels.edit', ['details' => $hostel]);
    }
    
    public function hostelupdate(Request $request,$hostel_name)
    {   
        $hostel_desc=$request->get('description');
        $hostel_tags=$request->get('tags');
    
         $save = Hostels::where('url_name','=',$hostel_name)->update(array(
            'description'   => $hostel_desc,
            'tags'  => $hostel_tags
            ));

        if($save)
            return 'Profile updated successfully';
        else
            return 'Profile could not be updated';

    }



}
