@extends('emails.layout.base')

@section('content')
<div class="card text-center">
    <div class="card-header">
        {{ $demand['procedure'] }}
    </div>
    <div class="card-body">
        <h5 class="card-title">Demande {{ $demand['reference'] }}</h5>
        <p class="card-text">Nous sommes au regrêt de vous informer que nous avons rejeté votre demande.</p>
        <p><strong>Motif de rejet : </strong>  <em>{{ $demand['commentaire'] }}</em></p>
        <p class="card-text">Veuillez soumettre à nouveau.</p>
        <span class="badge bg-info text-dark">{{ $demand['etat'] }}</span>
    </div>
    <div class="card-footer text-muted">
        <a href="#">© https://www.eservices.envieau.gov.bf</a>
    </div>
</div>
@endsection