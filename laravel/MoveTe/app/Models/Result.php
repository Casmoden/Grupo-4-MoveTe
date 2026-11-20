<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'event_id',
        'place',
        'participant_name',
        'modality',
        'time',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
