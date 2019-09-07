<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                {{ config('app.name', 'Pasca') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
              {{-- <li><a href="/dashboard">Dashboard</a></li> --}}
              <li {{ Request::is('dashboard') ? 'class=active' : null }}>{!! Html::link(url('/dashboard'), 'Dashboard') !!}</li>
              <li {{ Request::is('posts') ? 'class=active' : null }}>{!! Html::link(url('/posts'), 'Berita') !!}</li>
              <li {{ Request::is('carousel') ? 'class=active' : null }}>{!! Html::link(url('/carousel'), 'Slider') !!}</li>
              <li {{ Request::is('agenda') ? 'class=active' : null }}>{!! Html::link(url('/agenda'), 'Agenda') !!}</li>
              <li {{ Request::is('calendar') ? 'class=active' : null }}>{!! Html::link(url('/calendar'), 'Kalender') !!}</li>
              <li {{ Request::is('download') ? 'class=active' : null }}>{!! Html::link(url('/download'), 'Pusat Download') !!}</li>
              <li {{ Request::is('profile') ? 'class=active' : null }}>{!! Html::link(url('/profile'), 'Profil') !!}</li>
              <li {{ Request::is('gallery') ? 'class=active' : null }}>{!! Html::link(url('/gallery'), 'Galeri') !!}</li>
            </ul>           

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="/" target="_blank">Lihat Website</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>