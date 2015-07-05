<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mess as Mess;

class MessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   $messes=Mess::lists('url_name');
        return view('mess.overview',compact('messes'));
    }

    public function messhome($mess_name)
    {
        $mess = Mess::where('url_name', '=', $mess_name)->first();
        return view('mess.home', ['details' => $mess]);
    }
    
    public function messedit($mess_name)
    {
        $mess = Mess::where('url_name', '=', $mess_name)->first();
        return view('mess.edit', ['details' => $mess]);
    }

    public function messupdate(Request $request,$mess_name)
    {
        $mess_desc=$request->get('description');
        $mess_tags=$request->get('tags');
    
         $save = Mess::where('url_name','=',$mess_name)->update(array(
            'description'   => $mess_desc,
            'tags'  => $mess_tags
            ));

        if($save)
            return 'Profile updated successfully';
        else
            return 'Profile could not be updated';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
