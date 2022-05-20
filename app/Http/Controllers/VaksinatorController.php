<?php

namespace App\Http\Controllers;

use App\Models\Vaccinator;
use Illuminate\Http\Request;

class VaksinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinators = Vaccinator::all();
        return view('layouts.vaksinator', ['vaccinators' => $vaccinators]);
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

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);


        $vaccinator = Vaccinator::create([
            'name'  => $request->name
        ]);


        if ($vaccinator)
            return redirect(route('vaksinator.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $vaccinator,
                    'message' => 'Data not inserted'
                ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccinator  $vaccinator
     * @return \Illuminate\Http\Response
     */
    public function show($vaccinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccinator  $vaccinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccinator $vaccinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccinator  $vaccinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccinator $vaccinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vaccinator = Vaccinator::destroy($request->id);

        if ($vaccinator)
            return redirect(route('vaksinator.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $vaccinator,
                    'message' => 'Data not deleted'
                ]
            );
    }
}
