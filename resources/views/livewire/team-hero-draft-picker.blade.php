<div class="bg-white rounded-xl shadow-sm border p-6 space-y-10">

    {{-- HEADER --}}
    <div>
        <h1 class="text-xl font-semibold text-gray-800">
            Team Hero Draft Picker
        </h1>
        <p class="text-sm text-gray-500">
            Select teams and assign hero picks per player
        </p>
    </div>

    {{-- TEAM GRID --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        {{-- TEAM 1 --}}
        <div class="space-y-5">

            <div>
                <label class="text-sm font-medium text-gray-600">Team 1</label>

                <select
                    wire:model.live="team1Id"
                    class="w-full mt-1 border-gray-300 rounded-lg shadow-sm text-base py-2.5 px-3 focus:ring focus:ring-blue-200"
                >
                    <option value="">Select Team</option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" @disabled($team->id == $team2Id)>
                            {{ $team->name }} {{ $team->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            @if(count($team1Players))
                <div class="bg-gray-50 rounded-lg p-5 space-y-4 border">

                    <h2 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                        Team 1 Players
                    </h2>

                    <div class="space-y-4">
                        @foreach($team1Players as $player)
                            <div class="flex items-center gap-6 py-1">

                                <div class="w-52 text-sm font-medium text-gray-700">
                                    {{ $player->name }} {{ $player->id }}
                                </div>

                                <select
                                    wire:model.live="team1Picks.{{ $player->id }}"
                                    class="flex-1 border-gray-300 rounded-lg shadow-sm text-base py-2.5 px-3 focus:ring focus:ring-blue-200"
                                >
                                    <option value="">Select Hero</option>
                                    @foreach($heroes as $hero)
                                        <option
                                            value="{{ $hero->id }}"
                                            @disabled(
                                                in_array($hero->id, $this->pickedHeroes)
                                                && ($team1Picks[$player->id] ?? null) != $hero->id
                                            )
                                        >
                                            {{ $hero->name }} {{ $hero->id }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        @endforeach
                    </div>

                </div>
            @endif

        </div>

        {{-- TEAM 2 --}}
        <div class="space-y-5">

            <div>
                <label class="text-sm font-medium text-gray-600">Team 2</label>

                <select
                    wire:model.live="team2Id"
                    class="w-full mt-1 border-gray-300 rounded-lg shadow-sm text-base py-2.5 px-3 focus:ring focus:ring-blue-200"
                >
                    <option value="">Select Team</option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" @disabled($team->id == $team1Id)>
                            {{ $team->name }} {{ $team->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            @if(count($team2Players))
                <div class="bg-gray-50 rounded-lg p-5 space-y-4 border">

                    <h2 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                        Team 2 Players
                    </h2>

                    <div class="space-y-4">
                        @foreach($team2Players as $player)
                            <div class="flex items-center gap-6 py-1">

                                <div class="w-52 text-sm font-medium text-gray-700">
                                    {{ $player->name }} {{ $player->id }}
                                </div>

                                <select
                                    wire:model.live="team2Picks.{{ $player->id }}"
                                    class="flex-1 border-gray-300 rounded-lg shadow-sm text-base py-2.5 px-3 focus:ring focus:ring-blue-200"
                                >
                                    <option value="">Select Hero</option>
                                    @foreach($heroes as $hero)
                                        <option
                                            value="{{ $hero->id }}"
                                            @disabled(
                                                in_array($hero->id, $this->pickedHeroes)
                                                && ($team2Picks[$player->id] ?? null) != $hero->id
                                            )
                                        >
                                            {{ $hero->name }} {{ $hero->id }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        @endforeach
                    </div>

                </div>
            @endif

        </div>

    </div>

    {{-- ACTIONS LAYER --}}
    <div class="flex items-center gap-3">
        <button
            wire:click="calculate"
            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition"
        >
            Calculate Winrate
        </button>
        
        <button
            wire:click="$set('results', null)"
            @if(!$results) disabled @endif
            class="px-5 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition disabled:opacity-40 disabled:cursor-not-allowed"
        >
            Reset
        </button>
    </div>

    {{-- RESULTS --}}
    @if($results)
        <div class="border-t pt-6 space-y-6">

            <h2 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">Average Draft Win Rates</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- TEAM 1 AVERAGE DISPLAY --}}
                <div class="space-y-1.5">
                    <div class="flex justify-between text-sm font-medium text-gray-700">
                        <span>Team 1 Average Winrate</span>
                        <span class="font-bold text-blue-600">{{ $results['team1_avg'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div
                            class="h-3 rounded-full bg-blue-500 transition-all duration-500"
                            style="width: {{ min($results['team1_avg'], 100) }}%"
                        ></div>
                    </div>
                </div>

                {{-- TEAM 2 AVERAGE DISPLAY --}}
                <div class="space-y-1.5">
                    <div class="flex justify-between text-sm font-medium text-gray-700">
                        <span>Team 2 Average Winrate</span>
                        <span class="font-bold text-purple-600">{{ $results['team2_avg'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div
                            class="h-3 rounded-full bg-purple-500 transition-all duration-500"
                            style="width: {{ min($results['team2_avg'], 100) }}%"
                        ></div>
                    </div>
                </div>
            </div>

            {{-- SIMPLIFIED DRAFT BREAKDOWN --}}
            <div class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-6 text-sm">
                {{-- Team 1 Individual List --}}
                <div class="border rounded-lg divide-y bg-white overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 font-semibold text-xs text-gray-500 uppercase tracking-wider">Team 1 Baseline</div>
                    @foreach($results['team1_players'] as $playerId => $data)
                        @php $heroName = $heroes->firstWhere('id', $data['hero_id'])->name ?? 'Hero #'.$data['hero_id']; @endphp
                        <div class="flex justify-between px-4 py-2.5">
                            <span class="text-gray-700 font-medium">{{ $heroName }}</span>
                            <span class="text-gray-500">{{ $data['win_rate'] }}% <span class="text-xs text-gray-400">({{ $data['total_picks'] }}g)</span></span>
                        </div>
                    @endforeach
                </div>

                {{-- Team 2 Individual List --}}
                <div class="border rounded-lg divide-y bg-white overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 font-semibold text-xs text-gray-500 uppercase tracking-wider">Team 2 Baseline</div>
                    @foreach($results['team2_players'] as $playerId => $data)
                        @php $heroName = $heroes->firstWhere('id', $data['hero_id'])->name ?? 'Hero #'.$data['hero_id']; @endphp
                        <div class="flex justify-between px-4 py-2.5">
                            <span class="text-gray-700 font-medium">{{ $heroName }}</span>
                            <span class="text-gray-500">{{ $data['win_rate'] }}% <span class="text-xs text-gray-400">({{ $data['total_picks'] }}g)</span></span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    @endif

</div>