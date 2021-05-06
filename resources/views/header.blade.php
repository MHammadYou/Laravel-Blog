<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand custom-container" href="/">LARAVEL BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">

                @auth
                    @if ( Auth::check() )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.create') }}">{{ __('CREATE') }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endauth

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('SIGNUP') }}</a>
                </li>
                @endguest
{{--                {% endif %}--}}
            </ul>
        </div>
    </div>
</nav>
