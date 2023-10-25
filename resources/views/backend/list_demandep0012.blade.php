@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Liste des Demandes de permis d'écotourisme ou de tourisme écologique</h1>
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


                        <h5 class="card-title">Liste des Demandes Deposées <span>| Demandes</span></h5>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>Copy</span></button>
                                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>CSV</span></button>
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>Excel</span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>PDF</span></button>
                                            <button class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button"><span>Print</span></button>
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

                                    {{-- <input type="submit" value="Create new Porject"
                                        class="btn btn-success float-right bi bi-plus"> --}}
                                    <button style="float: right" type="button" class="btn btn-success"><i
                                            class="bi bi-plus"></i></button>
                                </div>
                            </div><br>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Demandeur</th>

                                        <th scope="col">Date Demande</th>
                                        <th scope="col">Résidence</th>
                                        <th scope="col">Etat Demande</th>

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
                                    <tr class="table-bordered">
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $demande->usager->nom.' '.$demande->usager->prenom }}</td>

                                        <td>{{ $demande->created_at }}</td>
                                        <td>{{ $demande->localite->libelle }}</td>

                                        <td><span class="badge {{ $statutColor }} ">{{ $statut}}</span> </td>


                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $demande->uuid }}"> <i
                                                    class="bi bi-eye"></i> </button>
                                                    <a href="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat,'table'=> 'demande_p0012_s' ] ) }}" type="button" title="Valider" class="btn btn-success"><i
                                                        class="bi bi-check-circle"></i> </a>
                                            <button type="button" title="Assigner à un collaborateur"
                                                class="btn btn-primary"><i class="bi bi-folder-symlink"></i></button>
                                            <button type="button" title="Rejetter" class="btn btn-danger"><i
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
                                                                <b>Type de Permis:</b>
                                                                @if ($demande->is_touristique==1)
                                                                <span class="badge bg-success">Touristque</span>
                                                                @endif
                                                                @if ($demande->is_photographique==1)
                                                                <span class="badge bg-success">Photographique</span>
                                                                @endif
                                                                @if ($demande->is_cinematographique==1)
                                                                <span class="badge bg-success">Cinematographique</span>
                                                                @endif
                                                            </div>

                                                        </div> <br>
                                                        <h4>Liste des fichiers Soumis <i class="bi bi-folder text-success"></i></h4>
                                                        <div class="row">
                                                            <div class="col">

                                                                @foreach ( $demande->demandePiece as $chemin)



                                                                <a class="text-success" href="{{ Storage::url($chemin->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$chemin->libelle}}</b></a>
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


@endsection
