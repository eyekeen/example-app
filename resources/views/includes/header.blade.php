<nav class="navbar navbar-expand-md bg-body-tertiary mb-3">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collaps" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collaps">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ active_link('home') }}" aria-current="page" href="{{ route('home') }}">
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ active_link('blog*') }}" aria-current="page" href="{{ route('blog') }}">
                        {{ __('Blog') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ active_link('register') }}" aria-current="page" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ active_link('login') }}" aria-current="page" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>