@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="my-4">Progetti: {{ count($projects) }}</h1>

    <div>
        @foreach ($projects as $project)
        <div class="card p-2 my-3 border">
            <h2 class="text-uppercase text-primary font-weight-bold">{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
            <img src="{{ $project->image }}" class="p-5 text-center img-fluid" alt="Immagine del progetto"><br>
            <h5 class="font-weight-bold">Collaboratori:</h5> <span class="font-italic">{{ $project->collaborators }}</span><br>
            <h5 class="font-weight-bold">Leader del progetto:</h5> <span class="font-italic">{{ $project->projectLeader }}</span><br>
        </div>
        @endforeach
    </div>

</div>


@endsection
