<?php

namespace App\Http\Controllers;

use App\Models\Kipi;
use App\Models\VaccineMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $histories = VaccineMember::where('user_id', Auth::user()->id)
            ->where('attendance', '!=', 2)
            ->get();

        return view('layouts.riwayat', ['histories' => $histories]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $member = VaccineMember::find($id);
        return view('layouts.riwayatdetail', ['member' => $member]);
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
    public function destroy($id)
    {
        //
    }

    public function store_kipi(Request $request, $id)
    {
        $request->validate([
            'kipi_date' => ['required'],
            'symptomps' => ['required'],
        ]);

        $kipi = Kipi::create([
            'vaccine_member_id' => $id,
            'kipi_date' => $request->kipi_date,
            'symptomps' => $request->symptomps,
            'medical_treatment' => $request->medical_treatment,
            'call_doctor' => $request->call_doctor,
        ]);

        if ($kipi)
            return redirect(route('riwayat.show', ['id' => $id]));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $kipi,
                    'message' => 'Data not inserted'
                ]
            );
    }

    public function delete_kipi(Request $request, $id)
    {
        $deletedKipi = Kipi::destroy($request->id);

        if ($deletedKipi)
            return redirect(route('riwayat.show', ['id' => $id]));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $deletedKipi,
                    'message' => 'Data not deleted'
                ]
            );
    }
}
