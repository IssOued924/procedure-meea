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
    <h1>Liste des Demandes de permis d'écotourisme ou de tourisme écologique</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Demandes</a></li>
            <li class="breadcrumb-item active">Detail</li>
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

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>


                        <h5 class="card-title">Liste des Demandes <span>| Demandes</span></h5>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-3 offset-9">

                                    <div style="float: right">
                                        @php
                                            $userRole = Auth::user()->role->libelle;
                                        @endphp
                                        <button title="Retour" type="button" onclick="history.back()"
                                        class="btn btn-primary"><i class="bi bi-arrow-left"></i></button>
                                        <!-- Boutons d'action en fonction de l'état et du rôle -->
                                        @if (($demande->etat == 'D' && $demande->last_agent_assign == null && in_array($userRole, ['Réception', 'Etudes', 'Gestionnaire', 'Administration'])) ||
                                        ($demande->etat == 'E' && in_array($userRole, ['Etudes', 'Gestionnaire', 'Administration'])) ||
                                        ($demande->etat == 'V' && in_array($userRole, ['Gestionnaire', 'Administration'])) ||
                                        ($demande->etat == 'D' && $demande->last_agent_assign == Auth::user()->agent->uuid || in_array($userRole, ['Gestionnaire', 'Administration'])) ||
                                        ($demande->etat == 'E' && $demande->last_agent_assign == Auth::user()->agent->uuid && Auth::user()->role->code != "RCT" || in_array($userRole, ['Gestionnaire', 'Administration'])) ||
                                        ($demande->etat == 'S' && in_array($userRole, ['Gestionnaire', 'Administration'])))
                                        <a data-toggle="modal" data-target="#valider{{ $demande->uuid }}" type="button" title="Valider" class="btn btn-success">
                                            <i class="bi bi-check-circle"></i>
                                        </a>
                                        @endif

                                        @if ($demande->etat == 'D' && in_array($userRole, ['Gestionnaire', 'Administration']))
                                        <button data-toggle="modal" data-target="#assigner{{ $demande->uuid }}" type="button" title="Assigner à un collaborateur" class="btn btn-primary">
                                            <i class="bi bi-folder-symlink"></i>
                                        </button>
                                        @endif
                                        @if ($demande->etat == 'E' && in_array($userRole, ['Gestionnaire', 'Administration']))
                                        <button data-toggle="modal" data-target="#assigner{{ $demande->uuid }}" type="button" title="Assigner à un collaborateur" class="btn btn-primary">
                                            <i class="bi bi-folder-symlink"></i>
                                        </button>
                                        @endif

                                        @if ($demande->etat == 'S' && in_array($userRole, ['Gestionnaire', 'Administration',]))
                                        <a data-toggle="modal" data-target="#signer{{ $demande->uuid }}" type="button" title="Joindre Acte Signé" class="btn btn-success">
                                            <i class="bi bi-upload"></i>
                                        </a>
                                        @endif
                                        @if (($demande->etat != 'A' && $demande->etat != 'S' && $demande->etat != 'R') && in_array($userRole, [ 'Gestionnaire', 'Administration']))
                                        <a data-toggle="modal" data-target="#rejetter{{ $demande->uuid }}" type="button" title="Rejeter" class="btn btn-danger">
                                            <i class="bi bi-x-circle"></i>
                                        </a>
                                        @endif
                                        @if (($demande->etat != 'A' && $demande->etat != 'S'&& $demande->etat != 'E'&& $demande->etat != 'V'&& $demande->etat != 'R') && in_array($userRole, ['Réception']))
                                        <a data-toggle="modal" data-target="#rejetter{{ $demande->uuid }}" type="button" title="Rejeter" class="btn btn-danger">
                                            <i class="bi bi-x-circle"></i>
                                        </a>
                                        @endif
                                        @if (($demande->etat == 'E' && $demande->last_agent_assign == null) && in_array($userRole, ['Etudes']) ||
                                        ($demande->etat == 'D' && $demande->last_agent_assign == null) && in_array($userRole, ['Etudes']) ||
                                        ($demande->etat == 'E' && $demande->last_agent_assign == Auth::user()->agent->uuid) && in_array($userRole, ['Etudes'])
                                        )

                                        <a data-toggle="modal" data-target="#rejetter{{ $demande->uuid }}" type="button" title="Rejeter" class="btn btn-danger">
                                            <i class="bi bi-x-circle"></i>
                                        </a>
                                        @endif

                                        <button title="Actualiser la Page" type="button" onclick="refresh()"
                                            class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                        {{-- <button title="Ajouter" type="button" class="btn btn-success"><iclass="bi bi-plus"></i></button> --}}
                                    </div>
                                </div>
                            </div><br>

                            <div class="form-card">
                                <h4 class="fs-title">Demande N° : {{ $demande->reference}}</h4>

                                <div class="wish_payment_type">
                                    {{-- <label class="adresse fw-bold">Dangers liées à la substance</label> --}}
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="checkbox payment-radio">
                                            <label for="wish_payment_type_1"  class="fw-bold">
                                                <input class="checkbox check_boxes required" type="checkbox" value="1" @if($demande->is_touristique) checked @endif>Touristique
                                            </label>
                                            </span>
                                        </div>
    
                                        <div class="col-3">
    
                                            <span class="checkbox payment-radio">
                                            <label for="wish_payment_type_2" class="fw-bold">
                                                <input class="checkbox check_boxes required" type="checkbox" value="1" @if($demande->is_photographique) checked @endif>Photographique
                                            </label>
                                            </span>
                                        </div>
                                        <div class="col-3">
    
                                            <span class="checkbox payment-radio">
                                              <label for="wish_payment_type_3" class="fw-bold">
                                                <input class="checkbox check_boxes required" type="checkbox" value="1" @if($demande->is_cinematographique) checked @endif>Cinématographique
                                              </label>
                                            </span>
                                        </div>
    
                                        <div class="col-3"> </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="nom_societe fw-bold"> <strong>Identité</strong> </label>
                                            <span class="border-success form-control">{{ $demande->usager->nom.' '.$demande->usager->prenom }}</span>
                                        </div>
                                        <div class="col-3">
                                            <label class="nom_societe fw-bold"> <strong>Province de résidence</strong> </label>
                                                <span class="border-success form-control">{{ $demande->province->libelle}}</span>
                                        </div>
                                        <div class="col-3">
                                            <label class="nom_societe fw-bold"> <strong>Commune de résidence</strong> </label>
                                                <span class="border-success form-control">{{ $demande->commune->libelle}}</span>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-6">
                                        <label class="siege_social fw-bold">Adresse Postale</label>
                                                    <span class="border-success form-control">{{ $demande->usager->boite_postale ? $demande->usager->boite_postale : 'Néant'}}</span>                                        
                                        </div>
    
                                        <div class="col-6">
                                            <label class="siege_social fw-bold">Téléphone</label>
                                                <span class="border-success form-control">{{ $demande->usager->telephone}}</span>
                                            </div>
                                    </div>

                                <br>
                                <br>
                                <div class="row" style="display: inline-block;">
                                    <label class="nom_societe fw-bold">Fichiers joints</label>
                                    @foreach ( $demande->demandePiece as $chemin)
                                        
                                            <a data-toggle="modal" data-target="#view{{ $chemin->uuid }}" title="Voir" class="">
                                                <b><i style="font-size: xxx-large !important;" class="bi bi-file-earmark-pdf"></i> {{$chemin->libelle}}</b>
                                            </a>

                                            {{-- <a data-toggle="modal" data-target="#valider{{ $demande->uuid }}" type="button" title="Valider" class="btn btn-success">
                                                <i class="bi bi-check-circle"></i>
                                            </a> --}}
                                            {{-- Modal View --}}
                                            <div class="modal fade" id="view{{ $chemin->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true" width="800" height="500">
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <i style="font-size: xxx-large !important;" class="bi bi-file-earmark-pdf"></i>
                                                            <h5 class="modal-title m-auto">{{$chemin->libelle}}</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="text-align: center">
                                                            <embed src="{{ Storage::url($chemin->chemin) }}" width="800" height="500"> 
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                                </div>                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Modal View-->
                                        
                                    @endforeach
                                </div>

                            </div>

                            {{-- Model de confirmation de Validation et note detude --}}
                            <div class="modal fade" id="valider{{ $demande->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <form method="post" enctype="multipart/form-data" action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0012_s'] ) }}">
                                                @csrf

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <label class="col-form-label">Motif de la validation ?</label>
                                                        @if ($demande->etat == 'D')
                                                            <input type="text" required name="libelle" value="Dossier conforme" disabled class="form-control border-success">
                                                        @endif
                                                        @if ($demande->etat == 'E')
                                                            <input type="text" required name="libelle" value="Dossier validé" disabled class="form-control border-success">
                                                        @endif
                                                        @if ($demande->etat == 'V')
                                                            <input type="text" required name="libelle" value="Dossier signé" disabled class="form-control border-success">
                                                        @endif
                                                        @if ($demande->etat == 'S')
                                                            <input type="text" required name="libelle" value="Dossier archivé" disabled class="form-control border-success">
                                                        @endif
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



                            {{-- Model de Joindre acte signé --}}
                            <div class="modal fade" id="signer{{ $demande->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bgcustom-gradient-light">
                                        <div class="modal-header">
                                            <img src="{{ asset('backend/assets/img/valide.png') }}" width="60" height="45" class="d-inline-block align-top" alt="">
                                            <h5 class="modal-title m-auto"> Joindre l'acte Signé
                                            </h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data" action="{{ route('uploadActe', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0012_s'] ) }}">
                                                @csrf

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <label class="col-form-label">Charger le fichier scanné</label>
                                                        <input type="file" required name="output_file" class="form-control border-success">
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Non, Annuler</button>
                                                    <button type="submit" class="btn btn-success">Oui,
                                                        Joindre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Modal Signer-->


                            {{-- Model de confirmation de Assigner a un collabrateur --}}
                            <div class="modal fade" id="assigner{{ $demande->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bgcustom-gradient-light">
                                        <div class="modal-header">
                                            <img src="{{ asset('backend/assets/img/assigner.jpg') }}" width="60" height="45" class="d-inline-block align-top" alt="">
                                            <h5 class="modal-title m-auto"> Assigner a un Collaborateur
                                            </h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data"
                                                action="{{ route('assignation', ['model' =>'AffectationP004', 'idDemande' => $demande->uuid ,'nameDemandeId'=> 'demande_p004_id', 'tableName'=>'demande_p0012_s'] ) }}">
                                                @csrf


                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <h5>Choisir le collaborateur à assigné</h5>

                                                        <select name="agent_id" id=""
                                                            class="form-select border-success">
                                                            @foreach ($agents as $agent)

                                                            @if($agent->service->libelle_court ==
                                                            $demande->procedure->service->libelle_court)
                                                            <option value="{{ $agent->uuid }}">{{
                                                                $agent->nom.' '.$agent->prenom }}
                                                            </option>
                                                            @endif

                                                            @endforeach

                                                        </select>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text-center">
                                                            <label class="col-form-label">Commentaires</label>
                                                            <textarea required name="commentaire" class="form-control border-success"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Non, Annuler</button>
                                                    <button type="submit" class="btn btn-success">Oui,
                                                        Assigner</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Modal Valider-->





                            {{-- Model de confirmation de rejet --}}
                            <div class="modal fade" id="rejetter{{ $demande->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bgcustom-gradient-light">
                                        <div class="modal-header">
                                            <img src="{{ asset('backend/assets/img/delete.svg') }}" width="60" height="45" class="d-inline-block align-top" alt="">
                                            <h5 class="modal-title m-auto"> Confirmation de Rejet</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="put" action="{{ route('rejetter', ['id' =>$demande->uuid, 'table' => 'demande_p0012_s']) }}">
                                                @csrf
                                                @method('PUT')



                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <label class="col-form-label">Etes vous sûr de
                                                            vouloir Rejetter cette Demande ?</label>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Non, Annuler</button>
                                                    <button type="submit" class="btn btn-danger">Oui,
                                                        Rejetter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Modal Rejet-->

                           

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
            buttons: [
                {
                    extend: 'csv',
                    text: 'CSV',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                    }
                },
                {
                    extend: 'print',
                    text: 'Imprimer',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                    }
                },
            ],
            select: true,
            "pagingType": "full_numbers",
            language: {
                search: "Rechercher :",
                lengthMenu: " _MENU_ ",
                info: "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                infoEmpty: "Aucun élément à afficher", // Message personnalisé pour une table vide
                infoFiltered: "(filtré de _MAX_ éléments au total)",
                infoPostFix: "",
                loadingRecords: "Chargement en cours...",
                zeroRecords: "Aucun élément à afficher",
                emptyTable: "Aucune donnée disponible dans le tableau",
                paginate: {
                    first: "Premier",
                    previous: "Précédent",
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


@endsection
