<?php

namespace App\Http\Controllers;

use App\Models\Vaksinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class VaksinatorController extends Controller
{
    private $currentURL;
    public function __construct()
    {
        $this->currentURL = Route::current()->getName();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard', ['url' => $this->currentURL]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaksinator $vaksinator)
    {
        //
    }
}
