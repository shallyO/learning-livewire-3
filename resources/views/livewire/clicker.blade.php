<div>
    <br>
    <form action="" class="ml-2" wire:submit="createNewUser">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="text" placeholder="email">
        <input wire:model="password" type="text" placeholder="password">

        <button>Create </button>

        <br><br>
        @foreach($users as $user)
            <h1> {{ $user->name }} </h1>
        @endforeach
    </form>
</div>
