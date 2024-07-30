<?php

namespace App\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $tasks = [];
    public $task = '';

    public function mount()
    {
        $this->tasks = ['First Task', 'Second Task'];
    }

    public function Add()
    {
            $this->tasks[] = $this->task;
            $this->task = '';
    }

    public function render()
    {
        return view('livewire.task');
    }
}
