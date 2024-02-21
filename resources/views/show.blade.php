@extends('layouts.app')
@section('content')
    <h1>
        <div class="ms_description">
            <h5>Descrizione: </h5>
            <p>{{ $project->description }}</p>
        </div>
        <h5 class="font-weight-bold">Collaboratori:</h5> <span class="font-italic">{{ $project->collaborators }}</span><br>
        <h5 class="font-weight-bold">Leader del progetto:</h5> <span
            class="font-italic">{{ $project->projectLeader }}</span><br>
    </h1>
@endsection
