<div class="max-w-3xl mx-auto">
    <h2 class="text-2xl dark:text-white font-bold mb-6">Teams for {{ $game->name }}</h2>

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

    @if($teams->count())
        <ul class="space-y-4">
            @foreach ($teams as $team)
                <li class="flex justify-between items-center p-4 bg-white rounded shadow">
                    <div>
                        <span class="text-lg font-semibold">{{ $team->name }}</span>
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
