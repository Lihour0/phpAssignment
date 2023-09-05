<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class AddCourse extends ModalComponent
{

    #[Rule('required')]
    public $title;
    public $bg_img;
    public $author_id;
    #[Rule('required')]
    public $duration;
    public $paid_course = true;
    public $paid_course_int;
    public $description;
    public $course_description;
    public $tag;

    public function mount(){
        $this->author_id = auth()->id();
        $this->bg_img = "https://static.frontendmasters.com/assets/courses/2023-08-13-node-js-v3/thumb.webp";
    }


    public function store(){
        $this->validate();
        $this->paid_course = $this->paid_course == "true" ? 1 : 0;
        Course::create($this->only(['title', 'bg_img','author_id', 'paid_course', 'course_description','duration','description', 'tag']));
        return $this->redirect('/mycourse');
    }


    public function render()
    {
        return view('livewire.add-course');
    }


}

