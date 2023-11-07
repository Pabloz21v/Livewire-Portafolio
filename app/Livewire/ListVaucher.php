<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListVaucher extends Component
{

    public $title = "hola mundo";
    public $name  = "bbbb";
    public $email = "aaaaa";

    public function save()
    {
        $this->name = "gato";
        $this->email = "perro";


        // $this->reset('name');
        // $this->reset('email');
        //  $name = $this->name ;
        // $email= $this->email ;
    }

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    // public function mount(User $user)
    // {
    //     $this->fill(
    //         $user->only(['name', 'email'])
    //     );
    // }
    public function render()
    {
        return view('livewire.list-vaucher');
        // ->layout('layouts.app');
    }
}
