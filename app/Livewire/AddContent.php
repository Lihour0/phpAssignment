<?php

namespace App\Livewire;

use App\Models\Content;
use LivewireUI\Modal\ModalComponent;

class AddContent extends ModalComponent
{

    public $course_id;
    public  $contents = [];

    public function render()
    {
        return view('livewire.add-content');
    }

    public function mount($course_id){
        $this->course_id = $course_id;
    }


    public function store($contents){
        dd($contents);
        Content::create([
            'title' => $contents[0]['title'],
            'description' => $contents[0]['description'],
            'course_id' => $contents[0]['course_id'],
            'video_title'=> $contents[0]['video_title'],
        ]);
    }


}
