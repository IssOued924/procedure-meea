<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portail | MEEA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/armoirie.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pool-mtdpce.css" rel="stylesheet">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    {{-- login style --}}
    <link rel="stylesheet" href="./style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    @livewireStyles
</head>

<body>
    <!--  -->
    <!-- ======= Top Bar ======= -->
    <x-topbar />

    <!-- ======= Header ======= -->
    <x-header />
    <!-- End Header -->

    <div class="content responsive">
        {{-- La partie de recherche --}}
        <div class="col-lg-6 offset-lg-3 animate__animated animate__fadeInUp">
            {{-- <form class="form-inline">


            </form><br> --}}
        </div>


        <!-- ======= Hero Section ======= -->

        <!-- End Hero -->

        <!-- ======= Breadcrumbs ======= -->
        <!-- End Breadcrumbs -->

        <!-- ======= sidebar Section ======= -->
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <div class="cont_info_log_sign_up">
            <div class="col_md_login">
                <div class="cont_ba_opcitiy">

                    <h2><i class="bi bi-person"></i></h2>
                    <h5> Personne physique</h5>
                    <p>Inscrivez vous ici si vous etes une personne physique</p>
                    <button class="btn_login" onclick="change_to_login()">Inscription</button>
                </div>
            </div>
            <div class="col_md_sign_up">
                <div class="cont_ba_opcitiy">
                    <h2><i class="bi bi-buildings-fill"></i></h2>
                    <h5>Personne morale</h5>

                    <p>Inscrivez vous ici si vous etes une entreprise &nbsp; <br></p>

                    <button class="btn_sign_up" onclick="change_to_sign_up()">Inscription</button>
                </div>
            </div>
        </div>

        <div class="cont_forms">
            {{-- <div class="cont_img_back_">
                <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                    alt="" />
            </div> --}}
            <div class="cont_form_login">
                <div class="row pt-2">
                    <a class="col-2 pl-8" onclick="hidden_login_and_sign_up()" style="color: black">
                        <i class="text-white material-icons">&#xE5C4;</i>
                    </a>
                    <h5 class="col-10">Personne physique</h5>
                </div>
                <x-guest-layout>
                <i style="color: red;">Veuillez remplir bien les champs</i>
                <br/><br/>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4 text-white" for="name" :value="__('Nom')" />
                            <x-text-input class="col-7" id="name"  type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div><br>

                        <!-- Name -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="prenom" :value="__('Prénom')" />
                            <x-text-input class="col-7" id="lastname"  type="text" name="prenom"
                                :value="old('prenom')" required autofocus autocomplete="prenom" />
                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                        </div><br>

                        <!-- Email Address -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="email" :value="__('Email')" />
                            <x-text-input class="col-7" id="email"  type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div><br>

                        <!-- Telephone number -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="telephone" :value="__('Telephone')" />
                            <x-text-input class="col-7" id="telephone"  type="number"
                                name="telephone" required autocomplete="telephone" />
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div><br>

                        <!-- Password -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="password" :value="__('Password')" />

                            <x-text-input class="col-7" id="password"  type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div><br>

                        <!-- Confirm Password -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input class="col-7" id="password_confirmation"  type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-2">
                            <a class="underline text-sm col  text-white"
                                href="{{ route('login') }}" style="color: black">
                                {{ __('Déjà inscrit?') }}
                            </a>
                            <x-primary-button class="col">
                                {{ __('Valider') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-guest-layout>

                {{-- <button class="btn_login" onclick="change_to_sign_up()">Inscription</button> --}}
            </div>

            <div class="cont_form_sign_up">
                <div class="row pt-2">
                    <a class="col-2 pl-8" onclick="hidden_login_and_sign_up()" style="color: black">
                        <i class="material-icons text-white cursor-pointer ">&#xE5C4;</i>
                    </a>
                    <h5 class="col-10">Personne morale</h5>
                </div>
                <x-guest-layout>
                <i style="color: red;">Veuillez remplir bien les champs</i>
                <br/><br/>
                    <form method="POST" action="{{ route('register-personne-morale') }}">
                        @csrf

                        <!-- Name -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="name" :value="__('Nom de la societé')" />
                            <x-text-input class="col-7" id="name"  type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- IFU -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="ifu" :value="__('Numéro IFU')" />
                            <x-text-input class="col-7" id="ifu"  type="text" name="ifu"
                                :value="old('ifu')" required autofocus autocomplete="ifu" />
                            <x-input-error :messages="$errors->get('ifu')" class="mt-2" />
                        </div>

                        <!-- RCCM -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="rccm" :value="__('Numéro RCCM')" />
                            <x-text-input class="col-7" id="rccm"  type="text" name="rccm"
                                :value="old('rccm')" required autofocus autocomplete="rccm" />
                            <x-input-error :messages="$errors->get('rccm')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="email" :value="__('Email')" />
                            <x-text-input class="col-7" id="email"  type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Telephone number -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="telephone" :value="__('Telephone')" />
                            <x-text-input class="col-7" id="telephone"  type="number"
                                name="telephone" :value="old('telephone')" required autocomplete="telephone" />
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div>

                        <!-- Siège social -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="siege_social" :value="__('Siège social')" />
                            <x-text-input class="col-7" id="siege_social"  type="text" name="siege_social"
                                :value="old('siege_social')" required autofocus autocomplete="siege_social" />
                            <x-input-error :messages="$errors->get('siege_social')" class="mt-2" />
                        </div>

                        <!-- Boite postal -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="boite_postale" :value="__('Boîte postale')" />
                            <x-text-input class="col-7" id="boite_postale"  type="text" name="boite_postale"
                                :value="old('boite_postale')" required autofocus autocomplete="boite_postale" />
                            <x-input-error :messages="$errors->get('boite_postale')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="password" :value="__('Password')" />

                            <x-text-input class="col-7" id="password"  type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="row g-3 align-items-center">
                            <x-input-label class="col-4  text-white" for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input class="col-7" id="password_confirmation"  type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center">
                            <a class="underline text-sm col  text-white"
                                href="{{ route('login') }}" style="color: black">
                                {{ __('Déjà inscrit?') }}
                            </a>
                            <x-primary-button class="col">
                                {{ __('Valider') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-guest-layout>

                <!-- <button class="btn_sign_up" onclick="change_to_login()">Inscription</button> -->

            </div>

        </div>
        <!-- End Contact Section -->

            </main>
            
        </div>


        <!-- ======= Footer ======= -->
        <x-footer />
        <!-- End Footer -->

        {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a> --}}

                <script src="./script.js"></script>

</body>

</html>
