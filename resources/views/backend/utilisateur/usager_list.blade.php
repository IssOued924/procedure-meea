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
              <table class="table datatable table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Profession</th>
                    <th scope="col">domicile</th>
                    <th scope="col">telephone</th>
                    <th scope="col">Email</th>
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
                        <td> {{ $usager->pays }}</td>
                        <td> {{ $usager->profession }}</td>
                        <td>{{ $usager->domicile}}</td>
                        <td>{{ $usager->telephone}}</td>
                        <td>{{ $usager->email}}</td>
                        <td>{{ $usager->nom_entreprise}}</td>

                        <td><button class="btn btn-primary "> <i class="btn  bi bi-eye"></i> </button></td>
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


