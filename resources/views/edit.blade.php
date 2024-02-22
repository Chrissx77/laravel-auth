@extends('layouts.app')
@section('content')
<section class="ms_background">
    <h1 class="py-4">Mofica informazioni del Progetto: [ {{ $project->id }} ] {{ $project->name }}</h1>
    <br>
    <div class="card w-50 m-auto">
        <form class="text-center" action="{{ route('update', $project -> id) }}" method="POST">
        
            @csrf
            @method('PUT')
        
            <label for="name"><strong>Nome Progetto: </strong></label>
            <input class="my-1 w-25" placeholder="Inserisci il nome del Progetto" type="text" name="name" id="name" value="{{ $project -> name }}">
            <br>
            <label for="date"><strong>Data: </strong></label>
            <input class="my-1" type="date" name="date" id="date" value="{{ $project -> date}}">
            <br>
            <label for="description"><strong>Descrizione del Progetto: </strong></label>
            <input class="my-1 w-25" placeholder="Inserisci la descrizione del Progetto" type="text" name="description" id="description" value="{{ $project -> description }}">
            <br>
            <label for="image"><strong>Immagine di Progetto: </strong></label>
            <input class="my-1 w-25" placeholder="Inserisci l'URL dell'immagine del Progetto" type="text" name="image" id="image" value="{{ $project -> image }}">
            <br>
            <label for="projectLeader"><strong>Capo progetto: </strong></label>
            <input class="my-1 w-25" placeholder="Inserisci il nome del Capo Progetto" type="text" name="projectLeader" id="projectLeader" value="{{ $project -> projectLeader }}">
            <br>
            <label for="collaborators"><strong>Collaboratori: </strong></label>
            <input class="my-1 w-25" placeholder="Inserisci il nome dei Collaboratori" type="text" name="collaborators" id="collaborators" value="{{ $project -> collaborators }}">
            <br>
            <input class="my-3" type="submit" value="Modifica!">
        </form>
        <div class="text-center my-3">
            <a href="{{ route('welcome') }}">Torna alla HOME</a>
        </div>
    </div>
</section>
@endsection
