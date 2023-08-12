<div>
    <h1> {{ $username }}</h1>

    <h1> {{ $title }}</h1>

    {{ count($users) }}
    <button wire:click="createNewUser" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
        Create New User
    </button>
</div>
