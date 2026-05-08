<div class="space-y-10">

    <button 
        wire:click="$set('isCreating', true)" 
        class="cursor-pointer bg-green-500 text-white px-3 py-1 rounded"
    >
        Add serie
    </button>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-xs">
    @foreach ($series as $weekNumber => $days)
        <div class="mb-10">

            {{-- WEEK HEADER --}}
            <div class="bg-gray-800 text-white px-5 py-3 rounded-t-lg">
                <span class="font-semibold">Week {{ $weekNumber }}</span>
            </div>

            <div class="border border-gray-700 rounded-b-lg overflow-hidden">

                @foreach ($days as $date => $matches)

                    {{-- DAY HEADER --}}
                    <div class="bg-gray-900 text-gray-300 px-5 py-2 text-xs uppercase tracking-wide">
                        {{ \Carbon\Carbon::parse($date)->format('d M Y') }}
                    </div>

                    @foreach ($matches as $serie)

                        <div class="px-3 py-3 border-t border-gray-700 bg-gray-800/30">

                            <div class="flex items-center justify-between gap-4">

                                {{-- TEAM 1 --}}
                                <div class="w-1/3 flex items-center gap-2">
                                    <span class="
                                        font-medium
                                        {{ $serie->winner_id === $serie->team1_id ? 'text-green-400 font-bold' : 'text-white' }}
                                    ">
                                        {{ $serie->teamA->name ?? 'TBD' }}
                                    </span>
                                </div>

                                {{-- STATUS --}}
                                <div class="w-1/3 text-center">
                                    @if ($serie->winner_id)
                                        <span class="text-green-400 text-xs px-2 py-1 rounded bg-green-500/10">
                                            FINISHED
                                        </span>
                                    @else
                                        <span class="text-gray-400 text-xs">VS</span>
                                    @endif
                                </div>

                                {{-- TEAM 2 --}}
                                <div class="w-1/3 flex justify-end items-center gap-2">
                                    <span class="
                                        font-medium
                                        {{ $serie->winner_id === $serie->team2_id ? 'text-green-400 font-bold' : 'text-white' }}
                                    ">
                                        {{ $serie->teamB->name ?? 'TBD' }}
                                    </span>
                                </div>

                            </div>

                            {{-- RIGHT ACTIONS --}}
                            <div class="mt-3 flex justify-end gap-4 text-xs">

                                <a href="{{ route('tournament.series.show', ['tournament' => $serie->tournament_id, 'series' => $serie->id]) }}"
                                class="text-blue-400 hover:text-blue-300">
                                    View Series
                                </a>

                                <button wire:click="editSeries({{ $serie->id }})"
                                        class="text-yellow-400 hover:text-yellow-300 cursor-pointer">
                                    Edit
                                </button>

                            </div>

                            {{-- ACTIONS --}}
                            <div class="mt-3 flex justify-between items-center">

                                {{-- MATCH DROPDOWN --}}
                                <details class="group w-full text-xs">
                                    <summary class="cursor-pointer text-gray-400 hover:text-white list-none flex items-center gap-2">
                                        <span>Matches</span>

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 transition-transform group-open:rotate-180"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </summary>

                                    {{-- STATIC MATCH LIST --}}
                                    <div class="mt-3 w-auto border border-gray-700 bg-gray-900 overflow-hidden">

                                        <div class="px-3 py-2 border-b border-gray-700 text-gray-300 text-xs font-semibold">
                                            Match List
                                        </div>

                                        <div class="divide-y divide-gray-700 text-xs">
                                            
                                            @foreach ($serie->matches as $match)
                                                <div class="px-3 py-2 flex justify-between items-center">

                                                    <span class="text-white">
                                                        {{ $match->match_number}}
                                                    </span>

                                                    <span class="text-white">
                                                        <span class="{{ $match->winner_id == $serie->teamA->id ? 'text-green-600' : 'text-red-600' }}">
                                                            {{ $match->winner_id == $serie->teamA->id ? 'W' : 'L' }} 
                                                        </span>

                                                        {{ $serie->teamA->name ?? 'TBD' }}
                                                    </span>

                                                    <span class="text-white">
                                                        <span class="{{ $match->winner_id == $serie->teamB->id ? 'text-green-600' : 'text-red-600' }}">
                                                            {{ $match->winner_id == $serie->teamB->id  ? 'W' : 'L'; }} 
                                                        </span>

                                                        {{ $serie->teamB->name ?? 'TBD' }}
                                                    </span>
                                                </div>
                                            @endforeach

                                            {{-- <div class="px-3 py-2 flex justify-between items-center">
                                                <span class="text-white">
                                                    {{ $serie->teamA->name ?? 'TBD' }}
                                                </span>

                                                <span class="text-gray-400">
                                                    0 - 2
                                                </span>

                                                <span class="text-white">
                                                    {{ $serie->teamB->name ?? 'TBD' }}
                                                </span>
                                            </div>

                                            <div class="px-3 py-2 flex justify-between items-center">
                                                <span class="text-white">
                                                    {{ $serie->teamA->name ?? 'TBD' }}
                                                </span>

                                                <span class="text-gray-400">
                                                    1 - 0
                                                </span>

                                                <span class="text-white">
                                                    {{ $serie->teamB->name ?? 'TBD' }}
                                                </span>
                                            </div> --}}

                                        </div>

                                    </div>
                                </details>

                            </div>

                        </div>

                    @endforeach

                @endforeach

            </div>
        </div>
    @endforeach
