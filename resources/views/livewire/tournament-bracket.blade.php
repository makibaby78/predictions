@php
    $stages = $this->matches->groupBy('stage');
@endphp

<div class="space-y-10">

    <button wire:click="$set('isCreating', true)" class="bg-green-500 text-white px-3 py-1 rounded">Add Match</button>

    @foreach ($stages as $stage => $stageMatches)
        <div>
            <h1 class="text-2xl font-bold mb-6 dark:text-white">{{ ucfirst($stage) }} Stage</h1>

            @php
                $hasGroup = $stageMatches->pluck('group')->filter()->isNotEmpty();
                $hasBracket = $stageMatches->pluck('bracket')->filter()->isNotEmpty();
            @endphp

            @if ($hasGroup && $hasBracket)
                <div>
                    @foreach (['A', 'B'] as $group)
                        <div>
                            <h2 class="text-xl font-bold mb-4 dark:text-white">Group {{ $group }}</h2>

                            @foreach (['upper', 'lower'] as $bracket)
                                @php
                                    $groupMatches = $stageMatches
                                        ->where('group', $group)
                                        ->where('bracket', $bracket);

                                    $groupedRounds = $groupMatches->groupBy('round');
                                @endphp

                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2 capitalize dark:text-white">{{ $bracket }} Bracket</h3>

                                    <div class="grid grid-cols-3 gap-2 items-center">
                                        @foreach ($groupedRounds as $round => $matches)
                                            <div class="mb-4">
                                                <h4 class="text-md font-bold mb-2 dark:text-white">Round {{ $round }}</h4>

                                                <div class="space-y-3">
                                                    @foreach ($matches as $match)
                                                        <div class="border border-gray-300 bg-white rounded shadow-sm overflow-hidden text-sm">
                                                            <div class="p-2">
                                                                {{ $match->teamA->name ?? 'TBD' }}
                                                                @if ($match->teamA)
                                                                    T - ({{ $match->teamA->winRate($match->tournament_id) }}%) |
                                                                    A - ({{ $match->teamA->winRate(null) }}%)
                                                                @endif
                                                            </div>

                                                            <div class="p-2 border-t border-gray-200">
                                                                {{ $match->teamB->name ?? 'TBD' }}
                                                                @if ($match->teamB)
                                                                    T - ({{ $match->teamB->winRate($match->tournament_id) }}%) |
                                                                    A - ({{ $match->teamB->winRate(null) }}%)
                                                                @endif
                                                            </div>
                                                            @if ($match->winner && is_object($match->winner))
                                                                <div class="p-2 border-t border-gray-200 text-green-600">
                                                                    Winner: {{ $match->winner->name }}
                                                                </div>
                                                            @endif

                                                            <div class="p-2 border-t border-gray-200">
                                                                <button wire:click="editMatch({{ $match->id }})" class="text-blue-600 hover:underline text-xs cursor-pointer">Edit</button>
                                                            </div>
                                                        </div>                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Render a flat list without brackets or groups --}}
                @php
                    $groupedRounds = $stageMatches->groupBy('round');
                @endphp

                <div class="grid grid-cols-3 gap-2 items-center">
                    @foreach ($groupedRounds as $round => $matches)
                        <div class="mb-4">
                            <h4 class="text-md font-bold mb-2 dark:text-white">Round {{ $round }}</h4>

                            <div class="space-y-3">
                                @foreach ($matches as $match)
                                    <div class="border border-gray-300 bg-white rounded shadow-sm overflow-hidden text-sm">
                                        <div class="p-2">
                                            {{ $match->teamA->name ?? 'TBD' }}
                                            @if ($match->teamA)
                                                T - ({{ $match->teamA->winRate($match->tournament_id) }}%) |
                                                A - ({{ $match->teamA->winRate(null) }}%)
                                            @endif
                                        </div>

                                        <div class="p-2 border-t border-gray-200">
                                            {{ $match->teamB->name ?? 'TBD' }}
                                            @if ($match->teamB)
                                                T - ({{ $match->teamB->winRate($match->tournament_id) }}%) |
                                                A - ({{ $match->teamB->winRate(null) }}%)
                                            @endif
                                        </div>

                                        @if ($match->winner && is_object($match->winner))
                                            <div class="p-2 border-t border-gray-200 text-green-600">
                                                Winner: {{ $match->winner->name }}
                                            </div>
                                        @endif
                                        <div class="p-2 border-t border-gray-200">
                                            <button wire:click="editMatch({{ $match->id }})" class="text-blue-600 hover:underline text-xs cursor-pointer">Edit</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach

    @if ($editingMatch)
        <div class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg w-full max-w-md">
                <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Edit Match</h2>

                <select wire:model="team1_id" class="w-full mt-1 p-2 border rounded dark:bg-white">
                    <option value="">-- Select Team A --</option>
                    @if ($team1_id && ! $teams->pluck('id')->contains($team1_id))
                        <option value="{{ $team1_id }}" selected>
                            {{ \App\Models\Team::find($team1_id)?->name ?? 'Unknown Team A' }}
                        </option>
                    @endif
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                
                <select wire:model="team2_id" class="w-full mt-1 p-2 border rounded dark:bg-white">
                    <option value="">-- Select Team B --</option>
                    @if ($team2_id && ! $teams->pluck('id')->contains($team2_id))
                        <option value="{{ $team2_id }}" selected>
                            {{ \App\Models\Team::find($team2_id)?->name ?? 'Unknown Team B' }}
                        </option>
                    @endif
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium dark:text-white mt-4">Winner</label>
                    <select wire:model="winner_id" class="w-full mt-1 p-2 border rounded dark:bg-white">
                        <option value="">-- Select Winner --</option>
                        @if ($team1_id)
                            <option value="{{ $team1_id }}">{{ \App\Models\Team::find($team1_id)?->name ?? 'Team A' }}</option>
                        @endif
                        @if ($team2_id)
                            <option value="{{ $team2_id }}">{{ \App\Models\Team::find($team2_id)?->name ?? 'Team B' }}</option>
                        @endif
                    </select>
                </div>                                   

                <div class="flex justify-between items-center mt-6">
                    <button wire:click="deleteMatch" class="px-3 py-1 cursor-pointer bg-red-600 text-white rounded">Delete</button>
                    <div class="flex space-x-2">
                        <button wire:click="cancelEdit" class="px-3 py-1 cursor-pointer bg-gray-300 rounded">Cancel</button>
                        <button wire:click="updateMatch" class="px-3 py-1 cursor-pointer bg-blue-600 text-white rounded">Save</button>
                    </div>
                </div>                    
            </div>
        </div>
    @endif

    @if ($isCreating)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded w-full max-w-lg space-y-4">
                <h2 class="text-lg font-bold">Create Match</h2>

                <div>
                    <label>Tournament</label>
                    <input type="text" class="w-full border rounded p-2 bg-gray-100" value="{{ $tournament->name }}" disabled>
                    <input type="hidden" wire:model="tournament_id">
                </div>
                
                <div>
                    <label>Team 1</label>
                    <select wire:model="team1_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Team 2</label>
                    <select wire:model="team2_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" wire:model="bracket" placeholder="Bracket" class="border rounded p-2">
                    <input type="text" wire:model="group" placeholder="Group" class="border rounded p-2">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" wire:model="stage" placeholder="Stage" class="border rounded p-2">
                    <input type="number" wire:model="round" placeholder="Round" class="border rounded p-2">
                </div>

                <div>
                    <label>Winner</label>
                    <select wire:model="winner_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <button wire:click="$set('isCreating', false)" class="px-3 py-1 bg-gray-300 rounded">Cancel</button>
                    <button wire:click="createMatch" class="px-3 py-1 bg-blue-600 text-white rounded">Create</button>
                </div>
            </div>
        </div>
    @endif

</div>

