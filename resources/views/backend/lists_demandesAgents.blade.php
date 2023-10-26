
@extends('layouts/layoutUsager')
@section('title')

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


                        <h2 class="card-title text-center">MES DEMANDES <span>| Demandes</span></h2>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 offset-md-4">
                                    <label for="">Choisir sa procédure</label>
                                <select name="procedure" id="procedure" class="form-select border-success" onchange="loadDemandeListe()">
                                <option class="mb-3" value=""></option>
                                    @foreach($procedures as $proc)
                                        <option class="mb-3" {{($selectedProcedure == $proc->libelle_court ? 'selected': '')}} value="{{$proc->libelle_court}}">{{$proc->libelle_long}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                          <br>

                            <!-- Table with stripped rows -->
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        
                                        
                                        <th scope="col">Date Demande</th>
                                        
                                        <th scope="col">Etat Demande</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    <?php if(!is_null($demandes)){ ?>
                                    @foreach ($demandes as $demande)
                                    @php
                                    $statut = "";
                                    $statutColor = "";
                                    switch ($demande->etat) {
                                        case 'D':
                                            # code...
                                            $statut = "demande deposée";
                                            $statutColor ="bg-primary";
                                            break;
                                            case 'S':
                                            # code...
                                            $statut ="demande signée";
                                            $statutColor ="bg-success";
                                            break;
                                            case 'A':
                                            # code...
                                            $statut ="demande archivée" ;
                                            $statutColor ="bg-secondary";
                                            break;
                                            case 'V':
                                            # code...
                                            $statut = "demande validée";
                                            $statutColor ="bg-success";
                                            break;
                                            case 'C':
                                            # code...
                                            $statut = "En attente pour complement de dossier";
                                            $statutColor ="bg-warning";
                                            break;
                                            case 'R':
                                            # code...
                                            $statut = "demande rejetée";
                                            $statutColor ="bg-danger";
                                            break;
                                            case 'E':
                                            # code...
                                            $statut = "demande en etude";
                                            $statutColor ="bg-info";
                                            break;
                                        default:
                                            # code...
                                            break;
                                    }
                                    @endphp
                                    <tr class="table-bordered">
                                        <th scope="row">{{ $i++ }}</th>
                                      
                                       
                                        <td>{{ $demande->created_at }}</td>
                                        

                                        <td>
                                       
    
                                        <span class="badge {{ $statutColor }} ">{{$statut}}</span> </td>

                                        
                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $demande->uuid }}"> <i
                                                    class="bi bi-eye"></i> </button>
                                           
                                         
                                            <button type="button" title="Annuler" class="btn btn-danger"><i
                                                    class="bi bi-x-circle"></i></button>
                                        </td>

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
                                                                <span>{{ $demande->usager->nom.'
                                                                    '.$demande->usager->prenom}}</span>

                                                            </div>
                                                            <div class="col-6">
                                                                <b>Telephone :</b>
                                                                <span>{{ $demande->usager->telephone}}</span>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <b>Identite Fournisseur:</b>
                                                                <span>{{$demande->denomination_sociale_fournisseur}}</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <b>Addresse:</b>
                                                                <span>{{$demande->adresse_fournisseur}}</span>
                                                            </div>
                                                        </div> <br>
                                                        <h4>Liste des fichiers Soumis</h4>
                                                        <div class="row">
                                                            <div class="col">

                                                                @foreach ( $demande->demandePiece as $chemin)



                                                                <a href="{{ Storage::url($chemin->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$chemin->libelle}}</b></a>
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
                                    @endforeach
                                    <?php } ?>                              

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
    function loadDemandeListe(){
        let url='/demandes-lists?procedure='+$('#procedure').val();
        window.location=url;
    }
</script>
@endsection
