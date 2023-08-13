<div class="flex justify-center items-center h-screen bg-gray-100 max-h-80vh overflow-y-auto ">
    <div class="w-2/5">
        <!-- Search Box and Button -->
        <div class="mb-4 flex justify-between">
            <input wire:model.live.debounce.300ms="search" type="text"   placeholder="Search" class="w-4/5 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:border-blue-300">
            <button wire:click="update" class="w-1/5 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                Search
            </button>
        </div>

        <!-- Card 1 -->
        @foreach($users as $row)
            <div class="bg-white p-6 rounded-lg shadow-md mb-4 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold mb-1">{{ $row->name }}</h2>
                    <p class="text-gray-600">{{ $row->email }}</p>
                </div>
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    View
                </button>
            </div>
        @endforeach

        <!-- Add more cards as needed -->

        {{ $users->links() }}
    </div>
</div>
