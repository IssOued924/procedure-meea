@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Paramètres</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">PieceJointe</a></li>
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
                                    <h5 class="card-title">Liste des <span>| Pièces Jointes</span></h5>
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
                                                    <h5 class="modal-title">Ajouter une Piece Jointe</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form method="POST"
                                                                action="{{ route('piecejointe-store') }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h5 class="card-title">Libelle </h5>
                                                                        <div class="input-group mb-3">

                                                                            {{-- <label for="libelle">Libelle</label> --}}
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">@</span>
                                                                            <input type="text" name="libelle"
                                                                                class="form-control border-success"
                                                                                placeholder="libelle" aria-label="Username"
                                                                                aria-describedby="basic-addon1" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <h5 class="card-title">Procédure Concernée </h5>
                                                                        <div class="input-group mb-3">

                                                                            {{-- <label for="libelle">Libelle</label> --}}
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">@</span>
                                                                            <select name="procedure_id" id="" class="form-select">
                                                                                <option value="">Veuillez Choisir la procédure</option>
                                                                                @foreach ($procedures as $proc)
                                                                                <option value="{{ $proc->uuid }}">{{ $proc->code }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Montant</h5>

                                                                        <div class="input-group mb-3">

                                                                            {{-- <label for="libelle">Libelle</label>
                                                                            --}}
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">@</span>
                                                                            <input type="text" name="montant"
                                                                                class="form-control border-success"
                                                                                placeholder="Montant"
                                                                                aria-label="Username"
                                                                                aria-describedby="basic-addon1"
                                                                                required>

                                                                        </div>
                                                                        <!-- End Quill Editor Full -->

                                                                    </div>
                                                                </div>

                                                                <input type="submit" value="Valider"
                                                                    class="btn btn-primary">

                                                            </form>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Fermer</button>
                                                    {{-- <button type="button" class="btn btn-primary">Valider</button>
                                                    --}}
                                                </div>
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
                                        <th scope="col">Libelle</th>
                                        <th scope="col">montant</th>

                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($pieceJointes as $piece)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $piece->libelle }}</td>
                                        <td>{{ $piece->montant}}</td>

                                        <td>
                                            <button title="Voir detail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#basicModal{{ $piece->uuid }}">
                                                <i class="bi bi-eye"></i> </button>

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $piece->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                            <a href="{{ route('suprimer-piecejointe', ['uuid' => $piece->uuid]) }}"
                                                title="Supprimer" type="button" class="btn btn-danger "> <i
                                                    class="bi bi-x"></i> </a>

                                        </td>


                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $piece->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Editer la Piece Jointes</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('piecejointe-update', $piece->uuid) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Libelle</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">@</span>
                                                                        <input type="text" name="libelle"
                                                                            class="form-control border-success"
                                                                            value="{{ $piece->libelle }}" placeholder="libelle"
                                                                            aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>

                                                                </div>

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Procédure</h5>
                                                                    <div class="input-group mb-3">
                                                                        {{-- <label for="libelle">Libelle</label> --}}
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">@</span>
                                                                        <select name="procedure_id" id="" class="form-select">
                                                                            @foreach ($piece->procedure as $ppj)
                                                                            <option value="{{ $ppj->code }}">{{ $ppj->code }}</option>

                                                                            @endforeach
                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <select class="select" multiple>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                    <option value="4">Four</option>
                                                                    <option value="5">Five</option>
                                                                    <option value="6">Six</option>
                                                                    <option value="7">Seven</option>
                                                                    <option value="8">Eight</option>
                                                                  </select>


                                                            </div>
                                                            <h5 class="card-title">Montant</h5>
                                                            <div class="input-group mb-3">

                                                                {{-- <label for="libelle">Libelle</label> --}}

                                                                <span class="input-group-text"
                                                                    id="basic-addon1">@</span>
                                                                <input type="number" name="montant"
                                                                    class="form-control border-success"
                                                                    value="{{ $piece->montant }}" placeholder="libelle"
                                                                    aria-label="Username"
                                                                    aria-describedby="basic-addon1" required>

                                                            </div>


                                                            <input type="submit" value="Modifier"
                                                                class="btn btn-primary center">

                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        {{-- <button type="button" class="btn btn-primary">Save
                                                            changes</button> --}}
                                                    </div>
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
