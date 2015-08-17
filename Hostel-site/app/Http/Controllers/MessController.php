<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

use App\Mess as Mess;
use App\M_Incharge as M_Incharge;
use App\mess_feedback as mess_feedback;

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

        //Add a new coloumn in mess_feedback table for the created mess
        $mess_feedback = new mess_feedback;
        $mess_feedback->mess_id = $mess->id;

        $mess_feedback->save();

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
    *Show the form for receiving feedback
    */
    public function feedback()
    {
       /** if(!Session::has('roll_number'))
        {
            return redirect('login');
        }*/
        $messes = Mess::all();
        return view('mess.feedback', compact('messes'));

    }
    /**
    *Store the response in the database
    */
     public function store_feedback(Request $request)
    {
        //Validate form input
        $validator = Validator::make($request->all(), [
            'mess_id' => 'required|integer',
            'quality' => 'required|integer|between:1,5',
            'quantity' => 'required|integer|between:1,5',
            'punctuality' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'overall' => 'required|integer|between:1,5'
        ]); 
        if ($validator->fails()) 
        {
            return redirect('/mess/feedback');
        }
        $mess_feedback = mess_feedback::where('mess_id','=',$request['mess_id'])->first();
        if(!$mess_feedback)
            return redirect('/mess/feedback');
        
        //Retrieve data from old feedbacks
        $quality = $mess_feedback->quality * $mess_feedback->number_of_feebacks + $request['quality'];
        $quantity = $mess_feedback->quantity * $mess_feedback->number_of_feebacks + $request['quantity'];
        $punctuality = $mess_feedback->punctuality * $mess_feedback->number_of_feebacks + $request['punctuality'];
        $cleanliness = $mess_feedback->cleanliness * $mess_feedback->number_of_feebacks + $request['cleanliness'];
        $overall = $mess_feedback->overall * $mess_feedback->number_of_feebacks + $request['overall'];

        //Add the current feedback
        $mess_feedback->number_of_feebacks+=1;

        $mess_feedback->quality = $quality/$mess_feedback->number_of_feebacks;
        $mess_feedback->quantity = $quantity/$mess_feedback->number_of_feebacks;
        $mess_feedback->punctuality = $punctuality/$mess_feedback->number_of_feebacks;
        $mess_feedback->cleanliness = $cleanliness/$mess_feedback->number_of_feebacks;
        $mess_feedback->overall = $overall/$mess_feedback->number_of_feebacks;

        //save the new data
        $mess_feedback->save();
        $messes = Mess::all();
        return view('mess.feedback_response', compact('messes'));
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
