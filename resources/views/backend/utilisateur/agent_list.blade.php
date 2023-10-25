@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Utilisateurs</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Agents</a></a></li>
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

                        <div class="card-body">

                            <div class="row">
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
                                <div class="col">

                                    <h5 class="card-title">Liste des <span>| Agents</span></h5>
                                </div>
                                <div class="col-3">

                                    {{-- <input type="submit" value="Create new Porject"
                                        class="btn btn-success float-right bi bi-plus"> --}}
                                    <button style="float: right " data-bs-toggle="modal" data-bs-target="#createModal"
                                        type="button" class="btn btn-success mt-5"><i class="bi bi-plus"></i></button>

                                    {{-- Modal de creation --}}
                                    <div class="modal fade" id="createModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter un Agent</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('agent-store') }}">
                                                    @csrf
                                                <div class="modal-body">


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="card-title">Nom</h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="nom"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="card-title">Prénom</h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="prenom"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="card-title">Matricule</h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="matricule"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="card-title">Fonction</h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="fonction"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">


                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">

                                                                        <div class="col">
                                                                            <h5 class="card-title">Structure</h5>
                                                                            <div class="input-group mb-3">
                                                                                {{-- <label for="libelle">Libelle</label> --}}
                                                                                <select name="service_id" id="selectMultiple"
                                                                                    class="form-select border-success" id="">
                                                                                    <option value="">Veuillez choisir Sa
                                                                                        Direction
                                                                                    </option>
                                                                                    @foreach ( $services as $serv)
                                                                                    <option value="{{ $serv->uuid }}">{{
                                                                                        $serv->libelle_long }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <!-- End Quill Editor Full -->
                                                                        </div>
                                                                        <div class="col">
                                                                            <h5 class="card-title">Roles</h5>
                                                                            <div class="input-group mb-3">
                                                                                <select   class="form-select border-success" name="role_id" id="">
                                                                                @foreach ($roles as $role)
                                                                               <option value="{{ $role->uuid }}">{{ $role->libelle }}</option>
                                                                                &nbsp;&nbsp;
                                                                                @endforeach
                                                                            </select>

                                                                            </div>

                                                                        </div>


                                                                </div>
                                                            </div>
                                                            </div>

                                                        </div>

                                                        {{-- <input type="submit" value="Valider" class="btn btn-primary"> --}}


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                             <button type="submit" class="btn btn-primary">Valider</button>

                                                        </div>

                                                </div>
                                            </form>

                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->


                                </div>
                            </div>
                            <table class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Matricule</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Fonction</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Role</th>
                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($agents as $agent)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $agent->matricule }}</td>
                                        <td> {{ $agent->nom }}</td>
                                        <td> {{ $agent->prenom }}</td>
                                        <td> {{ $agent->fonction }}</td>
                                        <td>{{ $agent->service->libelle_court}}</td>
                                        <td>{{ $agent->role->libelle}}</td>

                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $agent->uuid }}">
                                                <i class="bi bi-eye"></i> </button>

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $agent->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                        </td>

                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $agent->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                <form method="post"
                                                            action="{{ route('agent-update', $agent->uuid) }}">
                                                            {{ method_field('put') }}
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Editer l'agent </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                            @csrf
                                                            @method('GET')

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Nom</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="nom"
                                                                            value="{{ $agent->nom }}"
                                                                            class="form-control border-success"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Prénom</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="prenom"
                                                                            value="{{ $agent->prenom }}"
                                                                            class="form-control border-success"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Matricule</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="matricule"
                                                                            value="{{ $agent->matricule }}"
                                                                            class="form-control border-success"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Fonction</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="fonction"
                                                                            value="{{ $agent->fonction }}"
                                                                            class="form-control border-success"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">


                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Service</h5>

                                                                        <div class="input-group mb-3">

                                                                            {{-- <label for="libelle">Libelle</label>
                                                                            --}}

                                                                            <select name="service_id"
                                                                                id="selectMultiple"
                                                                                class="form-select border-success"
                                                                                id="">
                                                                                <option value="">Veuillez choisir son
                                                                                    Service
                                                                                </option>
                                                                                @foreach ( $services as $serv)
                                                                                <option
                                                                                    value="{{ $agent->service_id }}">{{
                                                                                    $serv->libelle_long }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <!-- End Quill Editor Full -->

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
