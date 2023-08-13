<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UserList extends Component
{
    use WithPagination;

    public $search ;
    public function placeholder(){
        return view('placeholder');
    }

    public function update(){

    }


    public function render()
    {
        $title = "Shaloms first livewire";

        return view('livewire.user-list',
            [
                'title' => $title,
                'users' => User::latest()
                ->where('name', 'like', "%{$this->search}%")
                ->paginate(3)
            ]);
    }
}
