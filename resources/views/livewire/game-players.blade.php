<div class="w-full">

    {{-- HEADER + SEARCH --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
            Game Player List
        </h1>

        <div class="w-full max-w-sm">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Search player names or ID..."
                class="w-full px-4 py-2 border border-gray-300 rounded-xl
                       focus:ring-2 focus:ring-blue-500 focus:outline-none
                       dark:bg-gray-800 dark:border-gray-700 dark:text-white"
            >
        </div>
    </div>

    {{-- GRID --}}
    @if($players->count())
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

            @foreach($players as $player)
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">

                    <div class="p-4">

                        {{-- NAME / ID --}}
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                            ID - {{ $player->id }} {{ $player->name }}
                        </h2>

                        {{-- GAME INFO --}}
                        <p class="text-sm text-gray-500 dark:text-gray-300 mt-2">
                            Game ID: {{ $player->game_id }}
                        </p>

                        {{-- OPTIONAL STATUS / ACTIONS --}}
                        <div class="mt-3 flex justify-between items-center">

                            <span class="text-xs px-2 py-1 rounded 
                                {{ $player->is_active ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-200' 
                                                    : 'bg-gray-200 text-gray-600 dark:bg-gray-700 dark:text-gray-300' }}">
                                
                                {{ $player->is_active ? 'Active' : 'Inactive' }}
                            </span>

                            <button
                                wire:click="toggleActive({{ $player->id }})"
                                class="text-xs text-blue-500 hover:text-blue-700"
                            >
                                Toggle
                            </button>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    @else
        <p class="text-gray-500 text-center">No players found.</p>
    @endif

</div>