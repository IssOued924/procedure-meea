 @extends('backend.layout.base')
    @section('title')
    <div class="pagetitle">
      <h1>Paramètres</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Regions</a></li>
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

                        <div class="col">
                            <h5 class="card-title">Liste des   <span>| Régions</span></h5>
                        </div>
                  <div class="col-3">
                    {{-- <input type="submit" value="Create new Porject"
                        class="btn btn-success float-right bi bi-plus"> --}}
                    <button style="float: right " data-bs-toggle="modal" data-bs-target="#createModal" type="button" class="btn btn-success mt-5"><i
                            class="bi bi-plus"></i></button>

                            {{-- Modal de creation --}}
                        <div class="modal fade" id="createModal" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content"  >
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une Région</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <form  method="POST" action="{{ route('region-store') }}" >
                                                    @csrf

                                                    <div class="input-group mb-3">
                                                        {{-- <label for="libelle">Libelle</label> --}}
                                                        <span class="input-group-text" id="basic-addon1">@</span>
                                                        <input type="text" name="libelle" class="form-control" placeholder="libelle" aria-label="Username" aria-describedby="basic-addon1" required>
                                                        <input type="submit" value="Valider" class="btn btn-primary">
                                                    </div>

                                                </form>

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

                </div>
                        </div>

                               <!-- Table with stripped rows -->
              <table id="example1" class="table datatable table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>

                    <th scope="col">Libelle</th>

                    {{-- <th scope="col">Commune</th> --}}
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($regions as $reg)

                    <tr>
                        <th scope="row">{{ $i++ }}</th>

                        <td>{{ $reg->libelle}}</td>

                        <td>


                            <button title="Editer" type="button" class="btn btn-info "
                                data-bs-toggle=" "> <i class="bi bi-pencil-square"></i> </button>

                                <a href="{{ route('supprimer', ['uuid' => $reg->uuid]) }}" title="Supprimer"  type="button" class="btn btn-danger "
                                > <i
                                    class="bi bi-x"></i> </a>

                        </td>
                        {{-- modal de suppression --}}
                        <div class="modal fade" id="smallModal" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Suppression</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert">Voulez Vous Vraiement Supprimer cette Region?</div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                                  <button type="button" class="btn btn-danger">OUI</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Small Modal-->


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


