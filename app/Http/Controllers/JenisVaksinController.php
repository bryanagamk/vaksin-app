<?php

namespace App\Http\Controllers;

use App\Models\VaccineType;
use Illuminate\Http\Request;

class JenisVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vaccineTypes = VaccineType::all();
        return view('layouts.jenisvaksin', ['vaccineTypes' => $vaccineTypes]);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $vaccineType = VaccineType::create([
            'name'  => $request->name
        ]);


        if ($vaccineType)
            return redirect(route('jenis_vaksin.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $vaccineType,
                    'message' => 'Data not inserted'
                ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $vaccineType = VaccineType::destroy($request->id);

        if ($vaccineType)
            return redirect(route('jenis_vaksin.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $vaccineType,
                    'message' => 'Data not deleted'
                ]
            );
    }
}
