<div class="w-full">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
            Game Hero List
        </h1>

        <div class="w-full max-w-sm">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Search hero names or ID..."
                class="w-full px-4 py-2 border border-gray-300 rounded-xl
                       focus:ring-2 focus:ring-blue-500 focus:outline-none
                       dark:bg-gray-800 dark:border-gray-700 dark:text-white"
            >
        </div>
    </div>

    @if($heroes->count())
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($heroes as $hero)
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">

                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                            ID - {{ $hero->id }} {{ $hero->name }}
                        </h2>

                        <p class="text-sm text-gray-500 dark:text-gray-300">
                            Win Rate:

                            @if ($hero->total_picks > 0)
                                <span>{{ number_format($hero->winrate()) }}%</span><br>
                                <span>({{ $hero->wins }}W / {{ $hero->total_picks }} games)</span>
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