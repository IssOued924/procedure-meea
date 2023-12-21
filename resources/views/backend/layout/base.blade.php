<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tableau de Bord | MEEA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/logo_meea.jpg') }}" rel="icon">
    <link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/sweetalert2.all.min.js') }}"></script>
    <link href="{{ asset('backend/assets/css/sweetalert2.min.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>




    <!-- Bootstrap4 Duallistbox -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <link href="{{ asset('backend/assets/css/custom.css') }}" rel="stylesheet">

    @yield('css')
    @include('sweetalert::alert')

    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" type="text/javascript"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('administration') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/logo_meea.jpg') }}" alt="">
                <span class="d-none d-lg-block"> </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src=" {{ asset('backend/assets/img/user.png') }} " alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-bank"></i>
                                <span class="badge border-success border-1 text-success">
                                    <h6>{{ Auth::user()->agent->service->libelle_long }}</h6>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-bank"></i>
                                @if (isset(Auth::user()->agent->province))

                                <span class="badge border-success border-1 text-primary">
                                    <h6>{{ Auth::user()->agent->province->libelle }}</h6>
                                </span>
                                @else

                                <span class="badge border-warning border-1 text-warning">
                                    <h6>Province inconue</h6>
                                </span>

                                @endif
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                {{-- @if (Auth::user()->agent->role->libelle==="Réception")

                                <span class="text-primary">
                                    <h6>Receptioniste</h6>
                                </span>
                                @else --}}
                                <span class="text-primary">
                                    <h6>{{ Auth::user()->role->libelle }}</h6>
                                </span>

                                {{-- @endif --}}
                            </a>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('users-profile') }}">
                                <i class="bi bi-person"></i>
                                <span>Mon Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center mt-0" href="#">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="text-warning" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        <i class="bi bi-box-arrow-right"></i> {{ __('Se Deconnecter') }}
                                    </x-dropdown-link>
                                </form>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('administration') }}">
                    <i class="bi bi-grid"></i>

                    <span>Tableaau de Bord</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#demandes-nav" data-bs-toggle="collapse"
                    href="{{ route('demandes-list') }}">
                    <i class="bi bi-menu-button-wide"></i><span>Démandes</span><i
                        class="bi bi-chevron-down   ms-auto"></i>
                </a>


                <ul id="demandes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    @if (Auth::user()->agent->service->libelle_court == 'DGPE' || Auth::user()->role->libelle ==
                    'Administration')
                    <li>
                        <a href="{{ route('demandes-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Produit Chimique &nbsp;<span
                                    id="prog_produit_chimique" class="badge bg-warning text-white"> </span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('demandesp008-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Déchets Solide &nbsp;<span id="prog_dechet"
                                    class="badge bg-warning text-white"> </span> </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('demandesp006-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Certificats d'exemptions &nbsp; <span
                                    id="prog_exemption" class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('demandesp007-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Homologation &nbsp;<span id="prog_homologation"
                                    class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>
                    @endif

                    @if (Auth::user()->agent->service->libelle_court == 'DGEF' || Auth::user()->role->libelle ==
                    'Administration')
                    <li>
                        <a href="{{ route('demandesp0012-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure écotourisme &nbsp;<span id="prog_ecotourisme"
                                    class="badge bg-warning text-white"> </span> </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('demandesp003-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Permis Chasse &nbsp;<span id="prog_chasse"
                                    class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('demandesp004-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Détention &nbsp; <span id="prog_detention"
                                    class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('demandesp0011-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Permis Coupe &nbsp;<span id="prog_coupe"
                                    class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('demandesp005-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Permis de circulation&nbsp;<span
                                    id="prog_circulation" class="badge bg-warning text-white"> </span></span>
                        </a>
                    </li>
                    @endif

                    @if (Auth::user()->agent->service->libelle_court == 'DGRE' || Auth::user()->role->libelle ==
                    'Administration')
                    <li>
                        <a href="{{ route('demandesp002-list') }}">
                            <i class="bi bi-circle"></i><span>Procédure Agrement en Eau &nbsp;<span
                                    id="prog_agrement_technique" class="badge bg-warning text-white">
                                </span></span>
                        </a>
                    </li>
                    @endif

                </ul>

            </li><!-- End Components Nav -->


            @if (Auth::user()->role->libelle == 'Administration')
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Utilisateur</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent-list') }}">
                            <i class="bi bi-circle"></i><span>Agents</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('usager-list') }}">
                            <i class="bi bi-circle"></i><span>Usagers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user-list') }}">
                            <i class="bi bi-circle"></i><span>Utilisateurs</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->



            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear"></i><span>Paramètre</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('procedure-list') }}">
                            <i class="bi bi-circle"></i><span>Procedures</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('categorie-list') }}">
                            <i class="bi bi-circle"></i><span>Categorie</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href=" {{ route('structure-list') }}">
                            <i class="bi bi-circle"></i><span>Structure</span>
                        </a>
                    </li>

                    <li>
                        <a href=" {{ route('service-list') }}">
                            <i class="bi bi-circle"></i><span>Service</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('piecejointe-list') }}">
                            <i class="bi bi-circle"></i><span>Pieces Jointes</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('typeUsager-list') }}">
                            <i class="bi bi-circle"></i><span>Type Usager</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('role-list') }}">
                            <i class="bi bi-circle"></i><span>Role</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Piece-Justificative</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href=" {{ route('basejuridique-list') }}">
                            <i class="bi bi-circle"></i><span>Base Juridique</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Tarif</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href=" {{ route('commune-list') }}">
                            <i class="bi bi-circle"></i><span>Commune</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('province-list') }}">
                            <i class="bi bi-circle"></i><span>Province</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('region-list') }}">
                            <i class="bi bi-circle"></i><span>Région</span>
                        </a>
                    </li>


                </ul>
            </li><!-- End Icons Nav -->







            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#plainte-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pencil-square"></i> <span>Plaintes</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="plainte-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('listePlainte', ['procedure'=>'Toutes']) }}">
                            <i class="bi bi-circle"></i><span>Liste des plaintes</span>
                        </a>
                    </li>
                    <!--
          <li>
            <a href="{{ route('usager-list') }}">
              <i class="bi bi-circle"></i><span>Plainte en cours</span>
            </a>
          </li>
          -->

                </ul>
            </li><!-- End Charts Nav -->
            @endif



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('title')

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>MEEA</span></strong> {{ date('Y') }}
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>



    <script>
        function getNombreDemandeByProcedure() {
            $.ajax({
                type: 'GET',
                url: "/administration/statistique/nombreDemandeEncours",
                dataType: 'json',
                cache: false,
                success: function(result) {
                    switch ($.trim(result.status)) {
                        case "success":
                            $('#prog_produit_chimique').text("" + result.nbProchimique);
                            $('#prog_ecotourisme').text("" + result.nbEcotourisme);
                            $('#prog_dechet').text("" + result.nbdechet);
                            $('#prog_detention').text("" + result.nbdetention);
                            $('#prog_coupe').text("" + result.nbcoupe);
                            $('#prog_circulation').text("" + result.nbcirculation);
                            $('#prog_exemption').text("" + result.nbce);
                            $('#prog_chasse').text("" + result.nbpchasse);
                            $('#prog_homologation').text("" + result.nbhomologation);
                            $('#prog_agrement_technique').text("" + result.nbAgrementTechique);

                            break;
                        default:
                            alert("Erreur");
                            break;
                    }
                },
                error: function() {
                    alert("Erreur de chargement des données");
                }
            });
        }
        $(document).ready(function() {
            getNombreDemandeByProcedure();
        });
    </script>


    @yield('script')

</body>

</html>
