<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddCourse extends ModalComponent
{
    public $test1='';
    public $test = [];
     public $inputs = [];
    public $newInput = '';

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


    public function render()
    {
        return view('livewire.add-course');
    }
    public static function attributes(): array {
        return [
            'size'=> '4xl',
            'class'=> 'sm:max-w-7xl'
        ];
    }
    public static function modalMaxWidth():string {
        return '7xl';

    }
}

