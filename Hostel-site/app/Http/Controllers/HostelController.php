<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('Hostels');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function Zircon_A()
    {
        return view('Hostels.Zircon-A.home');
    }

    public function Zircon_A_council()
    {
        return view('Hostels.Zircon-A.council');
    }

    public function Zircon_A_gallery()
    {
        return view('Hostels.Zircon-A.gallery');
    }

    

    public function Zircon_B()
    {
        return view('Hostels.Zircon-B.home');
    }

    public function Zircon_B_council()
    {
        return view('Hostels.Zircon-B.council');
    }

    public function Zircon_B_gallery()
    {
        return view('Hostels.Zircon-B.gallery');
    }



   
    public function Zircon_C()
    {
        return view('Hostels.Zircon-C.home');
    }

    public function Zircon_C_council()
    {
        return view('Hostels.Zircon-C.council');
    }

    public function Zircon_C_gallery()
    {
        return view('Hostels.Zircon-C.gallery');
    }


}
