<div class="mx-auto">
    <h2 class="text-2xl dark:text-white font-bold mb-6">Teams</h2>
    <div class="max-w-3xl">
        <form wire:submit.prevent="{{ $editingTeam ? 'update' : 'create' }}" class="mb-6">
            <div class="flex gap-4 items-center">
                <input type="text" wire:model.defer="name" placeholder="Team Name"
                    class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-800 dark:text-white" required>

                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    {{ $editingTeam ? 'Update' : 'Add Team' }}
                </button>

                @if($editingTeam)
                    <button type="button" wire:click="cancelEdit"
                            class="ml-2 text-gray-500 hover:text-gray-700">
                        Cancel
                    </button>
                @endif
            </div>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </form>
    </div>

    <div class="flex gap-x-4 justify-between mb-4">
        <select wire:model.live="filterCountry"
            class="border border-gray-300 rounded px-3 py-2 dark:bg-gray-800 dark:text-white">
            <option value="">All Countries</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>

        <input
            type="text"
            wire:model.live.debounce.300ms="search"
            placeholder="Search by ID or name..."
            class="px-4 py-2 border border-gray-300 rounded-xl
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    dark:bg-gray-800 dark:border-gray-700 dark:text-white"
        >
    </div>

    @if($teams->count())
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($teams as $team)
                <li class="flex justify-between items-center p-4 bg-white rounded shadow">
                    <div>
                        <span class="text-lg font-semibold">ID - {{ $team->id }} {{ $team->name }}</span>
                        <p class="text-sm text-gray-500">Win Rate: {{ $team->winRate() }}%</p>
                    </div>
                    <div class="space-x-2 flex items-center">
                        <a href="{{ route('teams.show', $team) }}"
                        class="text-green-600 hover:underline text-sm">View</a>
                        <button wire:click="edit({{ $team->id }})"
                                class="text-blue-500 hover:underline text-sm">Edit</button>
                        <button wire:click="delete({{ $team->id }})"
                                class="text-red-500 hover:underline text-sm">Delete</button>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-500">No teams yet.</p>
    @endif
</div>
