<div class="bg-white rounded-xl shadow-sm border p-6 space-y-10">

    {{-- HEADER --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-xl font-semibold text-gray-800">
                Team Hero Draft Picker
            </h1>
            <p class="text-sm text-gray-500">
                Select teams and assign hero picks per player
            </p>
        </div>

        <button
            wire:click="calculate"
            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition"
        >
            Calculate Winrate
        </button>
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
                            {{ $team->name }}
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
                                    {{ $player->name }}
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
                                            {{ $hero->name }}
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
                            {{ $team->name }}
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
                                    {{ $player->name }}
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
                                            {{ $hero->name }}
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

</div>