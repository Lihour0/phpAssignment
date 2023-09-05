<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'title',
        'bg_img',
        'description',
        'course_description',
        'duration',
        'paid_course',
        'author_id',
        'tag'
    ];
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function content(){
        return $this->hasMany(Content::class);
    }
}
