<div class="space-y-10">

    <button 
        wire:click="$set('isCreating', true)" 
        class="cursor-pointer bg-green-500 text-white px-3 py-1 rounded"
    >
        Add serie
    </button>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-xs">
@foreach ($series as $weekNumber => $days)
    <div class="mb-8">

        {{-- WEEK HEADER --}}
        <div class="bg-gray-800 text-white px-4 py-2 rounded-t flex justify-between">
            <span>Week {{ $weekNumber }}</span>
        </div>

        <div class="border border-gray-700">

            @foreach ($days as $date => $matches)
                
                {{-- DAY HEADER --}}
                <div class="bg-gray-900 text-white px-4 py-2 text-sm">
                    Day {{ \Carbon\Carbon::parse($date)->format('d M Y') }}
                </div>

                {{-- MATCH LIST --}}
                @foreach ($matches as $serie)
                    <div class="flex items-center justify-between px-4 py-2 border-t border-gray-700 text-sm">

                        {{-- TEAM 1 --}}
                        <div class="flex items-center gap-2 w-1/3">
                            {{ $serie->teamA->name ?? 'TBD' }}
                        </div>

                        {{-- SCORE / VS --}}
                        <div class="text-center w-1/3 text-gray-400">
                            {{ $serie->winner_id ? 'FINISHED' : 'VS' }}
                        </div>

                        {{-- TEAM 2 --}}
                        <div class="flex items-center justify-end gap-2 w-1/3">
                            {{ $serie->teamB->name ?? 'TBD' }}
                        </div>

                    </div>

                    <div class="p-2 border-t border-gray-700">
                        <div class="text-center text-gray-400">
                            Winner {{ $serie->winner->name }}
                        </div>

                    </div>

                    <div class="p-2 border-t border-gray-700">

                        <a href="{{ route('tournament.series.show', ['tournament' => $serie->tournament_id, 'series' => $serie->id]) }}"
                            class="text-blue-600 hover:underline text-xs cursor-pointer">
                                View Series
                            </a>

                        <button 
                            wire:click="editSeries({{ $serie->id }})" 
                            class="text-blue-600 hover:underline text-xs cursor-pointer">
                                Edit
                        </button>
                    </div>
                @endforeach

            @endforeach

        </div>
    </div>
@endforeach
</div>

    @if ($editingSeries)
        <div class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg w-full max-w-md">
                <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Edit serie</h2>

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

                <div>
                    <label>Tournament</label>
                    <input type="text" class="w-full border rounded p-2 bg-gray-100" value="{{ $tournament->name }}" disabled>
                    <input type="hidden" wire:model="tournament_id">
                </div>
                
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

                <div class="flex justify-between items-center mt-6">
                    <button wire:click="$set('isCreating', false)" class="cursor-pointer px-3 py-1 bg-gray-300 rounded">Cancel</button>
                    <button wire:click="createSeries" class="cursor-pointer px-3 py-1 bg-blue-600 text-white rounded">Create</button>
                </div>
            </div>
        </div>
    @endif

</div>

