@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 dark:text-white">Games Hero List</h1>

    @if($heroes->count())
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($heroes as $hero)
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $hero->name }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-300">
                            Win Rate:
                            @if ($hero->total_picks > 0)
                                {{ number_format(($hero->wins / $hero->total_picks) * 100, 1) }}%
                                ({{ $hero->wins }}W / {{ $hero->total_picks }} games)
                            @else
                                N/A
                            @endif
                        </p>
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500 text-center">No heroes found.</p>
    @endif
</div>
@endsection
