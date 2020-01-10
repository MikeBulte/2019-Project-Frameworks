<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('storage/img/carcassonne-main-logo.png') }}"
             width="220" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="{{ (request()->segment(1) == '') ? 'active' : '' }} nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="{{ (request()->segment(1) == 'about') ? 'active' : '' }} nav-link" href="{{ url('about') }}">Over het NK</a>
            </li>
            <li class="nav-item">
                <a class="{{ (request()->segment(1) == 'faq') ? 'active' : '' }} nav-link" href="{{ url('faq') }}">Faq</a>
            </li>
            <li class="nav-item">
                <a class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }} nav-link" href="{{ url('contact') }}">Contact</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item mr-3">
                    <button class="prim-btn">
                        <a class="" href="{{ route('register') }}">Inschrijven</a>
                    </button>
                </li>
                <li>
                    <button class="scnd-btn">
                        <a class="" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                    </button>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('usersdashboard.index') }}">Profiel</a>
                        @level(3)
                        <a class="dropdown-item" href="{{ route('dashboard.index') }}">Tournament Dashboard</a>
                        @endlevel
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Uitloggen') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
