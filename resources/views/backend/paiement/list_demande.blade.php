@extends('backend.layout.base')
@section('css')
<link href="{{asset('backend/assets/css/select2.min.css') }}" rel="stylesheet" />
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script-->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
@endsection
@section('title')
<div class="pagetitle">
    <div class="col-6 offset-3"> @if(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h5 class="alert-heading">{{session('error')}}</h5>
        </div>
        <script>
setTimeout(function () {
    document.querySelector('.alert.alert-danger').style.display = 'none';
}, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
        </script>
        @endif</div>
    <h1>Paiements </h1>
    
</div>
@endsection
@section('content')
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <h5 class="card-title">Liste des Demandes <span>| Demandes</span></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 offset-9"> <div style="float: right">
                                        <button title="Actualiser la Page" type="button" onclick="refresh()" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Default Tabs -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Paiements en attente</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Demandes soldées</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" onchange="loadDemandeListeByPrecedure()" name="procedure" id ="procedure">
                                                    <option >Type de demande</option>
                                                    @foreach($procedures as $proc)
                                                    <option value="{{$proc->code}}" {{($proc->code == $selectedProcedure ? 'selected' : '')}}>{{$proc->libelle_long }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br> <br>
                                            @include('backend.paiement.tab1')
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            @include('backend.paiement.tab2')
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>            

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection

@section('script')
<script src="{{asset('backend/assets/js/select2.min.js') }}"></script>
<script>
$('#procedure').select2();
    function refresh() {
        location.reload(true);
    }

    $(function () {
        $(document).ready(function () {

        });

    });


   function loadDemandeListeByPrecedure() {
        let url = '/paiement/demande/dossiers-by-procedure?procedure=' + $('#procedure').val();
        window.location = url;
    }
</script>
@endsection
