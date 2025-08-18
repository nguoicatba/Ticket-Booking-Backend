<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventStatus;
use Illuminate\Http\Request;
use App\Models\Event;

class EventStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return EventStatus::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ]);

        $EventStatus = EventStatus::create($request->only('name', 'description'));

        return response()->json($EventStatus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventStatus $EventStatus)
    {
        //
        return $EventStatus;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventStatus $EventStatus)
    {
        //
        $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ]);

        $EventStatus = EventStatus::update($request->only('name', 'description'));
        return response()->json($EventStatus, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventStatus $EventStatus)
    {
        //
        $EventStatus->delete();

        return 'success';
    }
}
