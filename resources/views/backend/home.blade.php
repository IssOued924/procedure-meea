 @extends('backend.layout.base')
    @section('title')
    <div class="pagetitle">
      <h1>Tableau de bord</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active">Tableau de Bord</li>
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

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">



                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p0012_s', 'procedureName' => 'Ecotourisme']) }}">Procédure</a><span>|écotourisme </span></h5>

                  <div class="d-flex align-items-center revenue-card">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$nombreEcotourisme}}</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p001_s','procedureName' => 'Produit Chimique']) }}">Procédure</a> <span>| Produit Chimique</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $nombreProduitChimique }}</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p003_s', 'procedureName' => 'Permis Chasse']) }}">Procédure</a> <span>|Permis de  Chasse</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreChasse }}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">

              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p008_s', 'procedureName' => 'Gestion de Dechets']) }}">Procédure</a> <span>| Dechets</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $nombreDechet }}</h6>
                      {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

            <div class="col-xxl-3 col-xl-12">

                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p006_s', 'procedureName' => 'Exemption']) }}">Procédure</a> <span>| Exemption</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreExemption }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->
              <div class="col-xxl-3 col-xl-12">

                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p0011_s', 'procedureName' => 'Coupe du bois']) }}">Procédure</a> <span>| Coupe de Bois</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreCoupeBois }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p004_s', 'procedureName' => 'Detention animal sauvage']) }}">Procédure</a> <span>| Détention</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreDetention }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p007_s', 'procedureName' => 'Homologation sachet plastique']) }}">Procédure</a> <span>| Homologation</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreHomologation }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p005_s', 'procedureName' => 'Circulation de bois']) }}">Procédure</a> <span>| Circulation de bois</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreCirculationBois }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('procedure-dashboard',['procedure' => 'demande_p002_s', 'procedureName' => 'Agrement en Eau']) }}">Procédure</a> <span>| Agrement en Eau</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $nombreEau }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->




          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
    @endsection

  @section('script')

  @endsection


