<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="container  d-flex float-start logo">

            <img src="{{ asset('img/logo_meea.jpg') }}" width="50px" height="70px" />
            <h1>
                <a href="/">Portail des demandes des services en ligne du MEEA</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @guest
                <li><a class="{{ request()->is('/') ? 'active' : ''}}"  href="/">Accueil</a></li>
                {{-- <li><a href="#">FAQ</a></li> --}}
                <li><a class="{{ request()->is('plainte') ? 'active' : ''}}" href="{{ route('plainte.form') }}" title="Déposer une plainte">Déposer une plainte</a></li>

                <li><a class="{{ request()->is('contact') ? 'active' : ''}}" href="contact">Contact</a></li>
                <li><a class="{{ request()->is('faq') ? 'active' : ''}}" href="faq">FAQ</a></li>
                <li><a class="{{ request()->is('login') ? 'active' : ''}}" href="{{ route('login') }}">Compte</a></li>

                @else
                <li><a class="{{ request()->is('/') ? 'active' : ''}}" href="/">Accueil</a></li>
                {{-- <li><a href="{{ route('plainte.form') }}" title="Déposer une plainte">Plainte</a></li> --}}

                <li><a class="{{ request()->is('demandes-lists') ? 'active' : ''}}" href="{{ route('demandes-lists') }}">Mes demandes</a></li>
                <li><a class="{{ request()->is('plainte') ? 'active' : ''}}" href="{{ route('plainte.form') }}" title="Déposer une plainte">Déposer une plainte</a></li>

                <li><a class="{{ request()->is('contact') ? 'active' : ''}}" href="contact">Contact</a></li>
                <li><a class="{{ request()->is('faq') ? 'active' : ''}}" href="faq">FAQ</a></li>

                {{-- <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li> --}}

                <li class="dropdown">
                   <a>
                   <i class="bi bi-person"></i><span>
                        @if (isset(Auth::user()->agent))
                        <div>{{ Auth::user()->name }}</div>
                        @elseif (isset(Auth::user()->usager))
                            <div>{{ Auth::user()->usager->prenom.' '.Auth::user()->usager->nom }}</div>
                        @endif
                        </span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link></li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Se Déconnecter') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
    {{-- <script>
        $('ul li a').on('click', function() {
        $('ul li').removeClass('active'); // Supprimer la classe active de tous les éléments du menu
        $(this).parent('li').addClass('active'); // Ajouter la classe active à l'élément du menu actuel
    });
    </script> --}}
</header>

