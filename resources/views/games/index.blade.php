@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 dark:text-white">Available Games</h1>

    @if($games->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($games as $game)
                <div class="bg-white shadow rounded-2xl p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">{{ $game->name }}</h2>
                        <p class="text-sm text-gray-500">Game ID: {{ $game->id }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('games.teams.index', $game) }}"
                           class="inline-block px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
                            View Teams
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500 text-center">No games found.</p>
    @endif
</div>
@endsection
