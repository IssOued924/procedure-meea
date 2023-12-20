@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    {{-- <h1>Utilisateurs</h1> --}}
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Utilisateurs</a></a></li>
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

                <p>
                    @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">{{ session('success') }}</h4>

                </div>

                <script>
                    setTimeout(function() {
                                document.querySelector('.alert.alert-success').style.display = 'none';
                            }, 3000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                </script>
                @endif

                @error('email')
                <div class="alert alert-danger text-center">{{ $message }}</div>
                @enderror
                </p>

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

                        <div class="card-body">
                            <div class="row">

                                <div class="col">
                                    <h5 class="card-title"><span>Liste des Utilisateurs</span></h5>
                                </div>
                                <div class="col-3">
                                    {{-- <input type="submit" value="Create new Porject"
                                        class="btn btn-success float-right bi bi-plus"> --}}
                                    <button style="float: right " data-bs-toggle="modal" data-bs-target="#createModal"
                                        type="button" title="Ajouter un utilisateur" class="btn btn-success mt-5"><i
                                            class="bi bi-plus"></i></button>

                                    {{-- Modal de creation --}}
                                    <div class="modal fade" id="createModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter un Utilisateur</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('user-store') }} ">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h5 class="card-title">Agent</h5>
                                                                        <div class="input-group mb-3">
                                                                            {{-- <label for="libelle">Libelle</label>
                                                                            --}}
                                                                            <select name="agent_id" id=""
                                                                                class="border-success form-select">
                                                                                <option value="">Veuillez choisir
                                                                                    l'agent</option>
                                                                                @foreach ($agents as $agent)
                                                                                <option value="{{ $agent->uuid }}">{{
                                                                                    $agent->nom.' '.$agent->prenom }}
                                                                                    <b>{{ $agent->service->libelle_court
                                                                                        }}</b></option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <h5 class="card-title">Email</h5>
                                                                        <div class="input-group mb-3">
                                                                            {{-- <label for="libelle">Libelle</label>
                                                                            --}}
                                                                            <input type="email"
                                                                                class="form-control border-success"
                                                                                name="email">
                                                                        </div>

                                                                        <!-- Afficher le message d'erreur sous le champ -->
                                                                        @if($errors->has('matricule'))
                                                                        <div class="text-danger mt-80">{{
                                                                            $errors->first('matricule') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h5 class="card-title">Profil</h5>
                                                                        <div class="input-group mb-3">
                                                                            <select name="role_id" id=""
                                                                                class="form-select border-success">
                                                                                <option value="">Veuillez choisir son
                                                                                    profile</option>
                                                                                @foreach ($roles as $role )
                                                                                <option value="{{ $role->uuid }}">{{
                                                                                    $role->libelle }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Valider</button>

                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->

                                </div>
                            </div>
                            <!-- Table with stripped rows -->
                            <table id="example1" class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Profil</th>
                                        <th scope="col">statut</th>



                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($users as $user)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $user->name }}</td>
                                        <td> {{ $user->email }}</td>
                                        @if (isset($user->role_id))
                                        <td> {{ $user->role->libelle}}</td>
                                        @else
                                        <td>-</td>
                                        @endif

                                        @if ($user->etat == 1)

                                        <td> <span class="badge badge-success">Activé</span></td>
                                        @else
                                        <td> <span class="badge badge-warning">Désactivé</span></td>
                                        @endif

                                        <td>

                                            <button type="button" title="Desactiver Utilisateur" data-bs-toggle="modal"
                                                data-bs-target="#basicModalActive{{ $user->uuid }}"
                                                class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $user->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                            <a data-toggle="modal" data-target="#reinitialisation{{ $user->uuid }}"
                                                type="button" title="Réinitialiser" class="btn btn-warning">
                                                <i class="bi bi-arrow-clockwise"></i>
                                            </a>

                                        </td>

                                        {{-- Modal de desactivation de users --}}
                                        <div class="modal fade" id="basicModalActive{{ $user->uuid }}"
                                            data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bgcustom-gradient-light">
                                                    <div class="modal-header">
                                                        <img src="{{ asset('backend/assets/img/delete.svg') }}"
                                                            width="60" height="45" class="d-inline-block align-top"
                                                            alt="">
                                                        <h5 class="modal-title m-auto"> Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>

                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post"
                                                            action="{{ route('active-users', ['id' =>$user->uuid]) }}">
                                                            @csrf
                                                            @method('POST')
                                                            @if ($user->etat ==1)
                                                            <h6 class="text-Warning">Voulez vous désactiver cet
                                                                utilisateur ?</h6>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-bs-dismiss="modal">Non Annuler</button>

                                                                <button type="submit" class="btn btn-success">Oui,
                                                                    Désactiver</button>
                                                                @else
                                                                <h6 class="text-Warning">Voulez vous Activer cet
                                                                    utilisateur ?</h6>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Non Annuler</button>

                                                                    <button type="submit" class="btn btn-success">Oui,
                                                                        Activer</button>
                                                                    @endif
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin Modal de activation de mot de passe -->



                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $user->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="GET" action="{{ route('user-update', $user->uuid) }}">
                                                        @csrf

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Editer l'utilisateur </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">utilisateur</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="name"
                                                                            value="{{ $user->name }}"
                                                                            class="form-control border-success"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Profil</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <select name="role_id" id=""
                                                                            class="form-select border-success">
                                                                            @foreach ($roles as $role)

                                                                            <option {{ $user->role_id == $role->uuid ?
                                                                                'selected' : '' }} value="{{ $role->uuid
                                                                                }}">{{ $role->libelle }}</option>

                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            {{-- <input type="submit" value="Modifier"
                                                                class="btn btn-primary center"> --}}


                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Modifier
                                                            </button>
                                                            {{-- <input type="submit" value="Modifier"
                                                                class="btn btn-primary center"> --}}
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div><!-- End Basic edit Modal-->

                                        {{-- Modal de reinitialisation de mot de passe --}}
                                        <div class="modal fade" id="reinitialisation{{ $user->uuid }}"
                                            data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bgcustom-gradient-light">
                                                    <div class="modal-header">
                                                        <img src="{{ asset('backend/assets/img/delete.svg') }}"
                                                            width="60" height="45" class="d-inline-block align-top"
                                                            alt="">
                                                        <h5 class="modal-title m-auto"> Confirmation de Réinitialisation
                                                        </h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal"
                                                            aria-label="btn-close">

                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post"
                                                            action="{{ route('reinitialiser', ['id' =>$user->uuid]) }}">
                                                            @csrf
                                                            @method('POST')

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-dismiss="modal">Non, Annuler</button>
                                                                <button type="submit" class="btn btn-danger">Oui,
                                                                    Réinitialiser</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin Modal de reinitialisation de mot de passe -->


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
