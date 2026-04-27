@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">

    {{-- Player Header --}}
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 flex items-center gap-6">
        <div class="w-20 h-20 rounded-full bg-gray-300"></div>

        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ $player->name }}
            </h1>

            <p class="text-gray-600 dark:text-gray-300">
                {{ $player->position ?? 'No Position' }}
            </p>

            <p class="text-sm text-gray-500">
                {{ $player->country->name ?? 'Unknown Country' }}
            </p>

            <p class="text-sm text-gray-500">
                Game: {{ $player->game->name ?? 'N/A' }}
            </p>
        </div>
    </div>

    {{-- Player Details --}}
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">
                Profile Info
            </h2>

            <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                <li><strong>Name:</strong> {{ $player->name }}</li>
                <li><strong>Position:</strong> {{ $player->position ?? 'N/A' }}</li>
                <li><strong>Country:</strong> {{ $player->country->name ?? 'N/A' }}</li>
                <li><strong>Game:</strong> {{ $player->game->name ?? 'N/A' }}</li>
                <li><strong>Joined:</strong> {{ $player->created_at->format('F Y') }}</li>
            </ul>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">
                Career Stats
            </h2>

            <p class="text-gray-500">
                (You can add kills, wins, MVPs, etc. here later)
            </p>
        </div>

    </div>

</div>
@endsection