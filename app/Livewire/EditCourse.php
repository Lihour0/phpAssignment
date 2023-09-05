<?php

namespace App\Livewire;

use App\Models\Course;
use LivewireUI\Modal\ModalComponent;

class EditCourse extends ModalComponent
{

    public $course;

    public function mount($course){
        $this->course = $course;
        $this->course['paid_course'] = $this->course['paid_course'] == 1 ? "true" : "false";
    }
    public function render()
    {
        return view('livewire.edit-course');
    }
    public function update(){
        $this->course['paid_course'] = $this->course['paid_course'] == "true" ? 1 : 0;
        Course::where('id', $this->course['id'])
        ->update(['title'=> $this->course['title'], 'paid_course'=> $this->course['paid_course'], 'duration'=> $this->course['duration'],
            'bg_img'=> $this->course['bg_img'], 'description'=> $this->course['description'], 'course_description' => $this->course['course_description']]);

        return $this->redirect('/mycourse');
    }
}
