<?php

namespace App\Http\Controllers;

use App\Models\Vaccinator;
use App\Models\VaccineSchedule;
use App\Models\VaccineType;
use Illuminate\Http\Request;

class JadwalVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vaccineSchedules = VaccineSchedule::all();
        return view('layouts.jadwalvaksin', ['vaccineSchedules' => $vaccineSchedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vaccinators = Vaccinator::all();
        $vaccineTypes = VaccineType::all();
        return view('layouts.jadwalcreate', [
            'vaccinators' => $vaccinators,
            'vaccineTypes' => $vaccineTypes
        ]);
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
            'vaccinator_id' => ['required'],
            'vaccine_type_id' => ['required'],
            'vaccine_regisdate_start' => ['required', 'string', 'max:255'],
            'vaccine_regisdate_end' => ['required', 'string', 'max:255'],
            'vaccine_date' => ['required', 'string', 'max:255'],
            'vaccine_session_start' => ['required', 'string', 'max:255'],
            'vaccine_session_end' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'quota' => ['required'],
        ]);

        $schedule = VaccineSchedule::create([
            'vaccinator_id' => $request->vaccinator_id,
            'vaccine_type_id' => $request->vaccine_type_id,
            'vaccine_regisdate_start' => $request->vaccine_regisdate_start,
            'vaccine_regisdate_end' => $request->vaccine_regisdate_end,
            'vaccine_date' => $request->vaccine_date,
            'vaccine_session_start' => $request->vaccine_session_start,
            'vaccine_session_end' => $request->vaccine_session_end,
            'location' => $request->location,
            'quota' => $request->quota,
        ]);

        if ($schedule)
            return redirect(route('jadwal_vaksinasi.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $schedule,
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
        $schedule = VaccineSchedule::find($id);
        return view('layouts.jadwaldetail', ['schedule' => $schedule]);
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
        $vaccinators = Vaccinator::all();
        $vaccineTypes = VaccineType::all();
        $schedule = VaccineSchedule::find($id);
        return view('layouts.jadwaledit', [
            'vaccinators' => $vaccinators,
            'vaccineTypes' => $vaccineTypes,
            'schedule' => $schedule,
        ]);
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
        $request->validate([
            'vaccinator_id' => ['required'],
            'vaccine_type_id' => ['required'],
            'vaccine_regisdate_start' => ['required', 'string', 'max:255'],
            'vaccine_regisdate_end' => ['required', 'string', 'max:255'],
            'vaccine_date' => ['required', 'string', 'max:255'],
            'vaccine_session_start' => ['required', 'string', 'max:255'],
            'vaccine_session_end' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'quota' => ['required'],
        ]);

        $schedule = VaccineSchedule::whereId($id)
            ->update([
                'vaccinator_id' => $request->vaccinator_id,
                'vaccine_type_id' => $request->vaccine_type_id,
                'vaccine_regisdate_start' => $request->vaccine_regisdate_start,
                'vaccine_regisdate_end' => $request->vaccine_regisdate_end,
                'vaccine_date' => $request->vaccine_date,
                'vaccine_session_start' => $request->vaccine_session_start,
                'vaccine_session_end' => $request->vaccine_session_end,
                'location' => $request->location,
                'quota' => $request->quota,
            ]);

        if ($schedule)
            return redirect(route('jadwal_vaksinasi.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $schedule,
                    'message' => 'Data not updated'
                ]
            );
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
        $deleted = VaccineSchedule::destroy($id);
        if ($deleted)
            return redirect(route('jadwal_vaksinasi.index'));
        else
            return response()->json(
                [
                    'success' => false,
                    'data' => $deleted,
                    'message' => 'Data not deleted'
                ]
            );
    }
}
