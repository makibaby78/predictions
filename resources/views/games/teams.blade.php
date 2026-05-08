@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6 space-x-3">
@php
    $sections = [
        'On-going Tournament' => $ongoingTournaments,
        'Past Tournament' => $pastTournaments,
    ];
@endphp

<div class="mb-10 flex flex-col gap-y-8">
    @foreach ($sections as $title => $tournaments)
        <div>
            <h2 class="text-2xl dark:text-white font-bold mb-6">
                {{ $title }}
            </h2>

            @if($tournaments->isNotEmpty())
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($tournaments as $tournament)
                        <li class="p-4 bg-white shadow rounded">
                            <h2 class="text-xl font-semibold">
                                {{ $tournament->name }}
                            </h2>

                            <p>
                                Game: {{ $tournament->game->name ?? 'N/A' }}
                            </p>

                            <p>
                                Start Date:
                                {{ $tournament->start_date?->format('M d, Y') ?? 'TBD' }}
                            </p>

                            <p>
                                End Date:
                                {{ $tournament->end_date?->format('M d, Y') ?? 'TBD' }}
                            </p>

                            <a
                                href="{{ route('tournament.show', $tournament->id) }}"
                                class="text-blue-500 hover:underline mt-2 inline-block"
                            >
                                View Details
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 dark:text-gray-400">
                    No tournaments found.
                </p>
            @endif
        </div>
    @endforeach
</div>

    <livewire:game-teams :game="$game" />
</div>
@endsection
