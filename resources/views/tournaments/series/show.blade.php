@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl dark:text-white font-bold mb-2">{{ $tournament->name }}</h1>

    <livewire:match-manager :series="$series" />
</div>

@endsection
