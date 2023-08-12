<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|min:2|max:50')]
    public $email = '';

    #[Rule('required|min:2')]
    public $password = '';

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;

    public function createNewUser(){

      $validated =  $this->validate();

      if($this->image){
          $validated['image'] = $this->image->store('uploads');
      }

       $user =  User::create($validated);

        $this->reset(['name', 'email', 'password','image']);

        request()->session()->flash('success', 'User Created Successfully');

        $this->dispatch('user-created', $user);
    }

    public function reloadList(){
        $this->dispatch('user-created');
    }
    public function render()
    {
        $title = "Shaloms first livewire";

        return view('livewire.clicker',
            [
                'title' => $title,
            ]);
    }
}
