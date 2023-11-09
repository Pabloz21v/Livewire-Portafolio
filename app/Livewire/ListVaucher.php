<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListVaucher extends Component
{

    public $title = "hola mundo";

    public $users;
    public $user;
    public $name;
    public $email;
    public $password;

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function mount(User $user)
    {

        $this->users = User::get();

        //  $this->users = $user;
        // $this->fill(
        //     $user->only(['name', 'email'])
        // );
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
 
        $this->authorize('delete', $user);
 
        $user->delete();
    }


    public function render()
    {
        return view('livewire.list-vaucher');
        // ->layout('layouts.app');
    }
}
