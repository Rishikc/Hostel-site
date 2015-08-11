<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mess as Mess;
use App\M_Incharge as M_Incharge;

class MessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   $messes=Mess::all();
        return view('mess.overview',compact('messes'));
    }

    public function create()
    {
        $messes = Mess::all();
        return View('mess.create',compact('messes'));
    }

    public function store(Request $request)
    {
        $mess = new Mess;
        $mess->name = $request->get('name');
        $mess->description = $request->get('description');
        $mess->url_name = $request->get('url_name');
        $mess->tags = $request->get('tags');

        
        //$request->file('image')->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/Mess/'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $mess->url_name .'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); 


        $mess->save();
        return redirect('mess/create')->with('message', 'Mess was Successfully Added!!');
    }

    public function messhome($mess_name)
    {
        $mess = Mess::where('url_name', '=', $mess_name)->first();
        $mi = M_Incharge::where('mess_id', '=', $mess["id"])->get();
        $messes = Mess::all();
        return view('mess.home', ['details' => $mess, 'messes' => $messes, 'selected_mess' => $mess_name, 'incharge' => $mi]);
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
  
    public function show()
    {
        $messes = Mess::all();
        return view('mess.index', compact('messes'));
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
