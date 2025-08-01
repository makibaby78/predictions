@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">{{ $team->name }}</h1>

        <div class="mb-4">
            <p class="text-gray-700"><strong>Country:</strong> {{ $team->country }}</p>
            <p class="text-gray-700">
                <strong>Created At:</strong>
                {{ $team->created_at ? $team->created_at->format('F j, Y') : 'N/A' }}
            </p>            
        </div>

        @if($team->game)
            <div class="mb-4">
                <p class="text-gray-700"><strong>Game:</strong> {{ $team->game->name }}</p>
            </div>
        @endif

        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-2">Add Player</h2>
            <form method="POST" action="{{ route('players.store', $team->id) }}" class="space-y-2">
                @csrf
                <div>
                    <label class="block text-sm font-medium">Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium">Position (optional)</label>
                    <input type="text" name="position" class="w-full border rounded p-2">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Add Player
                </button>
            </form>
        </div>        

        <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline text-sm">
            ← Back to Teams
        </a>

        @if($team->players->isNotEmpty())
            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-2">Active Players</h2>
                @php
                    $activePlayers = $team->players->filter(fn($p) => is_null($p->pivot->left_at));
                @endphp
        
                @if ($activePlayers->isNotEmpty())
                    <ul class="space-y-2">
                        @foreach ($activePlayers as $player)
                            <li class="bg-gray-100 p-4 rounded shadow-sm">
                                <p class="text-gray-800 font-medium">{{ $player->name }}</p>
                                <p class="text-sm text-gray-500">Position: {{ $player->position ?? 'N/A' }}</p>
                                <p class="text-sm text-green-600 font-semibold mt-1">Status: Active</p>
        
                                <form method="POST" action="{{ route('players.leave', [$team->id, $player->id]) }}" class="inline-block mt-2">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-red-600 text-sm hover:underline"
                                        onclick="return confirm('Mark player as left the team?')">
                                        Mark as Left
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 italic">No active players in this team.</p>
                @endif
            </div>
        
            {{-- LEFT PLAYERS --}}
            <div class="mt-10">
                <h2 class="text-xl font-semibold mb-2">Players Who Left</h2>
                @php
                    $leftPlayers = $team->players->filter(fn($p) => !is_null($p->pivot->left_at));
                @endphp
        
                @if ($leftPlayers->isNotEmpty())
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
        @else
            <div class="mt-6">
                <p class="text-gray-500 italic">No players added to this team yet.</p>
            </div>
        @endif
    </div>
</div>
@endsection
