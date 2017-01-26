<?php

namespace reddtica\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
      return view('contacto');
    }

    public function login()
    {
      return view('login');
    }
}
