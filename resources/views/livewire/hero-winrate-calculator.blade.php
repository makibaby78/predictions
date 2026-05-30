<div class="space-y-4 bg-white p-6 rounded-md max-w-xl">

    {{-- HERO --}}
    <div>
        <label class="block mb-1">Hero</label>
        <select wire:model="heroId" class="border p-2 w-full">
            <option value="">Select Hero</option>
            @foreach ($heroes as $hero)
                <option value="{{ $hero->id }}">{{ $hero->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- PLAYER --}}
    <div>
        <label class="block mb-1">Player (optional)</label>
        <select wire:model="playerId" class="border p-2 w-full">
            <option value="">All Players</option>
            @foreach ($players as $player)
                <option value="{{ $player->id }}">{{ $player->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- ENEMY HERO --}}
    <div>
        <label class="block mb-1">Enemy Hero (optional)</label>
        <select wire:model="enemyHeroId" class="border p-2 w-full">
            <option value="">Any Enemy</option>
            @foreach ($heroes as $hero)
                <option value="{{ $hero->id }}">{{ $hero->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- ENEMY PLAYER --}}
    <div>
        <label class="block mb-1">Enemy Player</label>
        <select wire:model="enemyPlayerId" class="border p-2 w-full">
            <option value="">Any Enemy Player</option>
            @foreach ($players as $player)
                <option value="{{ $player->id }}">{{ $player->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- BUTTON --}}
    <button
        wire:click="calculate"
        class="bg-blue-600 text-white px-4 py-2 rounded"
    >
        Calculate Win Rate
    </button>

    {{-- RESULT --}}
    @if ($result)
        <div class="p-4 bg-gray-100 rounded space-y-1">
            <div>Total Picks: {{ $result['total_picks'] }}</div>
            <div>Wins: {{ $result['wins'] }}</div>
            <div>
                Win Rate:
                @if ($result['win_rate'] !== null)
                    {{ $result['win_rate'] }}%
                @else
                    N/A
                @endif
            </div>
        </div>
    @endif

</div>