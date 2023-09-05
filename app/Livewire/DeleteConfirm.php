<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class DeleteConfirm extends ModalComponent
{
    public function render()
    {
        return view('livewire.delete-confirm');
    }
}
