<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portail | MEEA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/armoirie.png')}}" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" /> -->
    <link href="{{asset('css/google-font1')}}" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->


    @livewireStyles
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>

<body>
    <!--  -->
    <!-- ======= Top Bar ======= -->
    <x-topbar />

    <!-- ======= Header ======= -->
    <x-header />
    <!-- End Header -->

    <div class="content">
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row no-gutters">
                    <style>
                        .single {
                            background: rgba(0, 99, 207, .08);
                            padding: 10px 25px;
                            border-radius: 5px;
                            margin: 0 25px 32px 0;
                            width: -moz-fit-content;
                            width: fit-content;
                            color: #0063cf !important;
                        }
                    </style>

                    @if($procedure)
                    <div class="col-lg-7 box ">
                        <h5 class="single">
                            {{ $procedure->libelle_long }}
                        </h5>
                        <p style="text-align: justify;text-indent : 10%;">{{ $procedure->description }}</p>
                        <div style=" margin: 18px 0 33px;">

                            <i class="bi bi-clock"
                                style="display: inline-block;
                        width: 24px;
                        height: 24px;
                        fill: none;
                        stroke: currentColor;
                        stroke-width: 2px;
                        stroke-linecap: round;
                        stroke-linejoin: round;"></i>
                            <b>Délai de traitement : 1 Jour</b>


                            <i class="bi bi-tag"
                                style="display: inline-block;
                        width: 24px;
                        height: 24px;
                        fill: none;
                        stroke: currentColor;
                        stroke-width: 2px;
                        stroke-linecap: round;
                        stroke-linejoin: round;"></i>
                            <b>Montant à payer : 1,500 XOF</b><br><br>


                            <i class="bi bi-home"></i>
                            <b style="margin-left:0px">Fourni par</b> <span
                                style="border: 1px solid #0063cf;
                        color: #0063cf;
                        padding: 0 0.5em;
                        border-radius: 5px;">{{ $procedure->service->libelle_court }}</span><br><br>


                        </div>
                        <!-- <h4>$29<span>per month</span></h4> -->

                        <!-- {{-- La partie des descriptions --}} -->
                        <div class="row">

                            <h5>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $procedure->uuid  }}">Voir base juridique</a>
                                <a href="#" class="btn btn-primary"  data-bs-toggle="modal"
                                data-bs-target="#staticEditeBackdrop{{ $procedure->uuid  }}" >Voir Pièces à Fournir</a>
                                <!-- <a href="#">Voir Pieces à fournirrrr</a> -->
                            </h5>

                            <!-- debut Modal pour afficher les details -->
                            <div class="modal fade" id="staticBackdrop{{ $procedure->uuid }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content" style="height: 300px;">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $procedure->libelle_long }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        @foreach ($procedure->baseJuridique as $pb)

                                        <div class="modal-body">
                                            <p>{{$pb->libelle_long }}</p>
                                        </div>
                                        @endforeach
                                        <div class="modal-footer">
                                            <x-secondary-button aria-label="Close" class="ml-4">
                                                {{ __('Fermer') }}
                                            </x-secondary-button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin Modal pour afficher les details -->

                                {{-- Piece  jointe --}}
                            <div class="modal fade" id="staticEditeBackdrop{{ $procedure->uuid }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $procedure->libelle_long }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        @foreach ($procedure->pieceJointe as $ppj)

                                        <div class="modal-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="bi bi-file-earmark-pdf me-1 text-success"> </i>   {{$ppj->libelle }}
                                            </li>
                                        </ul>
                                        </div>
                                        @endforeach
                                        <div class="modal-footer">
                                            <x-secondary-button aria-label="Close" class="ml-4">
                                                {{ __('Fermer') }}
                                            </x-secondary-button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    {{-- La partie de connexion --}}
                    <div class="col-lg-5  box">
                        <h2>Connexion</h2>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label class="col-4" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="col-7 block mt-1 form-control " type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label class="col-4" for="password" :value="__('Password')" />

                                <x-text-input id="password" class="col-7 block mt-1 form-control" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se
                                                                        souvenir de moi') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-dark" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

                                <x-primary-button style="padding: 6px 6px;" class="ml-3">
                                    {{ __('Se Connecter') }}
                                </x-primary-button>
                            </div>
                            <a class="mt-5 underline text-sm text-dark dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="/register">
                                {{ __("S'inscrire") }}
                            </a>
                        </form>


                    </div>
                    @else
                    {{-- La partie de connexion --}}
                    <div class="col-lg-6 offset-lg-3  box">
                        <h2>Connexion</h2>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="row g-3 align-items-center">
                                <x-input-label class="col-4" for="email" :value="__('Email')" />
                                <x-text-input class="col-7" id="email" class="col-7 block mt-1 form-control " type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="row g-3 align-items-center">
                                <x-input-label class="col-4" for="password" :value="__('Password')" />

                                <x-text-input class="col-7" id="password" class="block mt-1 form-control" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se
                                                                        souvenir de moi') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-dark" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

                                <x-primary-button style="padding: 6px 6px;" class="ml-3">
                                    {{ __('Se Connecter') }}
                                </x-primary-button>
                            </div>
                            <a class="mt-5 underline text-sm text-dark dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="/register">
                                {{ __("S'inscrire") }}
                            </a>
                        </form>


                    </div>
                    @endif

                </div>

            </div>
        </section><!-- End Pricing Section -->
    </div>
    <!-- ======= Footer ======= -->
    <x-footer />
    <!-- End Footer -->


    <script>
        $("#filter").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#mycard > div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    @livewireScripts
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

</body>

</html>
