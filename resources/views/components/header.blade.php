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
                <li><a class="active" href="/">Accueil</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="{{ route('login') }}">Compte</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="{{ route('plainte.form') }}" title="Déposer une plainte">Plainte</a></li>
                @else
                <li><a class="active" href="/">Accueil</a></li>
                <li><a href="{{ route('demandes-lists') }}">Mes demandes</a></li>

                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li>

                <li class="dropdown">
                    <a><span>
                            <div>{{ Auth::user()->usager->prenom.'  '.Auth::user()->usager->nom }}</div>
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
</header>
