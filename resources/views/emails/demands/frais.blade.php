@extends('emails.layout.base')

@section('content')
<div class="card text-center">
    <div class="card-header">
        {{ $demand['procedure'] }}
    </div>
    <div class="card-body">
        Demande n°{{ $demand['reference'] }}
        <p class="card-text">Les frais de traitement est de {{$demand['montant']}} F CFA.</p>
        <p>Veuillez vous rendre dans la structure concernée pour le paiement</p>
        <p>Cordialement,</p>
    </div>
    <div class="card-footer text-muted">
        <a href="#">© https://www.eservices.envieau.gov.bf</a>
    </div>
</div>
@endsection