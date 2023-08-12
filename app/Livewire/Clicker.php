<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component
{
    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|min:2|max:50')]
    public $email = '';

    #[Rule('required|min:2')]
    public $password = '';
    public function createNewUser(){

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User Created Successfully');
    }
    public function render()
    {
        $title = "Shaloms first livewire";

        $users = User::all();
        return view('livewire.clicker',
            [
                'users' => $users,
                'title' => $title
            ]);
    }
}
