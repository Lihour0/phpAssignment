<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Content extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $fillable = [
        'title',
        'description',
        'video_title',
        'video_img',
        'video_description',
        'video',
        'course_id'
    ];

    public function course(){
        return $this->belongTo(Course::class);

    }

}

