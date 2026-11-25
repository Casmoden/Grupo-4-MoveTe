<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

#[Fillable(['title', 'image', 'description', 'user_id'])]
class News extends Model
{
    use HasFactory, SoftDeletes;

        public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function getPathToImageAttribute()
    {
        return asset('storage/news_images/' . $this->image);
    }
}
