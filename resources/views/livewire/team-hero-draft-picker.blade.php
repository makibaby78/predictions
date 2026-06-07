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

    {{-- ACTIONS --}}
    <div class="flex items-center gap-3">
        <button
            wire:click="calculate"
            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition"
        >
            Calculate Winrate
        </button>
        <button
            wire:click="reverse"
            @if(!$results) disabled @endif
            class="px-5 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition disabled:opacity-40 disabled:cursor-not-allowed"
        >
            Reverse
        </button>
    </div>

    {{-- RESULTS --}}
    @if($results)
        <div class="border-t pt-6 space-y-4">

            <h2 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">Win Probability</h2>

            <div class="space-y-1">
                <div class="flex justify-between text-sm font-medium text-gray-700">
                    <span>Team 1</span>
                    <span>{{ $results['team_win_probability_formatted'] }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                    <div
                        class="h-3 rounded-full transition-all duration-500 {{ $results['team_win_probability'] >= 50 ? 'bg-blue-500' : 'bg-red-400' }}"
                        style="width: {{ $results['team_win_probability'] }}%"
                    ></div>
                </div>
                <div class="flex justify-between text-xs text-gray-400">
                    <span>0%</span>
                    <span>50%</span>
                    <span>100%</span>
                </div>
            </div>

            @if(!empty($results['players']))
                <div class="mt-4 space-y-2">
                    <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Player Breakdown</h3>
                    <div class="divide-y divide-gray-100 rounded-lg border overflow-hidden">
                        @foreach($results['players'] as $playerId => $data)
                            @php $heroName = $heroes->firstWhere('id', $data['hero_id'])?->name ?? 'Hero #'.$data['hero_id']; @endphp
                            <div class="bg-white text-sm">

                                {{-- Hero row with overall probability --}}
                                <div class="flex items-center gap-4 px-4 py-2">
                                    <div class="flex-1">
                                        <div class="flex justify-between mb-0.5">
                                            <span class="font-medium text-gray-700">{{ $heroName }}</span>
                                            <span class="font-semibold {{ $data['win_probability'] >= 50 ? 'text-blue-600' : 'text-red-500' }}">
                                                {{ $data['win_probability_formatted'] }}
                                            </span>
                                        </div>
                                        <div class="w-full bg-gray-100 rounded-full h-1.5">
                                            <div
                                                class="h-1.5 rounded-full {{ $data['win_probability'] >= 50 ? 'bg-blue-400' : 'bg-red-300' }}"
                                                style="width: {{ $data['win_probability'] }}%"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-gray-400 w-20 text-right shrink-0">
                                        {{ $data['active_matchups_counted'] }} matchup{{ $data['active_matchups_counted'] !== 1 ? 's' : '' }}
                                    </div>
                                </div>

                                {{-- Per-enemy-hero matchup rows --}}
                                @if(!empty($data['matchups']))
                                    <div class="bg-gray-50 px-4 pb-2 space-y-1">
                                        @foreach($data['matchups'] as $matchup)
                                            @php $enemyName = $heroes->firstWhere('id', $matchup['enemy_hero_id'])?->name ?? 'Hero #'.$matchup['enemy_hero_id']; @endphp
                                            <div class="flex items-center gap-3 text-xs text-gray-500 pl-3 border-l-2 border-gray-200">
                                                <span class="w-4 text-gray-300">vs</span>
                                                <span class="flex-1">{{ $enemyName }}</span>
                                                <span class="{{ $matchup['win_rate'] >= 50 ? 'text-blue-500' : 'text-red-400' }} font-medium">
                                                    {{ $matchup['win_rate'] }}%
                                                </span>
                                                <span class="text-gray-300 w-14 text-right">{{ $matchup['games'] }}g</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    @endif

</div>