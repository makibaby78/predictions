@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <livewire:game-teams :game="$game" />
</div>
@endsection
