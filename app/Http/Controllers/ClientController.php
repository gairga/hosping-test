<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $client= new \App\Client;
        
        $client->name=$request->get('name');
        $client->rut=$request->get('rut');
        $client->email='ddd@cl.cl';
        $client->contresenna=4545;
        $client->save();
        
         return redirect('clients')->with('success', 'Information has been added');
    }

    public function index()
    {
        $clients=\App\Client::all();
        return view('index',compact('clients'));
    }
}
