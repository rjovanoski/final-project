<header>
    <div class="container">
        <nav class="sidepanel">
            <div class="logo">
                <a href="{{ url('/') }}">{{ __('Smart Food Ingredients') }}</a>
            </div>
            <div class="menu">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="dropdown-menu">
                <li class="dropdown-item">
                    <a href="{{ route('user.index') }}" class="dropdown-link">
                        {{ auth()->user()->name }}
                    </a>
                </li>                
                <li class="dropdown-item">
                    <a href="{{ route('recipe.index') }}" class="dropdown-link">
                        {{ __('Recipes') }}
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('recipe.create') }}" class="dropdown-link">
                        {{ __('New Recipe') }}
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('user.edit',Auth::id()) }}" class="dropdown-link">
                        {{ __('Settings') }}
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('logout') }}" class="dropdown-link"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} 
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>