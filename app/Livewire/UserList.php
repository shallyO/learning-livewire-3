<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UserList extends Component
{
    use WithPagination;

    #[On('user-created')]
    public function updateList($user = null){
        $this->render();
    }

    public function render()
    {
        $title = "Shaloms first livewire";
        $users = User::paginate(4);

        return view('livewire.user-list',
            [
                'title' => $title,
                'users' => $users
            ]);
    }
}