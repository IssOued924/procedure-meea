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
                                        <table {{ !empty($demandes) ? 'id="example1" ':  'id=""'}} class="table datatable table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date Demande</th>
                                                    <th scope="col">Référence</th>
                                                    <th scope="col">Demandeur</th>
                                                    <th scope="col">Résidence</th>
                                                    <th scope="col">Délai</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i = 1;
                                                @endphp
                                                @foreach ($demandes as $demande)
                                                @if(!$demande->paiement)
                                                    <tr>
                                                        <th scope="row">{{ $i++ }}</th>
                                                        <td>{{ \Carbon\Carbon::parse($demande->created_at)->format('d-m-Y') }}</td>
                                                        <td> {{ $demande->reference }}</td>
                                                        <td> {{ $demande->demandeur }}</td>
                                                        <td>{{ $demande->residence }}</td>
                                                        <td><span class="badge bg-dark">{{ $demande->delai}} </span> Jours </td>
                                                        <td>
                                                            <a title="Voir Détail" href="{{ route('paiement.demande.detail', ['process' => $demande->procedure, 'id_demande' => $demande->uuid]) }}" class="btn btn-xs btn-info ">
                                                                <i class="bi bi-eye"></i> 
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table {{ !empty($demandes) ? 'id="example1" ':  'id=""'}} class="table datatable table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date Demande</th>
                                                    <th scope="col">Référence</th>
                                                    <th scope="col">Demandeur</th>
                                                    <th scope="col">Résidence</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i = 1;
                                                @endphp
                                                @foreach ($demandes as $demande)
                                                @if($demande->paiement)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ \Carbon\Carbon::parse($demande->created_at)->format('d-m-Y') }}</td>
                                                    <td> {{ $demande->reference }}</td>
                                                    <td> {{ $demande->demandeur }}</td>
                                                    <td>{{ $demande->residence }}</td>
                                                    <td>
                                                        <a title="Voir Détail" href="{{ route('paiement.demande.detail', ['process' => $demande->procedure, 'id_demande' => $demande->uuid]) }}" class="btn btn-xs btn-info ">
                                                                <i class="bi bi-eye"></i> 
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
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
            $('#example1').DataTable({

                dom: 'Blfrtip',
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [
                    [5, 10, 50, -1],
                    ["5", "10", "50", "All"]
                ],

                buttons: [{
                        extend: 'csv',
                        text: 'CSV',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Imprimer',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                ],
                select: true,
                "pagingType": "full_numbers",
                language: {
                    search: "Rechercher&nbsp;:",
                    lengthMenu: " _MENU_ ",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });

    });


   function loadDemandeListeByPrecedure() {
        let url = '/paiement/demande/dossiers-by-procedure?procedure=' + $('#procedure').val();
        window.location = url;
    }
</script>
@endsection
