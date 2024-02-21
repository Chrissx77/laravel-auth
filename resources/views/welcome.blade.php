@extends('layouts.app')
@section('content')

<h1 class="my-4">Progetti: {{ count($projects) }}</h1>

<ul class = "list-unstyled">
    @foreach ($projects as $project)
    <li class="my-3 border">
        <strong>nome progetto:</strong> {{ $project -> name }} <br>
        <strong>descrizione:</strong> {{ $project -> description }} <br>
        <strong>immagine:</strong> {{ $project -> image }} <br>
        <strong>collaboratori:</strong> {{ $project -> collaborators }} <br>
        <strong>leader del progetto:</strong> {{ $project -> projectLeader }} <br>
    </li>
    @endforeach
</ul>

@endsection
