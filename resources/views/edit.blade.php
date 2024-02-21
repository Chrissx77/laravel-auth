@extends('layouts.app')
@section('content')
    <h1 class="my-4">Mofica Info Project:</h1>
    <br>
    <h1 class="my-4">[Project ID: {{ $project->id }} ]  {{ $project->name }}</h1>
    <form action="{{ route('update', $project -> id) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input class="my-1" type="text" name="name" id="name" value="{{ $project -> name }}">
        <br>
        <label for="date">Data:</label>
        <input class="my-1" type="date" name="date" id="date" value="{{ $project -> date}}">
        <br>
        <label for="description">Descrizione:</label>
        <input class="my-1" type="text" name="description" id="description" value="{{ $project -> description }}">
        <br>
        <label for="image">Image:</label>
        <input class="my-1"  type="text" name="image" id="image" value="{{ $project -> image }}">
        <br>
        <label for="collaborators">Collaboratori:</label>
        <input class="my-1"  type="text" name="collaborators" id="collaborators" value="{{ $project -> collaborators }}">
        <br>
        <label for="projectLeader">Leader:</label>
        <input class="my-1"  type="text" name="projectLeader" id="projectLeader" value="{{ $project -> projectLeader }}">
        <br>
        <input class="my-1" type="submit" value="Modifica!">
    </form>
@endsection
