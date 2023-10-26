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
                  <h5 class="card-title">Procédure <span>|écotourisme </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder"></i>
                    </div>
                    <div class="ps-3">
                      <h6> 6</h6>
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
                  <h5 class="card-title">Procédure <span>| Produit Chimique</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $demandeTraite }}</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Chasse</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-circle"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeTraite }}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Procédure <span>| Dechets</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-trash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $demandeRejetter }}</h6>
                      {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

            <div class="col-xxl-3 col-xl-12">

                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Exemption</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder-x"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->
              <div class="col-xxl-3 col-xl-12">

                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Coupe de Bois</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-folder2-open"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Détention</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-server"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Homologation</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-server"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Circulation de bois</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-server"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End Customers Card -->

              <div class="col-xxl-3 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Procédure <span>| Agrement en Eau</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-server"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $demandeRejetter }}</h6>
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


