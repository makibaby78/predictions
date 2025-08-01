<div class="space-y-8 p-6 bg-white rounded-lg shadow-md">

    <!-- Match Form -->
    <form wire:submit.prevent="saveMatch" class="space-y-6">
        <h2 class="text-2xl font-semibold text-gray-800">Create / Edit Match</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Match Number</label>
                <input type="number" wire:model="match_number"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled At</label>
                <input type="datetime-local" wire:model="scheduled_at"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Winner</label>
            <select wire:model="winner_id"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">TBD</option>
                @if ($series)
                    <option value="{{ $series->team1_id }}">{{ $series->teamA->name ?? 'Team 1' }}</option>
                    <option value="{{ $series->team2_id }}">{{ $series->teamB->name ?? 'Team 2' }}</option>
                @endif
            </select>
        </div>

        <!-- Hero Picks -->
        @if ($series)
            <div class="mt-8 border-t pt-4"></div>
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Hero Picks</h3>
            <div class="flex gap-x-4 justify-between">
                @foreach ([$series->teamA, $series->teamB] as $team)
                    @if ($team)
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-800 mb-2">{{ $team->name }}</h4>
                            <div class="space-y-2">
                                @foreach ($team->players as $player)
                                    <div class="flex items-center gap-4">
                                        <span class="w-48 text-sm text-gray-700">{{ $player->name }}</span>
                                        <select wire:model="heroPicks.{{ $player->id }}"
                                            class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                                            <option value="">Select Hero</option>
                                            @foreach ($heroes as $hero)
                                                <option value="{{ $hero->id }}">{{ $hero->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-600 text-white font-medium px-5 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Save Match
            </button>
        </div>
    </form>

    <hr class="border-t border-gray-200">

    <!-- Matches Table -->
    <div class="overflow-x-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Match List</h2>

        <table class="min-w-full bg-white border border-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Scheduled</th>
                    <th class="px-4 py-2 text-left">Winner</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matches as $match)
                    <!-- Match Row -->
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $match->match_number }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($match->scheduled_at)->format('Y-m-d H:i') }}</td>
                        <td class="px-4 py-2">{{ $match->winner->name ?? 'TBD' }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <button wire:click="editMatch({{ $match->id }})"
                                class="text-blue-600 hover:underline">Edit</button>
                            <button wire:click="deleteMatch({{ $match->id }})"
                                class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>

                    <!-- Hero Picks Row -->
                    <tr class="border-b bg-gray-50">
                        <td colspan="4" class="px-4 py-3">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                @forelse ($match->matchHeroPicks as $pick)
                                    <div class="flex items-center gap-2">
                                        <span class="font-medium text-gray-800">{{ $pick->player->name ?? 'Unknown' }}</span>
                                        <span class="text-gray-500">picked</span>
                                        <span class="text-blue-600 font-semibold">{{ $pick->hero->name ?? 'Unknown Hero' }}</span>
                                        <span class="text-gray-400 text-xs">({{ $pick->team->name ?? 'Unknown Team' }})</span>
                                    </div>
                                @empty
                                    <span class="text-gray-500">No hero picks recorded.</span>
                                @endforelse
                            </div>
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
