 @extends('backend.layout.base')
    @section('title')
    <div class="pagetitle">
      <h1>Utilisateurs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Usagers</a></a></li>
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
                  <h5 class="card-title"><span>Liste des Usagers</span></h5>

                               <!-- Table with stripped rows -->
              <table id="example1" class="table datatable table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">nom_entreprise</th>


                    {{-- <th scope="col">Commune</th> --}}
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($usagers as $usager)

                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td> {{ $usager->nom }}</td>
                        <td> {{ $usager->prenom }}</td>
                        <td>{{ $usager->telephone}}</td>
                        <td>{{ $usager->nom_entreprise}}</td>

                      <td>


                    <a  type="button" title="Valider" class="btn btn-success"><i
                            class="bi bi-check-circle"></i> </a>

                    <button type="button" title="Supprimer" class="btn btn-danger"><i
                            class="bi bi-x-circle"></i></button>
                      </td>
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