</div>

    @if ($editingSeries)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded w-full max-w-lg space-y-4">
                <h2 class="text-lg font-bold">Edit serie</h2>

                {{-- TOURNAMENT --}}
                <div>
                    <label>Tournament</label>
                    <input type="text" class="w-full border rounded p-2 bg-gray-100"
                        value="{{ $tournament->name }}" disabled>
                    <input type="hidden" wire:model="tournament_id">
                </div>

                 {{-- MATCH DATE --}}
                <div>
                    <label>Match Date</label>
                    <input type="datetime-local"
                        wire:model="match_date"
                        class="w-full border rounded p-2">

                    @error('match_date')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- TEAM 1 --}}
                <div>
                    <label>Team 1</label>
                    <select wire:model.change="team1_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($this->filteredFirstTeams as $team)
                            <option wire:key="team1-{{ $team->id }}" value="{{ $team->id }}">
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('team1_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                
                {{-- TEAM 2 --}}
                <div>
                    <label>Team 2</label>
                    <select wire:model.change="team2_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($this->filteredSecondTeams as $team)
                            <option wire:key="team2-{{ $team->id }}" value="{{ $team->id }}">
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('team2_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                
                {{-- WINNER --}}
                <div>
                    <label>Winner {{ $winner_id }}</label>
                    <select wire:model="winner_id" class="w-full border rounded p-2">
                        <option value="" disabled>-- Select Team --</option>
                        @if ($team1_id)
                            <option value="{{ $team1_id }}">{{ \App\Models\Team::find($team1_id)?->name ?? 'Team A' }}</option>
                        @endif
                        @if ($team2_id)
                            <option value="{{ $team2_id }}">{{ \App\Models\Team::find($team2_id)?->name ?? 'Team B' }}</option>
                        @endif
                    </select>

                    @error('winner_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-between items-center mt-6">
                    <button wire:click="deleteSeries" class="px-3 py-1 cursor-pointer bg-red-600 text-white rounded">Delete</button>
                    <div class="flex space-x-2">
                        <button wire:click="cancelEdit" class="px-3 py-1 cursor-pointer bg-gray-300 rounded">Cancel</button>
                        <button wire:click="updateSeries" class="px-3 py-1 cursor-pointer bg-blue-600 text-white rounded">Save</button>
                    </div>
                </div>                    
            </div>
        </div>
    @endif

    @if ($isCreating)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded w-full max-w-lg space-y-4">

                <h2 class="text-lg font-bold">Create serie</h2>

                {{-- TOURNAMENT --}}
                <div>
                    <label>Tournament</label>
                    <input type="text" class="w-full border rounded p-2 bg-gray-100"
                        value="{{ $tournament->name }}" disabled>
                    <input type="hidden" wire:model="tournament_id">
                </div>

                {{-- MATCH DATE --}}
                <div>
                    <label>Match Date</label>
                    <input type="datetime-local"
                        wire:model="match_date"
                        class="w-full border rounded p-2">

                    @error('match_date')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- TEAM 1 --}}
                <div>
                    <label>Team 1</label>
                    <select wire:model.change="team1_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($this->filteredFirstTeams as $team)
                            <option wire:key="team1-{{ $team->id }}" value="{{ $team->id }}">
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('team1_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- TEAM 2 --}}
                <div>
                    <label>Team 2</label>
                    <select wire:model.change="team2_id" class="w-full border rounded p-2">
                        <option value="">--</option>
                        @foreach($this->filteredSecondTeams as $team)
                            <option wire:key="team2-{{ $team->id }}" value="{{ $team->id }}">
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('team2_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- WINNER --}}
                <div>
                    <label>Winner</label>
                    <select wire:model="winner_id" class="w-full border rounded p-2">
                        <option value="" disabled>-- Select Team --</option>
                        @foreach($this->participant_ids as $id)
                            @php
                                $team = $teams->firstWhere('id', $id);
                            @endphp

                            @if($team)
                                <option value="{{ $team->id }}">
                                    {{ $team->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>

                    @error('winner_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- ACTIONS --}}
                <div class="flex justify-between items-center mt-6">
                    <button wire:click="$set('isCreating', false)"
                            class="cursor-pointer px-3 py-1 bg-gray-300 rounded">
                        Cancel
                    </button>

                    <button wire:click="createSeries"
                            class="cursor-pointer px-3 py-1 bg-blue-600 text-white rounded">
                        Create
                    </button>
                </div>

            </div>
        </div>
    @endif

</div>

