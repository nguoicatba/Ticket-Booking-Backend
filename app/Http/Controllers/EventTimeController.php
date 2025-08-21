<?php

namespace App\Http\Controllers;

use App\Models\EventTime;
use Illuminate\Http\Request;

class EventTimeController extends Controller
{
    public function index()
    {
        return EventTime::with('event')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:255',
            'event_id'   => 'required|exists:events,id',
        ]);

        $eventTime = EventTime::create($validated);
        return response()->json($eventTime, 201);
    }

    public function show(EventTime $eventTime)
    {
        return $eventTime->load('event');
    }

    public function update(Request $request, EventTime $eventTime)
    {
        $validated = $request->validate([
            'start_date' => 'sometimes|date',
            'end_date'   => 'sometimes|date|after_or_equal:start_date',
            'description' => 'nullable|string|max:255',
            'event_id'   => 'sometimes|exists:events,id',
        ]);

        $eventTime->update($validated);
        return response()->json($eventTime);
    }

    public function destroy(EventTime $eventTime)
    {
        $eventTime->delete();
        return response()->json(null, 204);
    }
}
