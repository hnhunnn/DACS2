<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\branch;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function getSchedules($branchId)
    {
        $schedules = Schedule::with('movie')
            ->where('branch_id', $branchId)
            ->get()
            ->map(function ($schedule) {
                return [
                    'movieName' => $schedule->movie->movieName,
                    'image' => asset($schedule->movie->image_path),
                    'showtimes' => $schedule->showtime,
                ];
            });

        return response()->json($schedules);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schedule $schedule)
    {
        //
    }
}
