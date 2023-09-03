<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class AddCourse extends ModalComponent
{
    public $test1='';
    public $test = [];
    public $inputs = [];
    public $newInput = '';

    #[Rule('required')]
    public $title;
    public $bg_img;
    public $author_id;
    #[Rule('required')]
    public $duration;
    public $paid_course;
    public $description;

    public function mount(){
        $this->paid_course = "true" ? true : false;
        $this->author_id = auth()->id();
        $this->bg_img = "https://static.frontendmasters.com/assets/courses/2023-08-13-node-js-v3/thumb.webp";
    }


    public function store(){
        $this->validate();
        Course::create($this->only(['title', 'bg_img','author_id', 'paid_course', 'duration','description']));
        return $this->redirect('/mycourse');
    }


    public function render()
    {
        return view('livewire.add-course');
    }


    public function addInput()
    {
        if ($this->newInput !== '') {
            array_push($this->inputs, $this->newInput);
            $this->newInput = '';
        }
    }

    public function removeInput($index)
    {
        unset($this->inputs[$index]);
    }
}

