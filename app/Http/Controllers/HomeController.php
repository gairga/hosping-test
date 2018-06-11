<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Display a listingn of the resource. 
    *
    * @return Illuminate\Http\Request
    */
    public function index(){

        return view('busqueda');
    } 
}
