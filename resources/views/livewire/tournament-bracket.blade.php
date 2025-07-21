@php
    $stages = $this->matches->groupBy('stage');
@endphp

<div class="space-y-10">
    @foreach ($stages as $stage => $stageMatches)
        <div>
            <h1 class="text-2xl font-bold mb-6">{{ ucfirst($stage) }} Stage</h1>

            @php
                $hasGroup = $stageMatches->pluck('group')->filter()->isNotEmpty();
                $hasBracket = $stageMatches->pluck('bracket')->filter()->isNotEmpty();
            @endphp

            @if ($hasGroup && $hasBracket)
                <div class="grid grid-cols-2 gap-8">
                    @foreach (['A', 'B'] as $group)
                        <div>
                            <h2 class="text-xl font-bold mb-4">Group {{ $group }}</h2>

                            @foreach (['upper', 'lower'] as $bracket)
                                @php
                                    $groupMatches = $stageMatches
                                        ->where('group', $group)
                                        ->where('bracket', $bracket);

                                    $groupedRounds = $groupMatches->groupBy('round');
                                @endphp

                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2 capitalize">{{ $bracket }} Bracket</h3>

                                    <div class="grid grid-cols-3 gap-2 items-center">
                                        @foreach ($groupedRounds as $round => $matches)
                                            <div class="mb-4">
                                                <h4 class="text-md font-bold mb-2">Round {{ $round }}</h4>

                                                <div class="space-y-3">
                                                    @foreach ($matches as $match)
                                                        <div class="border border-gray-300 bg-white rounded shadow-sm overflow-hidden text-sm">
                                                            <div class="p-2">
                                                                {{ $match->teamA->name ?? 'TBD' }}
                                                            </div>

                                                            <div class="p-2 border-t border-gray-200">
                                                                {{ $match->teamB->name ?? 'TBD' }}
                                                            </div>

                                                            @if ($match->winner && is_object($match->winner))
                                                                <div class="p-2 border-t border-gray-200 text-green-600">
                                                                    Winner: {{ $match->winner->name }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Render a flat list without brackets or groups --}}
                @php
                    $groupedRounds = $stageMatches->groupBy('round');
                @endphp

                <div class="grid grid-cols-3 gap-2 items-center">
                    @foreach ($groupedRounds as $round => $matches)
                        <div class="mb-4">
                            <h4 class="text-md font-bold mb-2">Round {{ $round }}</h4>

                            <div class="space-y-3">
                                @foreach ($matches as $match)
                                    <div class="border border-gray-300 bg-white rounded shadow-sm overflow-hidden text-sm">
                                        <div class="p-2">
                                            {{ $match->teamA->name ?? 'TBD' }}
                                        </div>

                                        <div class="p-2 border-t border-gray-200">
                                            {{ $match->teamB->name ?? 'TBD' }}
                                        </div>

                                        @if ($match->winner && is_object($match->winner))
                                            <div class="p-2 border-t border-gray-200 text-green-600">
                                                Winner: {{ $match->winner->name }}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</div>
