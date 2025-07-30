@php
    $stages = $this->matches->groupBy('stage');
@endphp

<div class="space-y-10">
    @foreach ($stages as $stage => $stageMatches)
        <div>
            <h1 class="text-2xl font-bold mb-6 dark:text-white">{{ ucfirst($stage) }} Stage</h1>

            @php
                $hasGroup = $stageMatches->pluck('group')->filter()->isNotEmpty();
                $hasBracket = $stageMatches->pluck('bracket')->filter()->isNotEmpty();
            @endphp

            @if ($hasGroup && $hasBracket)
                <div class="grid grid-cols-2 gap-8">
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
                                                            </div>

                                                            <div class="p-2 border-t border-gray-200">
                                                                {{ $match->teamB->name ?? 'TBD' }}
                                                            </div>

                                                            @if ($match->winner && is_object($match->winner))
                                                                <div class="p-2 border-t border-gray-200 text-green-600">
                                                                    Winner: {{ $match->winner->name }}
                                                                </div>
                                                            @endif

                                                            <div class="p-2 border-t border-gray-200">
                                                                <button wire:click="editMatch({{ $match->id }})" class="text-blue-600 hover:underline text-xs">Edit</button>
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
                                        </div>

                                        <div class="p-2 border-t border-gray-200">
                                            {{ $match->teamB->name ?? 'TBD' }}
                                        </div>

                                        @if ($match->winner && is_object($match->winner))
                                            <div class="p-2 border-t border-gray-200 text-green-600">
                                                Winner: {{ $match->winner->name }}
                                            </div>
                                        @endif
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

                    <select wire:model="teamA_id" class="w-full mt-1 p-2 border rounded">
                        <option value="">-- Select Team A --</option>
                        @if ($teamA_id && ! $teams->pluck('id')->contains($teamA_id))
                            <option value="{{ $teamA_id }}" selected>
                                {{ \App\Models\Team::find($teamA_id)?->name ?? 'Unknown Team A' }}
                            </option>
                        @endif
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                    
                    <select wire:model="teamB_id" class="w-full mt-1 p-2 border rounded">
                        <option value="">-- Select Team B --</option>
                        @if ($teamB_id && ! $teams->pluck('id')->contains($teamB_id))
                            <option value="{{ $teamB_id }}" selected>
                                {{ \App\Models\Team::find($teamB_id)?->name ?? 'Unknown Team B' }}
                            </option>
                        @endif
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium dark:text-white">Winner</label>
                        <select wire:model="winner_id" class="w-full mt-1 p-2 border rounded">
                            <option value="">-- Select Winner --</option>
                            @if ($teamA_id)
                                <option value="{{ $teamA_id }}">{{ \App\Models\Team::find($teamA_id)?->name ?? 'Team A' }}</option>
                            @endif
                            @if ($teamB_id)
                                <option value="{{ $teamB_id }}">{{ \App\Models\Team::find($teamB_id)?->name ?? 'Team B' }}</option>
                            @endif
                        </select>
                    </div>                                   

                    <div class="flex justify-end space-x-2">
                        <button wire:click="cancelEdit" class="px-3 py-1 bg-gray-300 rounded">Cancel</button>
                        <button wire:click="updateMatch" class="px-3 py-1 bg-blue-600 text-white rounded">Save</button>
                    </div>
                </div>
            </div>
        @endif

</div>
