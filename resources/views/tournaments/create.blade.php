@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class=" bg-white p-8 rounded">
        <h1 class="text-2xl font-bold mb-4">Add New Tournament</h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-600 p-4 mb-4 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tournament.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="game_id" class="block font-semibold">Game</label>
                <select name="game_id" id="game_id" class="border p-2 rounded w-full">
                    <option value="">Select a game</option>
                    @foreach ($games as $game)
                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="name" class="block font-semibold">Tournament Name</label>
                <input type="text" name="name" id="name" class="border p-2 rounded w-full" value="{{ old('name') }}">
            </div>

            <div>
                <label for="start_date" class="block font-semibold">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="border p-2 rounded w-full" value="{{ old('start_date') }}">
            </div>

            <div>
                <label for="end_date" class="block font-semibold">End Date</label>
                <input type="date" name="end_date" id="end_date" class="border p-2 rounded w-full" value="{{ old('end_date') }}">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create Tournament
            </button>
        </form>
    </div>
</div>
@endsection
