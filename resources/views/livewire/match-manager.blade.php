<div class="space-y-8 p-6 bg-white rounded-lg shadow-md">

    <!-- Form Section -->
    <form wire:submit.prevent="saveMatch" class="space-y-6">
        <h2 class="text-xl font-semibold text-gray-800">Create / Edit Match</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Match Number</label>
                <input type="number" wire:model="match_number" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled At</label>
                <input type="datetime-local" wire:model="scheduled_at" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Winner</label>
            <select wire:model="winner_id" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">TBD</option>
                @if ($series)
                    <option value="{{ $series->team1_id }}">{{ $series->teamA->name ?? 'Team 1' }}</option>
                    <option value="{{ $series->team2_id }}">{{ $series->teamB->name ?? 'Team 2' }}</option>
                @endif
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white font-medium px-5 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Save Match
            </button>
        </div>
    </form>

    <!-- Divider -->
    <hr class="border-t border-gray-300">

    <!-- Matches Table -->
    <div class="overflow-x-auto">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Match List</h2>

        <table class="min-w-full bg-white border border-gray-200 text-sm">
            <thead class="bg-gray-50 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Scheduled</th>
                    <th class="px-4 py-2 text-left">Winner</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matches as $match)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $match->match_number }}</td>
                        <td class="px-4 py-2">{{ $match->scheduled_at }}</td>
                        <td class="px-4 py-2">{{ $match->winner->name ?? 'TBD' }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <button wire:click="editMatch({{ $match->id }})" class="text-blue-600 hover:underline">Edit</button>
                            <button wire:click="deleteMatch({{ $match->id }})" class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-4 text-center text-gray-500">No matches found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
