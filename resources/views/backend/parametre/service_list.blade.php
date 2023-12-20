@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Paramètres</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Services</a></li>
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
                                    <h5 class="card-title">Liste des <span>| Service</span></h5>
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
                                                    <h5 class="modal-title">Ajouter un service</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('service-store') }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title">Nom Abrégé</h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="libelle_court"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5 class="card-title">Nom Complet</h5>

                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="libelle_long"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle long" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="card-title">Structure Concerner</h5>

                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <select name="structure_id" id="selectMultiple"
                                                                        class="form-select" id="">
                                                                        <option value="">Veuillez choisir sa Structure
                                                                        </option>
                                                                        @foreach ( $structures as $str)
                                                                        <option value="{{ $str->uuid }}">{{
                                                                            $str->libelle_long }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <!-- End Quill Editor Full -->
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="sub,it" class="btn btn-primary">Valider</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->

                                </div>
                            </div> <!-- Table with stripped rows -->
                            <!-- Table with stripped rows -->
                            <table class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom abrégé</th>
                                        <th scope="col">Nom Complet</th>
                                        <th scope="col">Structure</th>
                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($services as $serv)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>

                                        <td>{{ $serv->libelle_court}}</td>
                                        <td>{{ $serv->libelle_long}}</td>
                                        @if (isset($serv->structure))

                                        <td>{{ $serv->structure->libelle_long}}</td>
                                        @else
                                        <td>-</td>
                                        @endif


                                        <td>
                                            <button title="Editer" type="button" class="btn btn-info "
                                            data-bs-toggle="modal"
                                            data-bs-target="#basicModalEdit{{ $serv->uuid }}"> <i class="bi bi-pencil-square"></i> </button>

                                            <a href="{{ route('suprimer-service', ['uuid' => $serv->uuid]) }}"
                                                title="Supprimer" type="button" class="btn btn-danger "> <i
                                                    class="bi bi-x"></i> </a>

                                        </td>

                                        {{-- editer service --}}

                                         {{-- editer modal --}}
                                         <div class="modal fade" id="basicModalEdit{{ $serv->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                    <form method="POST"
                                                        action="{{ route('service-update', $serv->uuid) }}">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Editer Service </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 class="card-title">Nom Abrégé</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="libelle_court"
                                                                            class="form-control border-success" value="{{ $serv->libelle_court }}"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h5 class="card-title">Nom Complet</h5>

                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="libelle_long"
                                                                            class="form-control border-success" value="{{ $serv->libelle_long }}"
                                                                            placeholder="libelle long" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Structure Concerner</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <select name="structure_id" id="selectMultiple"
                                                                            class="form-select" id="">
                                                                            <option value="">Veuillez choisir sa Structure
                                                                            </option>
                                                                            @foreach ( $structures as $str)
                                                                            <option {{ $serv->structure_id == $str->uuid ? 'selected' : ''}} value="{{ $str->uuid }}">{{
                                                                                $str->libelle_long }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <!-- End Quill Editor Full -->
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
