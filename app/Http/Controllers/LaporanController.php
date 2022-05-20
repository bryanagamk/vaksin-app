<?php

namespace App\Http\Controllers;

use App\Models\VaccineMember;
use App\Models\VaccineSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = VaccineMember::all();
        return view('layouts.laporan', ['members' => $members]);
    }

    public function attendance(Request $request, $id)
    {
        $now = Carbon::now();
        $member = VaccineMember::find($id);
        $member->attendance = $request->attendance;
        if ($request->attendance == 1) {
            $member->vaccine_at = $now->toDateString();
            $member->next_vaccine_at = $now->addMonth(3)->toDateString();
            $member->number_vaccine = $member->number_vaccine + 1;
        } else if ($member->attendance == 2) {
            $member->number_vaccine = $member->number_vaccine;

            // update quota
            $schedule = VaccineSchedule::find($member->vaccine_schedule_id);
            $schedule->remaining_quota = $schedule->remaining_quota + 1;
            $schedule->save();
        }
        $member->save();

        return redirect(route('laporan.index'));
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
}
