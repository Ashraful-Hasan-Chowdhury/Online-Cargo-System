<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/driver/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('driver.auth:driver');
    }

    /**
     * Show the Driver dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('driver.home');
    }

}