<?php

namespace App\Livewire;

use App\Models\Content;
use LivewireUI\Modal\ModalComponent;

class AddContent extends ModalComponent
{

    public $course_id;
    public  $contents = [];


    public function mount($course_id ){
        $this->course_id = $course_id;
    }


    public function render()
    {
        return view('livewire.add-content');
    }



    public function store($contents){
        $this->validate();
        foreach($contents as $content){
            Content::create([
                'title' => $content['title'],
                'description' => $content['description'],
                'course_id' => $content['course_id'],
                'video_title'=> $content['video_title'],
                'video_description'=> $content['video_description'],
            ]);

        }
        return $this->redirect('/mycourse');
    }
}
