<table id="example4" class="table datatable table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Référence</th>
            <th scope="col">Date Demande</th>
            <th scope="col">Demandeur</th>
            {{-- <th scope="col">Quantite/Kg</th> --}}
            @if(isset($demandes[0]) && $demandes[0]->code == 'P002')
            <th scope="col">Domaine</th>
            <th scope="col">Categorie</th>
            <th scope="col">Sous domaine</th>
            @endif
            <th scope="col">Résidence</th>
            <th scope="col">etat Demande</th>
            <th scope="col">Paiement</th>
            <th scope="col">Délai</th>
            {{-- <th scope="col">Déposé</th> --}}
            <th scope="col">Assigné a</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        $userRole = Auth::user()->role->libelle;
        $checkData = 0;
        @endphp
        @foreach ($demandes as $demande)
        {{-- @if($demande->etat == 'S' || $demande->etat == 'A' && ($demande->last_agent_assign == Auth::user()->agent->uuid && in_array($userRole, ['Etudes', 'Gestionnaire',])) && in_array($userRole, ['Gestionnaire', 'Administration'])) --}}
        @if($demande->etat == 'S' || $demande->etat == 'A' && (($demande->last_agent_assign == Auth::user()->agent->uuid && in_array($userRole, ['Etudes', 'Gestionnaire'])) || in_array($userRole, ['Gestionnaire', 'Administration'])) && in_array($userRole, ['Etudes', 'Gestionnaire', 'Administration']))

        @php
        $checkData = 1;
        $statut = "";
        $statutColor = "";
        switch ($demande->etat) {
        case 'D':
        # code...
        $statut = $statutDepose;
        $statutColor ="bg-primary";
        break;
        case 'S':
        # code...
        $statut = $statutSigne;
        $statutColor ="bg-success";
        break;
        case 'A':
        # code...
        $statut = $statutArchive;
        $statutColor ="bg-secondary";
        break;
        case 'V':
        # code...
        $statut = $statutValide;
        $statutColor ="bg-success";
        break;
        case 'C':
        # code...
        $statut = $statutComplement;
        $statutColor ="bg-warning";
        break;
        case 'R':
        # code...
        $statut = $statutRejete;
        $statutColor ="bg-danger";
        break;
        case 'E':
        # code...
        $statut = $statutEtude;
        $statutColor ="bg-info";
        break;
        default:
        # code...
        break;
        }
        @endphp

        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $demande->reference }}</td>
            <td>{{ $demande->created_at->translatedFormat('d M Y à H:i:s') }}</td>
            @if($demande->code == 'P003' || $demande->code == 'P004' || $demande->code == 'P005' || $demande->code == 'P006' || $demande->code == 'P007' || $demande->code == 'P0012')
            <td> {{ $demande->usager->nom.' '.$demande->usager->prenom}}</td>
            @elseif($demande->code == 'P002')
            <td> {{ $demande->identite }}</td>
            <td>{{ $demande->domaine }}</td>
            <td>{{ $demande->categorie }}</td>
            <td>{{ $demande->sous_domaine }}</td>
            @elseif($demande->code == 'P008' || $demande->code == 'P0011')
            <td> {{ $demande->beneficiaire }}</td>
            @else
            <td> {{ $demande->denomination_sociale_demandeur }}</td>
            @endif
            {{-- <td>{{ $demande->quantite }}</td> --}}
            <td>{{ $demande->localite->libelle }}</td>

            <td><span class="badge {{ $statutColor }} ">{{ $statut}}</span> </td>

            {{-- partie paiement --}}
            @if ($demande->paiement === 1)
            <td><b><span class="text-success">Payé</span></b></td>

            @else
            <td><b><span class="text-warning">Non Payé</span></b></td>
            @endif

            <td><span class="badge bg-dark">{{ $demande->procedure->delai}} </span> Jours
            </td>

            {{-- <td>{{ $demande->created_at->diffForHumans() }}</td> --}}

            @if($demande->last_agent_assign != null)
            <td> <span class="badge bg-primary"> {{ $demande->agent->nom. " "
                    .$demande->agent->prenom}} </span> </td>
            @else
            <td> <span class="badge bg-danger"> non assigné </span> </td>
            @endif



            <td>
                <a title="Voir Détail" href="{{ route('detail-demande', ['process' => $demande->code, 'id_demande' => $demande->uuid]) }}" class="btn btn-primary ">
                        <i class="bi bi-eye"></i> </a>

                    {{-- Model de confirmation de Valider --}}
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
                                    <form method="post" enctype="multipart/form-data" action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p001_s'] ) }}">
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



                    {{-- Modal de Joindre acte signé --}}
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
                                    <form method="post" enctype="multipart/form-data" action="{{ route('uploadActe', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p001_s'] ) }}">
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
                                    <h5 class="modal-title m-auto"> Assigner à un Collaborateur
                                    </h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data" action="{{ route('assignation', ['model' =>'AffectationP001', 'idDemande' => $demande->uuid ,'nameDemandeId'=> 'demande_p001_id', 'tableName'=>'demande_p001_s'] ) }}">
                                        @csrf


                                        <div class="form-group">
                                            <div class="text-center">
                                                <h5>Choisir le collaborateur à assigné</h5>

                                                <select name="agent_id" id="" class="form-select border-success">
                                                    "" @foreach ($agents as $agent)

                                                    @if($agent->service->libelle_court == $demande->procedure->service->libelle_court)
                                                    <option value="{{ $agent->uuid }}">{{ $agent->nom.' '.$agent->prenom }}</option>
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
                                    <form method="put" action="{{ route('rejetter', ['id' =>$demande->uuid, 'table' => 'demande_p001_s']) }}">
                                        @csrf
                                        @method('PUT')



                                        <div class="form-group">
                                            <div class="text-center">
                                                <label class="col-form-label">Motif du rejet ?</label>
                                                <input required type="text" name="libelle" class="form-control border-success">
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
                </td>
                {{-- detail modal     --}}
                <div class="modal fade" id="largeModal{{ $demande->uuid }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="height: 500px;">
                            <div class="modal-header">
                                <h5 class="modal-title">Détail de la Demande</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <b>Identite demandeur:</b>
                                        <span class="text-success">{{ $demande->usager->nom.'
                                            '.$demande->usager->prenom}}</span>

                                    </div>
                                    <div class="col-6">
                                        <b>Telephone :</b>
                                        <span class="text-success">{{
                                            $demande->usager->telephone}}</span>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-6">
                                        <b>Identite Fournisseur:</b>
                                        <span class="text-success">{{$demande->denomination_sociale_fournisseur}}</span>
                                    </div>
                                    <div class="col-6">
                                        <b>Addresse:</b>
                                        <span class="text-success">{{$demande->adresse_fournisseur}}</span>
                                    </div>
                                </div> <br>

                                <div class="row">
                                    <div class="col-6">
                                        <b>Système de transport :</b>
                                        <span class="text-success">{{$demande->systeme_transport}} | {{$demande->agrement_transport}}</span>
                                    </div>
                                    <div class="col-6">
                                        <b>Commentaire:</b>
                                        <span class="text-success">{{ $demande->commentaire }}</span>
                                    </div>

                                </div>

                                <h4>Liste des fichiers Soumis <i class="bi bi-folder text-success"></i></h4>
                                <div class="row">
                                    <div class="col">

                                        @foreach ( $demande->demandePiece as $chemin)

                                        <a class=" text-success" target="_blank" href="{{ Storage::url($chemin->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>
                                                {{$chemin->libelle}}</b></a>
                                        <br>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary">Valider</button>
                            </div>
                        </div>
                    </div>
                </div><!-- End Large Modal-->
            </tr>

            @endif
        @endforeach


    </tbody>
</table>


@if($checkData)
<script>
    $(function() {
        // new DataTable('table.display');

    $(document).ready(function() {

        $('#example4').DataTable({
    
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
@endif