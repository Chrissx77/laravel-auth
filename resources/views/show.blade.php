@extends('layouts.app')
@section('content')
<section class="ms_background">
        <h1 class="py-4">Dettagli Progetto: [ {{ $project->id }} ] {{ $project->name }}</h1>
        <div class="card w-50 m-auto">
            <h2 class="text-center mb-3">Nome Progetto: {{ $project->name }}</h2>

            <div class="ms_img_container d-flex justify-content-center my-3">
                <img src="{{ $project->image }}" class="text-center img-fluid border border-secondary rounded" alt="Immagine del progetto"><br>
            </div>

            <span class="text-center mb-2" ><strong>Data: </strong>{{ $project->date }}</span>

            <p class="text-center mb-3"><strong>Descrizione del progetto: </strong>{{ $project->description }}</p>

            <span class="font-weight-bold text-center my-1"><strong>Leader del progetto: </strong>{{ $project->projectLeader }}</span>
            <span class="font-weight-bold text-center my-1"><strong>Collaboratori: </strong>{{ $project->collaborators }}</span>

            <div class="text-center my-3">
                <a href="{{ route('welcome') }}">Torna alla HOME</a>
            </div>
        </div>
</section>
@endsection


