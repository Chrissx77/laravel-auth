@extends('layouts.app')

@section('content')
<section class="ms_background">
    <h1 class="text-center py-4">Progetti trovati: {{ count($projects) }}</h1>
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-6">
                <div class="card p-2 my-3 border text-center ms_shadow">
                    <h2 class="text-uppercase text-primary font-weight-bold text-center my-1">{{ $project->name }}</h2>
                    <div class="ms_img_container d-flex justify-content-center my-3">
                        <img src="{{ $project->image }}" class="text-center img-fluid border border-secondary rounded" alt="Immagine del progetto"><br>
                    </div>
                    <div><strong>Data progetto: </strong>{{ $project->date }}</div>

                    <a class="my-1" href="{{ route('show', $project->id) }}">Mostra dettagli</a>

                    <a class="mt-3" href="{{ route('edit', $project->id) }}">Modifica dettagli di progetto</a>
                    
                    <form class="my-2" action="{{ route('destroy', $project->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Cancella Progetto">
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection