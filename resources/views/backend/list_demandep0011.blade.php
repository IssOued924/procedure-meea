@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
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


                        <h5 class="card-title">Liste des Demandes   <span>| Demandes</span></h5>

                        <div class="card-body">
                            <p> @if(session('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="alert-heading">{{session('success')}}</h4>

                                </div>

                                <script>
                                    setTimeout(function() {
                                            document.querySelector('.alert.alert-success').style.display = 'none';
                                        }, 3000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                                </script>
                                @endif</p>
                            <div class="row">
                                <div class="col-9">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group flex-wrap">

                                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>CSV</span></button>
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>Excel</span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>PDF</span></button>
                                            <button class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button"><span>Imprimer</span></button>
                                            {{-- <div class="btn-group">
                                                <button
                                                    class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                                    tabindex="0" aria-controls="example1" type="button"
                                                    aria-haspopup="true" aria-expanded="false"><span>Column
                                                        visibility</span></button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">

                                    <div style="float: right">

                                        <button title="Actualiser la Page"   type="button" onclick="refresh()" class="btn btn-success"><i
                                                    class="bi bi-arrow-repeat"></i></button>
                                                    <button  title="Ajouter" type="button" class="btn btn-success"><i
                                                        class="bi bi-plus"></i></button>
                                        </div>
                                </div>
                            </div><br>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-bordered table-striped">
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
                                        <th scope="col">Commentaires</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
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
                                    @if ($demande->last_agent_assign == null || $demande->last_agent_assign == Auth::user()->agent->uuid || Auth::user()->role->code == "ADMIN")
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
                                          <td><span class="badge bg-dark">{{ $demande->procedure->delai}} </span> Jours </td>
                                          @else
                                          <td><span class="badge bg-dark"> 10</span> Jours </td>
                                          @endif
                                          

                                        <td>{{ $demande->created_at->diffForHumans() }}</td>

                                        @if($demande->last_agent_assign != null)
                                        <td> <span class="badge bg-primary"> {{ $demande->agent->nom. " " .$demande->agent->prenom}} </span> </td>
                                        @else
                                        <td> <span class="badge bg-danger"> non assigné </span> </td>
                                        @endif

                                        <td>{{ $demande->commentaire }}</td>

                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                            data-bs-toggle="modal" data-bs-target="#largeModal{{ $demande->uuid }}">
                                            <i class="bi bi-eye"></i> </button>

                                            @if ($demande->etat != 'A' && $demande->etat != 'S' )
                                                <a data-toggle="modal" data-target="#valider{{ $demande->uuid }}"
                                                    type="button" title="Valider" class="btn btn-success"><i
                                                        class="bi bi-check-circle"></i> </a>

                                                <button data-toggle="modal" data-target="#assigner{{ $demande->uuid }}" type="button" title="Assigner à un collaborateur"
                                                    class="btn btn-primary"><i class="bi bi-folder-symlink"></i></button>

                                                <a data-toggle="modal" data-target="#rejetter{{ $demande->uuid }}" type="button" title="Rejetter"
                                                    class="btn btn-danger"><i class="bi bi-x-circle"></i></a>
                                            @endif
                                            @if ($demande->etat == 'S')
                                            <a data-toggle="modal" data-target="#valider{{ $demande->uuid }}"
                                                type="button" title="Valider" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> </a>
                                                <a data-toggle="modal" data-target="#signer{{ $demande->uuid }}"
                                                type="button" title="Joindre Acte Signé" class="btn btn-success"><i
                                                    class="bi bi-upload"></i> </a>
                                            @endif


                                              {{-- Model de confirmation de Validation et note detude --}}
                                        <div class="modal fade" id="valider{{ $demande->uuid }}"
                                            data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bgcustom-gradient-light">
                                                    <div class="modal-header">
                                                        <img src="{{ asset('backend/assets/img/valide.png') }}"
                                                            width="60" height="45" class="d-inline-block align-top"
                                                            alt="">
                                                        <h5 class="modal-title m-auto"> Confirmation de Validation
                                                        </h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal"
                                                            aria-label="btn-close">

                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data"
                                                            action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0011_s'] ) }}">
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
                                                                <button type="button" class="btn btn-warning"
                                                                    data-dismiss="modal">Non, Annuler</button>
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
                                            <div class="modal fade" id="signer{{ $demande->uuid }}"
                                                data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('backend/assets/img/valide.png') }}"
                                                                width="60" height="45" class="d-inline-block align-top"
                                                                alt="">
                                                            <h5 class="modal-title m-auto"> Joindre l'acte Signé
                                                            </h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="btn-close">

                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" enctype="multipart/form-data"
                                                                action="{{ route('uploadActe', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p0011_s'] ) }}">
                                                                @csrf

                                                                <div class="form-group">
                                                                    <div class="text-center">
                                                                        <label class="col-form-label">Charger le fichier scanné</label>
                                                                            <input type="file" required name="output_file" class="form-control border-success">
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-dismiss="modal">Non, Annuler</button>
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
                                            <div class="modal fade" id="assigner{{ $demande->uuid }}"
                                                data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('backend/assets/img/assigner.jpg') }}"
                                                                width="60" height="45" class="d-inline-block align-top"
                                                                alt="">
                                                            <h5 class="modal-title m-auto"> Assigner a un Collaborateur
                                                            </h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="btn-close">

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
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-dismiss="modal">Non, Annuler</button>
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
                                            <div class="modal fade" id="rejetter{{ $demande->uuid }}" data-backdrop="static" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('backend/assets/img/delete.svg') }}"
                                                                width="60" height="45" class="d-inline-block align-top"
                                                                alt="">
                                                            <h5 class="modal-title m-auto"> Confirmation de Rejet</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="btn-close">

                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="put"
                                                                action="{{ route('rejetter', ['id' =>$demande->uuid, 'table' => 'demande_p0011_s']) }}">
                                                                @csrf
                                                                @method('PUT')



                                                                <div class="form-group">
                                                                    <div class="text-center">
                                                                        <label class="col-form-label">Motif du Rejet ?</label>
                                                                        <input type="text" required name="libelle" class="form-control border-success">

                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-dismiss="modal">Non, Annuler</button>
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
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
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

                                                        </div> <br>
                                                        <h4>Liste des fichiers Soumis <i class="bi bi-folder text-success"></i></h4>
                                                        <div class="row">
                                                            <div class="col">

                                                                @foreach ( $demande->demandePiece as $chemin)



                                                                <a  class="text-success"  target="_blank" href="{{ Storage::url($chemin->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$chemin->libelle}}</b></a>
                                                                <br>
                                                                @endforeach
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
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
<script>
    function refresh() {
        location.reload(true);
    }
</script>
@section('script')


@endsection
