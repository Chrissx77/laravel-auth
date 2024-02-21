@extends('layouts.app')
@section('content')

    <h1 class="text-center my-4">Progetti: {{ count($projects) }}</h1>
<div class="ms_container">
    <div class="ms_single_container">
        @foreach ($projects as $project)
        <div class="card p-2 my-3 border text-center">
            <h2 class="text-uppercase text-primary font-weight-bold text-center my-1">{{ $project->name }}</h2>
            <div class="ms_img_container d-flex justify-content-center my-3">
                <img src="{{ $project->image }}" class="text-center img-fluid border border-secondary rounded" alt="Immagine del progetto"><br>
            </div>
            <div class="ms_description">
                <h5>Descrizione: </h5>
                <p>{{ $project->description }}</p>
            </div>
            {{-- <h5 class="font-weight-bold">Collaboratori:</h5> <span class="font-italic">{{ $project->collaborators }}</span><br>
            <h5 class="font-weight-bold">Leader del progetto:</h5> <span class="font-italic">{{ $project->projectLeader }}</span><br> --}}


            <a href="{{route('show', $project -> id) }}">Dettagli </a>

            <a href="{{route('show', $project -> id) }}">Edit </a>

            <a href="{{route('show', $project -> id) }}">Delete </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
