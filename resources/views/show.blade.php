@extends('layouts.app')
@section('content')
    <h1>
        <h5 class="font-weight-bold">Collaboratori:</h5> <span class="font-italic">{{ $project->collaborators }}</span><br>
        <h5 class="font-weight-bold">Leader del progetto:</h5> <span
            class="font-italic">{{ $project->projectLeader }}</span><br>
    </h1>
@endsection
