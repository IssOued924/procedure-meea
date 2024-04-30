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
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">

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

                <div class="col-lg-5 offset-lg-3  box" >
                    <h2>Reinistalisation de mot de passe</h2>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    @if ($errors->has('active'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('active') }}
                        </div>
                    @endif


    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer ? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons un autre avec plaisir..') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse électronique que vous avez fournie lors de votre inscription..') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Renvoyer l\'e-mail de vérification') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Déconnexion') }}
            </button>
        </form>
    </div>
           
</div>

</div>
</section><!-- End Pricing Section -->
</div>


<!-- ======= Footer ======= -->
<x-footer />
<!-- End Footer -->
