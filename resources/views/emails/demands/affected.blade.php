@extends('emails.layout.base')

@section('content')
<div class="card text-center">
    <div class="card-header">
        {{ $demand['procedure'] }}
    </div>
    <div class="card-body">
        <h5 class="card-title">Demande n°{{ $demand['uuid'] }}</h5>
        <p class="card-text">Cette demande dont l'identifiant est vous a été attribué pour traitement.</p>
        <span class="badge bg-info text-dark">{{ $demand['etat'] }}</span>
    </div>
    <div class="card-footer text-muted">
        <a href="#">© portailmeea.gov.bf</a>
    </div>
</div>
@endsection