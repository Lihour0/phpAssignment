<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    //
    public function index(){
        return view('mycourse.index', ['mycourses' => Course::all()->where('author_id','=', auth()->user()->id)]);
    }
    public function show(){
        return view('mycourse.show');
    }
    public function delete(Int $id){
        $course = Course::findOrFail($id);
        $this->authorize('delete',$course);
        $course->delete();
        return redirect('/mycourse');
    }
}
