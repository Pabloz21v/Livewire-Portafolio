<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateVaucher extends Component
{

    public User $user;
    #[Rule('required | max:10')]
    public $name = '';
    #[Rule('required | min:10')]
    public $email = '';
    #[Rule('required | min:8')]
    public $password = '';
    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function save()
    {
        $this->validate();
        $this->user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        return redirect()->to('/vaucher/list')
            ->with('status', 'User created!');
    }

    public function update()
    {
        $user = User::findOrFail($this->id);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        session()->flash('message', 'Post updated successfully!');
    }
    public function render()
    {
        return view('livewire.create-vaucher');
    }
}
