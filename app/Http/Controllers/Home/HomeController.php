<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
// use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function index()
    {
        return view('home.trangchu');
    }

}
