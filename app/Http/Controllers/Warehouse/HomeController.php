<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/warehouse/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('warehouse.auth:warehouse');
    }

    /**
     * Show the Warehouse dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('warehouse.home');
    }
}
