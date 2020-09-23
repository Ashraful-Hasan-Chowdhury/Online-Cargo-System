<?php

namespace App\Http\Controllers\Cargo;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/cargo/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cargo.auth:cargo');
    }

    /**
     * Show the Cargo dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('cargo.home');
    }

}