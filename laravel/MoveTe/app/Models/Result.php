<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['event_id', 'place', 'participant_name', 'modality', 'time'])]
class Result extends Model
{
    use HasFactory, SoftDeletes;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
