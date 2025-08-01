<div class="mt-6">
    <h2 class="text-xl font-semibold mb-2">Add Player</h2>
    <form wire:submit.prevent="addPlayerToTeam" class="space-y-4 bg-white p-6 rounded-xl shadow-md">
        <div>
            <label for="player" class="block text-sm font-semibold text-gray-700 mb-1">Select Player</label>
            <select id="player" wire:model="playerIdToAdd" required
                    class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="">-- Choose Player --</option>
                @foreach($availablePlayers as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div>
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg transition-all duration-150 ease-in-out">
                Add Player to Team
            </button>
        </div>
    </form>    

    {{-- Active Players --}}
    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-2">Active Players</h2>

        @if($activePlayers->isNotEmpty())
            <ul class="space-y-2">
                @foreach ($activePlayers as $player)
                    <li class="bg-gray-100 p-4 rounded shadow-sm flex justify-between items-start">
                        <div>
                            <p class="text-gray-800 font-medium">{{ $player->name }}</p>
                            <p class="text-sm text-gray-500">Position: {{ $player->position ?? 'N/A' }}</p>
                            <p class="text-sm text-green-600 font-semibold mt-1">Status: Active</p>
                        </div>
                        <button wire:click="markAsLeft({{ $player->id }})"
                                onclick="return confirm('Mark player as left the team?')"
                                class="text-red-600 text-sm hover:underline mt-1">
                            Mark as Left
                        </button>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500 italic">No active players in this team.</p>
        @endif
    </div>

    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-2">Players Who Left</h2>

        @if($leftPlayers->isNotEmpty())
            <ul class="space-y-2">
                @foreach ($leftPlayers as $player)
                    <li class="bg-gray-50 p-4 rounded shadow-sm">
                        <p class="text-gray-800 font-medium">{{ $player->name }}</p>
                        <p class="text-sm text-gray-500">Position: {{ $player->position ?? 'N/A' }}</p>
                        <p class="text-sm text-red-600 font-semibold mt-1">
                            Left on {{ \Carbon\Carbon::parse($player->pivot->left_at)->format('F j, Y') }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500 italic">No players have left this team yet.</p>
        @endif
    </div>
</div>
