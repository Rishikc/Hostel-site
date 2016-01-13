<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Hostels as Hostels;
use App\H_Incharge as H_Incharge;


class H_InchargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $hi = H_Incharge::details();
        return view('H_Incharge.index', compact('hi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $hostels = Hostels::all();
        return view("H_Incharge.create", compact('hostels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $hi = new H_Incharge;
        $hi->name = $request->get('name');
        $hi->hostel_id = $request->get('hostel_id');
        $hi->position = $request->get("position");
        $hi->mail = $request->get('mail');
        $hi->image_url = $request->get('image_url');

        //$request->file('image')->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/Hostel Incharge/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $hi->image_url .'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); 

        $hi->save();
        return redirect('h_incharge/create')->with('message', 'Successfully created Hostel Incharge!!');

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
        $h_incharge = H_Incharge::findOrFail($id);
        $hostels = Hostels::all();
        return view('H_Incharge.edit',["h_incharge"=>$h_incharge,"hostels"=>$hostels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
       echo "update";
       echo $id;
       $hi = H_Incharge::findOrFail($id);
        $hi->name = $request->get('name');
        $hi->hostel_id = $request->get('hostel_id');
        $hi->position = $request->get("position");
        $hi->mail = $request->get('mail');
        $hi->image_url = $request->get('image_url');
        if($request->file('image'))
        {
            //$request->file('image')->getClientOriginalExtension();
            $destinationPath = base_path() . '/public/Hostel Incharge/'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = $hi->image_url .'.'.$extension; // renameing image
            $request->file('image')->move($destinationPath, $fileName); 
        }
        $hi->save();
        return redirect('h_incharge/create')->with('message', 'Successfully Edited Hostel Incharge!!');
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
