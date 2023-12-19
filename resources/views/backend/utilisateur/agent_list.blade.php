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
                                </p>
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
                                                                <h5 class="card-title">Nom<span class="text-danger">*</span></h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="nom"
                                                                        class="form-control border-success"
                                                                        placeholder="Nom" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="card-title">Prénom<span class="text-danger">*</span></h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="prenom"
                                                                        class="form-control border-success"
                                                                        placeholder="Prénom" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="card-title">Matricule<span class="text-danger">*</span></h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="matricule"
                                                                        class="form-control border-success"
                                                                        placeholder="Matricule" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <h5 class="card-title">Fonction<span class="text-danger">*</span></h5>
                                                                <div class="input-group mb-3">

                                                                    {{-- <label for="libelle">Libelle</label> --}}

                                                                    <input type="text" name="fonction"
                                                                        class="form-control border-success"
                                                                        placeholder="Fonction" aria-label="Username"
                                                                        aria-describedby="basic-addon1" required>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="row">

                                                            <div class="col">
                                                                <h5 class="card-title">Structure<span class="text-danger">*</span></h5>
                                                                <div class="input-group mb-3">
                                                                    {{-- <label for="libelle">Libelle</label> --}}
                                                                    <select name="service_id" id="selectMultiple"
                                                                        class="form-select border-success" id="" required>
                                                                        <option value="">Veuillez
                                                                            choisir Sa
                                                                            Direction
                                                                        </option>
                                                                        @foreach ($services as $serv)
                                                                        <option value="{{ $serv->uuid }}">
                                                                            {{ $serv->libelle_long }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <!-- End Quill Editor Full -->
                                                            </div>

                                                            <div class="col">
                                                                <h5 class="card-title">Province de résidence
                                                                    <span style="color:red">
                                                                        *</span>
                                                                </h5>

                                                                <select name="province_id" id="provinces"
                                                                    class="form-select border-success" required>
                                                                    {{-- <input type="text" placeholder="filtrer ici">
                                                                    --}}
                                                                    <option value="">Veuillez choisir une
                                                                        Province</option>
                                                                    @foreach ( $provinces as $prov)
                                                                    <option value="{{ $prov->uuid }}">{{
                                                                        $prov->libelle }}</option>

                                                                    @endforeach

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="card-title">Commune de résidence
                                                                    <span style="color:red">
                                                                        *</span>
                                                                </h5>

                                                                <select name="commune_id" id="communes"
                                                                    class="form-select border-success" required>
                                                                    {{-- <input type="text" placeholder="filtrer ici">
                                                                    --}}

                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- <input type="submit" value="Valider"
                                                            class="btn btn-primary"> --}}

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Valider</button>

                                                        </div>


                                                </form>

                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->


                                </div>
                            </div>
                            <table id="example1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Matricule</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Fonction</th>
                                        <th scope="col">Service</th>
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
                                        <td>{{ $agent->service->libelle_court }}</td>


                                        <td>
                                            {{-- <button title="Voir Détail" type="button" class="btn btn-primary "
                                                data-bs-toggle="modal" data-bs-target="#largeModal{{ $agent->uuid }}">
                                                <i class="bi bi-eye"></i> </button> --}}

                                            <button title="Editer" type="button" class="btn btn-info "
                                                data-bs-toggle="modal"
                                                data-bs-target="#basicModalEdit{{ $agent->uuid }}"> <i
                                                    class="bi bi-pencil-square"></i> </button>

                                        </td>

                                        {{-- editer modal --}}
                                        <div class="modal fade" id="basicModalEdit{{ $agent->uuid }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 800px">
                                                    <form method="POST"
                                                        action="{{ route('agent-update', $agent->uuid) }}">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Editer l'agent </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5 class="card-title">Nom <span class="text-red">*</span></h5>
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

                                                                <div class="col">
                                                                    <h5 class="card-title">Structure</h5>
                                                                    <div class="input-group mb-3">
                                                                        {{-- <label for="libelle">Libelle</label> --}}
                                                                        <select name="service_id" id="selectMultiple"
                                                                            class="form-select border-success" id=""
                                                                            required>
                                                                            <option value="">Veuillez choisir Sa
                                                                                Direction
                                                                            </option>
                                                                            @foreach ( $services as $serv)
                                                                            <option {{ $agent->service_id == $serv->uuid
                                                                                ? 'selected' : '' }} value="{{
                                                                                $serv->uuid }}">{{
                                                                                $agent->service->libelle_long}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <!-- End Quill Editor Full -->
                                                                </div>

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Province de résidence <span
                                                                            style="color:red">
                                                                            *</span></h5>

                                                                    <select name="province_id" id="provincesEdit"
                                                                        class="form-select border-success" required>
                                                                        {{-- <input type="text"
                                                                            placeholder="filtrer ici"> --}}
                                                                        <option value="">Veuillez choisir une Province
                                                                        </option>
                                                                        @foreach ( $provinces as $prov)
                                                                        <option {{ $agent->province_id == $prov->uuid ?
                                                                            'selected' : '' }} value="{{ $prov->uuid }}"
                                                                            >{{ $prov->libelle }}</option>

                                                                        @endforeach


                                                                    </select>


                                                                </div>



                                                            </div>


                                                            <div class="row">

                                                                <div class="col-6">
                                                                    <h5 class="card-title">Commune de résidence
                                                                        <span style="color:red">
                                                                            *</span>
                                                                    </h5>

                                                                    <select name="commune_id"  required id="communesEdit"
                                                                    class="form-select border-success">
                                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                                    <option class="border-success" value="">Veuillez choisir une ville
                                                                    </option>
                                                                    @foreach ( $communes as $com)
                                                                    <option {{ $agent->commune_id == $com->uuid ? 'selected' : ''}} value="{{ $com->uuid }}">{{ $com->libelle }}</option>
                                                                    @endforeach


                                                                </select>
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

<script>
    $(document).ready(function () {
        $('#provinces').change(function () {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/get-communes/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#communes').empty();
                        $.each(data, function (key, value) {
                            $('#communes').append('<option value="' + value.uuid + '">' + value.libelle + '</option>');
                        });
                    }
                });
            } else {
                $('#communes').empty();
            }
        });
    });


    $(document).ready(function () {
        $('#provincesEdit').change(function () {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/get-communes/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#communesEdit').empty();
                        $.each(data, function (key, value) {
                            $('#communesEdit').append('<option value="' + value.uuid + '">' + value.libelle + '</option>');
                        });
                    }
                });
            } else {
                $('#communesEdit').empty();
            }
        });
    });
</script>

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
