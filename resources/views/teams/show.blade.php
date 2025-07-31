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

        <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline text-sm">
            ← Back to Teams
        </a>
    </div>
</div>
@endsection
