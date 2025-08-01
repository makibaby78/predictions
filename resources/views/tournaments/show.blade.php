@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl dark:text-white font-bold mb-2">{{ $tournament->name }}</h1>
    <p class="text-gray-600">Game: {{ $tournament->game->name }}</p>
    <p class="text-gray-600">From {{ $tournament->start_date }} to {{ $tournament->end_date }}</p>

    <hr class="my-4">

    <h2 class="text-xl dark:text-white font-semibold mb-2">Participating Teams</h2>
    <ul class="mb-6 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($tournament->teams as $team)
            <li class="border p-3 rounded shadow bg-white">
                <h3 class="font-bold">{{ $team->name }}</h3>
                <ul class="text-sm mt-1 text-gray-600">
                    @foreach ($team->players as $player)
                        <li>{{ $player->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

    <hr class="my-4">

    <h2 class="text-xl font-semibold mb-2 dark:text-white">Series</h2>
    <ul class="space-y-3">
        <livewire:tournament-bracket :tournament="$tournament" />
    </ul>
</div>
@endsection
