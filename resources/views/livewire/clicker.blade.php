<div>
    @if(session('success'))
        <span class="w-100 px-3 py-3 bg-green-600 rounded text-white">{{ session('success') }}</span>
    @endif
    <br>
    <form action="" class="ml-2" wire:submit="createNewUser">
        <input wire:model="name" type="text" placeholder="name" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('name')
            <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <input wire:model="email" type="text" placeholder="email" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('email')
        <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <input wire:model="password" type="text" placeholder="password" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('password')
        <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <button class="block rounded px-3 py-1 border bg-gray-400 text-white">Create </button>

    </form>

    <br>
    <hr>
    <div class="ml-2">
        @foreach($users as $user)
            <h1> {{ $user->name }} </h1>
        @endforeach
    </div>

</div>
