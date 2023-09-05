<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use Illuminate\Auth\Middleware\Authorize;

class MyCourse extends Component
{

    public function render()
    {
        return view('livewire.my-course',  ['mycourses' => Course::all()->where('author_id','=', auth()->user()->id)]);
    }
    public function delete(Int $id){
        $course = Course::findOrFail($id);
        Authorize::using('delete', $course);
        if(auth()->user()->role !== "teacher")
            abort(403);
        $course->delete();
    }
}
