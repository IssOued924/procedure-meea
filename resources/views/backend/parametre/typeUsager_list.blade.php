@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Paramètres</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Type Usager</a></li>
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
                                    <h5 class="card-title">Liste des <span>| Type Usager</span></h5>
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
                                                    <h5 class="modal-title">Ajouter un Type Usager</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('typeUsager-store') }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col -6">

                                                                <h5 class="card-title">Libelle </h5>
                                                                <div class="input-group mb-3">


                                                                    <input type="text" name="libelle_court"
                                                                        class="form-control border-success"
                                                                        placeholder="libelle" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="card-title">Libelle long</h5>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" name="libelle_long"
                                                                        class="form-control border-success"
                                                                        placeholder="Libelle long" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                                <!-- End Quill Editor Full -->

                                                            </div>


                                                            {{-- <input type="submit" value="Valider"
                                                                class="btn btn-primary"> --}}

                                                        </div>
                                                    </div>




                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit" class="btn btn-primary">Valider</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->

                                </div>
                            </div> <!-- Table with stripped rows -->

                            <table class="table datatable table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Libelle court</th>
                                        <th scope="col">Libelle long</th>

                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($typeUsager as $type)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $type->libelle_court }}</td>
                                        <td>{{ $type->libelle_long}}</td>

                                        <td>
                                            {{-- <button title="Voir detail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#basicModal{{ $type->uuid }}"> <i
                                                    class="bi bi-eye"></i> </button> --}}

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $type->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                            <a href="{{ route('suprimer-typeusager', ['uuid' => $type->uuid]) }}"
                                                title="Supprimer" type="button" class="btn btn-danger "> <i
                                                    class="bi bi-x"></i> </a>

                                        </td>


                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $type->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Editer le Type Usager </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST"
                                                        action="{{ route('typeUsager-update', $type->uuid) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Libelle Court</h5>
                                                                    <div class="input-group mb-3">

                                                                        <input type="text" name="libelle_court"
                                                                            class="form-control border-success"
                                                                            value="{{ $type->libelle_court }}"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Libelle Long</h5>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="libelle_long"
                                                                            class="form-control border-success"
                                                                            value="{{ $type->libelle_long }}"


                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Modifier
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- End Basic Modal-->



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
