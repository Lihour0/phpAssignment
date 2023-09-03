<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        return view('course.index', ['courses' => Course::with('author')->get()]);
    }
    public function show(Course $course){
        return view('course.show', ['course'=> $course]);
    }
    public function store(Request $req){
        $req->validate([
            'title'=>['required'],
            'bg_img'=>['required'],
        ]);

         Course::create([
            'title' => $req->title,
            'bg_img' => $req->bg_img,
            'author_id'=> auth()->id(),
            'paid_course' => $req->paid_course == "true" ? true : false
        ]);
        return redirect("/mycourse");
    }
    public function delete(Int $id){
        $course = Course::findOrFail($id);
        $this->authorize('delete',$course);
        $course->delete();
        return redirect('/mycourse');
    }
}

