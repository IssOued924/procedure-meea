@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
    <h1>Paramètres</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Procédures</a></li>
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

                                    <h5 class="card-title">Liste des <span>| Procédures</span></h5>
                                </div>
                                <div class="col-3">

                                    {{-- <input type="submit" value="Create new Porject"
                                        class="btn btn-success float-right bi bi-plus"> --}}
                                    {{-- <button style="float: right " data-bs-toggle="modal" data-bs-target="#createModal"
                                        type="button" class="btn btn-success mt-5"><i class="bi bi-plus"></i></button> --}}

                                    {{-- Modal de creation --}}
                                    <div class="modal fade" id="createModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content" style="height: 500px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Détail de la Procédure</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="description">Description</label>

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


                            </div>

                            <br>

                            <!-- Table with stripped rows -->
                            <table class="table datatable  table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom Abrege</th>
                                        <th scope="col">Titre Procédure</th>

                                        {{-- <th scope="col">Commune</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($procedures as $proc)

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $proc->libelle_court }}</td>
                                        <td>{{ $proc->libelle_long}}</td>

                                        <td>
                                            <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $proc->uuid }}"> <i
                                                    class="bi bi-eye"></i> </button>

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $proc->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                        </td>

                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $proc->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Editer la Procédure </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST"
                                                    action="{{ route('procedure-update', $proc->uuid) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 class="card-title">Nom Abrégé</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="text" name="libelle_court"
                                                                            class="form-control border-success"
                                                                            value="{{ $proc->libelle_court }}"
                                                                            placeholder="libelle" aria-label="Username"
                                                                            aria-describedby="basic-addon1" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h5 class="card-title">Titre</h5>
                                                            <div class="input-group mb-3">

                                                                {{-- <label for="libelle">Libelle</label> --}}

                                                                <input type="text" name="libelle_long"
                                                                    class="form-control border-success"
                                                                    value="{{ $proc->libelle_long }}"
                                                                    placeholder="libelle" aria-label="Username"
                                                                    aria-describedby="basic-addon1" required>

                                                            </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Délai</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        <input type="number" name="delai"
                                                                            class="form-control border-success"
                                                                            value="{{ $proc->delai }}"
                                                                                required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Est périodique</h5>
                                                                    <div class="input-group mb-3">

                                                                        {{-- <label for="libelle">Libelle</label> --}}

                                                                        {{-- <input type="number" name="delai"
                                                                            class="form-control border-success"
                                                                            value="{{ $proc->delai }}"
                                                                                required> --}}
                                                                        {{-- <input type="checkbox"  name="estperiodique"
                                                                                class="border-success" value="1"> --}}
                                                                        
                                                                        <input type="checkbox" name="estperiodique" 
                                                                            class="required-checkbox checkbox" value="1"
                                                                            {{ $proc->estperiodique == 1 ? 'checked' : '' }}>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Description </h5>

                                                                    <!-- Quill Editor Full -->
                                                                    <p>Description longue</p>

                                                                    <textarea name="description" id=""
                                                                        class="quill-editor-full border-success"
                                                                        style="width: 100%; height:150px;">
                                                                           {{ $proc->description }}
                                                                    </textarea>

                                                                    <!-- End Quill Editor Full -->

                                                                </div>
                                                            </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="submit" class="btn btn-primary">Modifier
                                                                         </button>
                                                                </div>



                                                    </div>
                                                </form>

                                                </div>
                                            </div>
                                        </div><!-- End Basic Modal-->


                                        {{-- modal de show --}}
                                        <div class="modal fade" id="largeModal{{ $proc->uuid }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content" style="height: 500px;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Détail de la Procédure</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="description">Description</label>
                                                                <p>{{ $proc->description }}</p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        {{-- <button type="button"
                                                            class="btn btn-primary">Valider</button> --}}
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
