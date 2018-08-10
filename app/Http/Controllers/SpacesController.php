<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpacesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *Show the main spaces page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spaces');
    }
}