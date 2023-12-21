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
    <h1>Liste des Demandes de Permis de coupe de bois et charbon de bois</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Demandes</a></li>
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

                                        <button title="Actualiser la Page" type="button" onclick="refresh()"
                                            class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>

                                    </div>
                                </div>
                            </div><br>

                            <!-- Table with stripped rows -->
                            <table id="example1" class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date Demande</th>
                                        <th scope="col">Demandeur</th>
                                        <th scope="col">Exploitant</th>
                                        <th scope="col">Résidence</th>
                                        <th scope="col">Etat Demande</th>
                                        <th scope="col">Paiement</th>
                                        <th scope="col">Délai</th>
                                        <th scope="col">Déposé</th>
                                        <th scope="col">Assigné a</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php

                                    $userRole = Auth::user()->role->libelle;
                                    $i = 1;
                                    @endphp
                                    @foreach ($demandes as $demande)
                                    @php
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

                                    @if (Auth::user()->agent->province_id == $demande->province_id ||
                                    in_array($userRole, ['Gestionnaire',
                                    'Administration',]))

                                    <tr class="table-bordered">
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $demande->created_at->translatedFormat('d M Y à H:i:s') }}</td>
                                        <td> {{ $demande->usager->nom.' '.$demande->usager->prenom}}</td>
                                        <td>{{ $demande->exploitant }}</td>
                                        @if (isset($demande->localite))
                                        <td>{{ $demande->localite->libelle}}</td>
                                        @else
                                        <td>-</td>
                                        @endif

                                        <td><span class="badge {{ $statutColor }} ">{{ $statut}}</span> </td>



                                        {{-- partie paiement --}}
                                        @if ($demande->paiement === 1)
                                        <td><b><span class="text-success">Payée</span></b></td>
                                        @else
                                        <td><b><span class="text-warning">Non Payée</span></b></td>
                                        @endif

                                        @if($demande->exploitant == "Forestier")
                                        <td><span class="badge bg-dark"> 10</span> Jours </td>
                                        @else

                                        <td><span class="badge bg-dark">{{ $demande->procedure->delai}} </span> Jours
                                        </td>
                                        @endif


                                        <td>{{ $demande->created_at->diffForHumans() }}</td>

                                        @if($demande->last_agent_assign != null)
                                        <td> <span class="badge bg-primary"> {{ $demande->agent->nom. " "
                                                .$demande->agent->prenom}} </span> </td>
                                        @else
                                        <td> <span class="badge bg-danger"> non assigné </span> </td>
                                        @endif



                                        <td>

                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $demande->uuid }}">
                                                <i class="bi bi-eye"></i> </button>



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
                  <form method="post" enctype="multipart/form-data" action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0011_s'] ) }}">
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
                  <form method="post" enctype="multipart/form-data" action="{{ route('uploadActe', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0011_s'] ) }}">
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
                  <form method="post" enctype="multipart/form-data" action="{{ route('assignation', ['model' =>'AffectationP0011', 'idDemande' => $demande->uuid ,'nameDemandeId'=> 'demande_p0011_id', 'tableName'=>'demande_p0011_s'] ) }}">
                      @csrf


                      <div class="form-group">
                          <div class="text-center">
                              <h5>Choisir le collaborateur à assigné</h5>

                              <select name="agent_id" id="" class="form-select border-success">
                                  @foreach ($agents as $agent)

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
                  <form method="put" action="{{ route('rejetter', ['id' =>$demande->uuid, 'table' => 'demande_p0011_s']) }}">
                      @csrf
                      @method('PUT')



                      <div class="form-group">
                          <div class="text-center">
                              <label class="col-form-label">Motif du Rejet ?</label>
                              <input type="text" required name="libelle" class="form-control border-success">

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



{{-- Voir detail modal --}}
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
                      <span class="text-success">{{ $demande->usager->telephone}}</span>
                  </div>
              </div><br>
              <div class="row">
                  <div class="col">
                      <b>Espèce concerné:</b> <span class="text-success">{{ $demande->espece_coupe }}</span>

                  </div>
                  <div class="col-6">
                      <b>Commentaire:</b>
                      <span class="text-success">{{ $demande->commentaire }}</span>
                  </div>

              </div> <br>
              <h4>Liste des fichiers Soumis <i class="bi bi-folder text-success"></i></h4>
              <div class="row">
                  <div class="col">

                      @foreach ( $demande->demandePiece as $chemin)



                      <a class="text-success" target="_blank" href="{{ Storage::url($chemin->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i> {{$chemin->libelle}}</b></a>
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
@endsection
