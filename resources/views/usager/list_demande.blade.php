


@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Liste des Demandes d'avis Technique d'importation de produit Chimiques industriels </h1>
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
                                        <th scope="col">Quantite/Kg</th>
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
                                        <td> {{ $demande->usager->nom }}</td>
                                        <td>{{ $demande->quantite }}</td>
                                        <td>{{ $demande->created_at }}</td>
                                        <td>{{ $demande->localite->libelle }}</td>

                                        <td><span class="badge {{ $statutColor }} ">{{ $statut}}</span> </td>


                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $demande->uuid }}">
                                                <i class="bi bi-eye"></i> </button>

                                            <a data-toggle="modal" data-target="#valider{{ $demande->uuid }}"
                                                type="button" title="Valider" class="btn btn-success"><i
                                                    class="bi bi-check-circle"></i> </a>

                                            <button data-toggle="modal" data-target="#assigner{{ $demande->uuid }}" type="button" title="Assigner à un collaborateur"
                                                class="btn btn-primary"><i class="bi bi-folder-symlink"></i></button>

                                            <a data-toggle="modal" data-target="#rejetter{{ $demande->uuid }}" type="button" title="Rejetter"
                                                class="btn btn-danger"><i class="bi bi-x-circle"></i></a>


                                            {{-- Model de confirmation de Assigner a un collabrateur --}}
                                            <div class="modal fade" id="assigner{{ $demande->uuid }}"
                                                data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('backend/assets/img/delete.svg') }}"
                                                                width="60" height="45" class="d-inline-block align-top"
                                                                alt="">
                                                            <h5 class="modal-title m-auto"> Assigner a un Collaborateur
                                                            </h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="btn-close">

                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="put"
                                                                action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p001_s'] ) }}">
                                                                @csrf
                                                                @method('GET')


                                                                <div class="form-group">
                                                                    <div class="text-center">
                                                                      <h5>Choisir le collaborateur à assigné</h5>

                                                                            <select name="" id="" class="form-select border-success">
                                                                                @foreach ($agents as $agent)

                                                                                <option value="{{ $agent->uuid }}">{{ $agent->nom.' '.$agent->prenom }}</option>
                                                                                @endforeach

                                                                            </select>

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


                                            {{-- Model de confirmation de Valider --}}
                                            <div class="modal fade" id="valider{{ $demande->uuid }}"
                                                data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bgcustom-gradient-light">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('backend/assets/img/delete.svg') }}"
                                                                width="60" height="45" class="d-inline-block align-top"
                                                                alt="">
                                                            <h5 class="modal-title m-auto"> Confirmation de Validation
                                                            </h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="btn-close">

                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="put"
                                                                action="{{ route('statusChange', ['id' =>$demande->uuid, 'currentStatus' => $demande->etat ,'table'=> 'demande_p001_s'] ) }}">
                                                                @csrf
                                                                @method('GET')


                                                                <div class="form-group">
                                                                    <div class="text-center">
                                                                        <label class="col-form-label">Etes vous sûr de
                                                                            vouloir Valider cette Demande ?</label>

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
                                                                action="{{ route('rejetter', ['id' =>$demande->uuid, 'table' => 'demande_p001_s']) }}">
                                                                @csrf
                                                                @method('PUT')



                                                                <div class="form-group">
                                                                    <div class="text-center">
                                                                        <label class="col-form-label">Etes vous sûr de
                                                                            vouloir Rejetter cette Demande ?</label>

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
                                                                <span class="text-success">{{
                                                                    $demande->usager->telephone}}</span>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <b>Identite Fournisseur:</b>
                                                                <span
                                                                    class="text-success">{{$demande->denomination_sociale_fournisseur}}</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <b>Addresse:</b>
                                                                <span
                                                                    class="text-success">{{$demande->adresse_fournisseur}}</span>
                                                            </div>
                                                        </div> <br>
                                                        <h4>Liste des fichiers Soumis <i
                                                                class="bi bi-folder text-success"></i></h4>
                                                        <div class="row">
                                                            <div class="col">

                                                                @foreach ( $demande->demandePiece as $chemin)

                                                                <a class=" text-success"
                                                                    href="{{ Storage::url($chemin->chemin) }}"><b><i
                                                                            class="bi bi-file-earmark-pdf"></i>
                                                                        {{$chemin->libelle}}</b></a>
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

<script>
    function rejetter(){

    var test = document.getElementById('test')
    test.submit()
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Etes vous sur de vouloir Rejetter cette Demande?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Je Confirme!',
  cancelButtonText: 'Annuler!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    // swalWithBootstrapButtons.fire(
    //   'Cancelled',
    //   'Your imaginary file is safe :)',
    //   'error'
    // )
  }
})
    }

    //fonction valider statut
    function valider(){
        Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
    }
</script>


@endsection
