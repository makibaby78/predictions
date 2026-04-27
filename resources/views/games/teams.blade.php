@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6 space-x-3">
    <div class="mb-10">
        <h2 class="text-2xl dark:text-white font-bold mb-6">On-going Tournament</h2>

        @if($tournaments->count())
        <ul class="flex items-center gap-4 rounded shadow">
            @foreach ($tournaments as $tournament)
                <li class="p-4 bg-white shadow rounded">
                    <h2 class="text-xl font-semibold">{{ $tournament->name }}</h2>
                    <p>Game: {{ $tournament->game->name ?? 'N/A' }}</p>
                    <p>Start Date: {{ $tournament->start_date ?? 'TBD' }}</p>
                    <p>End Date: {{ $tournament->end_date ?? 'TBD' }}</p>
                    <a href="{{ route('tournament.show', $tournament->id) }}" class="text-blue-500 hover:underline mt-2 inline-block">
                        View Details
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No tournaments found.</p>
    @endif
    </div>

    <livewire:game-teams :game="$game" />
</div>
@endsection
