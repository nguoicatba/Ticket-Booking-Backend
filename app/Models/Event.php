<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'start_date',
        'end_date',
        'description',
        'event_id',
    ];

    // Quan hệ: EventTime thuộc về Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
