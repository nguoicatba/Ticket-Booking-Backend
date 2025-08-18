<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventStatus;
use App\Http\Requests\StoreEventStatusRequest;
use App\Http\Requests\UpdateEventStatusRequest;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EventStatus $eventStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventStatus $eventStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventStatusRequest $request, EventStatus $eventStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventStatus $eventStatus)
    {
        //
    }
}
