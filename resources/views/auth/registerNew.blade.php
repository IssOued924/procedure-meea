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

                    {{-- La partie de connexion --}}
                    <div class="col-lg-5 offset-lg-3  box" >
                        <h2>Inscription</h2>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if ($errors->has('active'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('active') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="col-6">
                                    <label class="nom_societe fw-bold">Personne Physique</label>
                                    <input type="radio" class="border-success" name="pp"
                                        value="PP" />
                                </div>
                                <div class="col-6">
                                    <label class="siege_social fw-bold">Personne Morale</label>
                                    <input type="radio" name="pm"
                                        value="PM" />
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-error :messages="$errors->get('email')" style="margin-left:15%;" class="mt-2 text-danger" />
                                <x-input-label class="col-4" for="email" :value="__('Nom')" />
                                <x-text-input class="col-7" id="email"     value="{{ old('email') ?? '' }}" class="col-7 block mt-1 form-control" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-input-error :messages="$errors->get('email')" style="margin-left:15%;" class="mt-2 text-danger" />
                                <x-input-label class="col-4" for="email" :value="__('Prénom')" />
                                <x-text-input class="col-7" id="email"     value="{{ old('email') ?? '' }}" class="col-7 block mt-1 form-control" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-input-error :messages="$errors->get('email')" style="margin-left:15%;" class="mt-2 text-danger" />
                                <x-input-label class="col-4" for="email" :value="__('Téléphone')" />
                                <x-text-input class="col-7" id="email"     value="{{ old('email') ?? '' }}" class="col-7 block mt-1 form-control" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-input-error :messages="$errors->get('email')" style="margin-left:15%;" class="mt-2 text-danger" />
                                <x-input-label class="col-4" for="email" :value="__('Email')" />
                                <x-text-input class="col-7" id="email"     value="{{ old('email') ?? '' }}" class="col-7 block mt-1 form-control" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="off" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label class="col-4" for="password" :value="__('Mot de Passe:')" />
                                @if (Route::has('password.request'))
                                    <a style="float: right" class="underline text-dark" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

                                <x-password-input id="password" class="col-7" id="password"  class="block mt-1 form-control" type="password"
                                    name="password" required autocomplete="current-password" />                                    

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label class="col-4" for="password" :value="__('Confirmation de Mot de passe:')" />
                                @if (Route::has('password.request'))
                                    <a style="float: right" class="underline text-dark" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

                                <x-password-input id="password" class="col-7" id="password"  class="block mt-1 form-control" type="password"
                                    name="password" required autocomplete="current-password" />                                    

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            {{-- <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se
                                                                        souvenir de moi') }}</span>
                                </label>
                            </div> --}}

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-primary"> {{ __('Se connecter') }}</button>
                                <a class="mt-5 underline fw-bold text-primary dark:hover:text-gray-100   dark:focus:ring-offset-gray-800"
                                    href="/register">
                                    {{ __("S'inscrire") }}
                                </a>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->
    </div>
    {{-- <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Connexion</h5>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="row g-3">
                        @csrf

                      <div class="col-12">
                        <label for="youremail" class="form-label">Email</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="email" class="form-control" id="youremail" required>
                          <div class="invalid-feedback">Entrez votre email, SVP.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Entrez votre mot de passe, SVP</div>
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Se Connecter</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0"><a href="/register">S'inscrire</a></p>
                      </div>
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>

        </section>

    </div> --}}
    <!-- ======= Footer ======= -->
    <x-footer />
    <!-- End Footer -->

    <script>
        const togglePassword =
              document.querySelector('#togglePassword');
 
        const password = 
              document.querySelector('#password');
 
        togglePassword.
        addEventListener('click', function (e) {
 
            // Toggle the type attribute 
            const type = password.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            eye = '{{ URL::asset('img/eye.png') }}';
            eyeslash = '{{ URL::asset('img/eyeslash.png') }}';
 
            // Toggle the eye slash icon 
            if (togglePassword.src.match(eyeslash)) {
                togglePassword.src =eye;
            } else {
                togglePassword.src =eyeslash;
            }
        }); 
    </script>


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

<script>
    document.getElementById('element_id').addEventListener('focusout',function(e){
        if (this.style.display === "none") {
        } else {
        }
    });
</script>
</body>

</html>
