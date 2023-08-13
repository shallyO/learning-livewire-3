<div wire:poll.visible.20s class=" h-screen bg-gray-300">
    <h2>{{ $title }}</h2>
    <div >
        <table class="min-w-full divide-y divide-gray-200">
            <tr>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">email</th>
            </tr>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>
            @foreach($users as $row)
                <tr>

                    <td> {{ $row->name }}</td>
                    <td> {{ $row->email }}</td>
                </tr>

                @endforeach
                </tr>
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
