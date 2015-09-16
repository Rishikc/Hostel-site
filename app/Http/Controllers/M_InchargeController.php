<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Mess as Mess;
use App\M_Incharge as M_Incharge;


class M_InchargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $mi = M_Incharge::details();
        return view('M_Incharge.index', compact('mi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $messes = Mess::all();
        return view("M_Incharge.create", compact('messes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $mi = new M_Incharge;
        $mi->name = $request->get('name');
        $mi->mess_id = $request->get('mess_id');
        $mi->position = $request->get("position");
        $mi->mail = $request->get('mail');
        $mi->image_url = $request->get('image_url');

        //$request->file('image')->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/Mess Incharge/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $mi->image_url .'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); 


        $mi->save();
        return redirect('m_incharge/create')->with('message', 'Successfully created Mess Incharge!!');

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
