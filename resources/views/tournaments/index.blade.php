@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4 dark:text-white">Tournaments</h1>

    <a href="{{ route('tournament.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 block w-fit mb-4">
        + Add Tournament
    </a>

    @if($tournaments->count())
        <ul class="space-y-3">
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
@endsection
