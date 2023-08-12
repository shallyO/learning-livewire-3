<div>
    @if(session('success'))
        <span class="w-100 px-3 py-3 bg-green-600 rounded text-white">{{ session('success') }}</span>
    @endif
    <br>
    <form action="" class="ml-2" wire:submit="createNewUser">
        <label for=""> Name</label>
        <input wire:model="name" type="text" placeholder="name" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('name')
            <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <label for=""> Email</label>
        <input wire:model="email" type="text" placeholder="email" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('email')
        <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <label for=""> Password</label>
        <input wire:model="password" type="text" placeholder="password" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('password')
        <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror
        <label for="">Image</label>
        <input id="image" type="file" accept="image/png image/jpeg" wire:model="image" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('image')
        <span class="text-red-500 text-xs"> {{ $message }}</span>
        @enderror

        @if($image)
            <img src="{{ $image->temporaryUrl() }}" alt="no image yet">
        @endif

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading...</span>
        </div>
        <button class="block rounded px-3 py-1 border bg-gray-400 text-white">Create </button>

    </form>

    <br>
    <hr>
</div>
