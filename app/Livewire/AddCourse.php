<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddCourse extends ModalComponent
{
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

