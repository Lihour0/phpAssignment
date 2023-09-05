<?php

namespace App\Livewire;

use App\Models\Content;
use LivewireUI\Modal\ModalComponent;

class EditContent extends ModalComponent
{
    public $content=[];
    public $removedItem =[];

    public function mount($content){
        $this->content = $content;
    }
    public function update($contents){
        if(count($this->content) < $contents){
            foreach($this->removedItem as $content){
                Content::where('id', $content['id'])->delete();
            }

        }
        foreach($contents as $content){
            Content::where('id', $content['id'])->update([
                'title' => $content['title'],
                'description' => $content['description'],
                'course_id' => $content['course_id'],
                'video_title'=> $content['video_title'],
                'video_description'=> $content['video_description'],
            ]);

        }
        return $this->redirect('/mycourse');

    }

    public function render()
    {
        return view('livewire.edit-content');
    }
}
