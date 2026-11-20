<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'date',
        'hour',
        'local',
        'distance',
    ];

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
