@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
<div class="col-6 offset-3"> @if(session('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">

                            <h5 class="alert-heading">{{session('error')}}</h5>

                        </div>

                        <script>
                            setTimeout(function() {
                                document.querySelector('.alert.alert-danger').style.display = 'none';
                            }, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                        </script>
                    @endif</div>
    <h1>Liste des paiements </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Paiements</a></li>
            <li class="breadcrumb-item active">Liste</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
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

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                <li><a class="dropdown-item" href="#">Mois Courant</a></li>
                                <li><a class="dropdown-item" href="#">Cette Année</a></li>
                            </ul>
                        </div>


                        <h5 class="card-title">Liste des Paiements <span>| Paiements</span></h5>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-3 offset-9">


                                    <div style="float: right">

                                        <button title="Actualiser la Page" type="button" onclick="refresh()"
                                            class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                        <button title="Ajouter" type="button" class="btn btn-success"><i
                                                class="bi bi-plus"></i></button>
                                    </div>


                                </div>
                            </div><br>

                            @include('backend.components.select_paiement_options')

                            <!-- Table with stripped rows -->
                            <table id="example1" class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Procedure</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Moyen</th>
                                        <th scope="col">Demande</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @if(isset($paiements))
                                        @foreach ($paiements as $paiement)
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $paiement->date_paiement }}</td>
                                        <td> {{ $paiement->code_procedure }}</td>
                                        <td>{{ $paiement->ref_paiement }}</td>
                                        <td>{{ $paiement->moyen }}</td>
                                        <td>{{ $paiement->demande_id }}</td>
                                        <td>
                                            <a title="Voir Détail" href="{{ route('detail-demande', ['process' => 'P001', 'id_demande' => $paiement->uuid]) }}" class="btn btn-primary ">
                                                    <i class="bi bi-eye"></i> </a>

                                                {{-- Model de confirmation de Valider --}}
                                                <div class="modal fade" id="valider{{ $paiement->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content bgcustom-gradient-light">
                                                            <div class="modal-header">
                                                                <img src="{{ asset('backend/assets/img/valide.png') }}" width="60" height="45" class="d-inline-block align-top" alt="">
                                                                <h5 class="modal-title m-auto"> Confirmation de Validation
                                                                </h5>
                                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data" action="{{ route('statusChange', ['id' =>$paiement->uuid, 'currentStatus' => $paiement->uuid ,'table'=> 'demande_p001_s'] ) }}">
                                                                    @csrf

                                                                    <div class="form-group">
                                                                        <div class="text-center">
                                                                            <label class="col-form-label">Motif de la validation ?</label>
                                                                            <input type="text" required name="libelle" class="form-control border-success">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="text-center">
                                                                            <label class="col-form-label">Charger la note d'étude si y'a lieu</label>
                                                                            <input type="file" name="note_etude_file" class="form-control border-success">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Non, Annuler</button>
                                                                        <button type="submit" class="btn btn-success">Oui,
                                                                            Valider</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin Modal Valider-->


                                            </td>
                                        
                                        </tr>   
                                        @endforeach
                                        @endif                     


                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->



    </div>
</section>
@endsection

@section('script')

<script>

    function refresh() {
        location.reload(true);
    }


    $(function() {

            $(document).ready(function() {
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

</script>
<script>
    function loadPaiementListeByOption() {
        let url = '/paiements-by-options?option=' + $('#option').val();
        window.location = url;
    }
</script>


@endsection
