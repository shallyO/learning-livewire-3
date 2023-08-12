<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = 'tester';
    public function createNewUser(){
        User::create([
            'name' => 'test user',
            'email' => 'test@test2.com',
            'password' => '560948393434'
        ]);
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
