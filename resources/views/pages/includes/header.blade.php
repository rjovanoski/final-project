<header>
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <a href="{{ url('/') }}">{{ __('Smart Food Ingredients') }}</a>
            </div>
            <div class="menu" id="menu">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-list" id="navId">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ '/' == request()->path() ? 'active-link' : ''}}"">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown-recipes">
                        <a class="dropdown-btn">{{ __('Recipes') }}</a>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('recipes') }}" class="dropdown-link {{ 'recipes' == request()->path() ? 'active-link' : ''}}">{{ __('All Recipes') }}</a>
                        <a href="{{ route('recipes.breakfast') }}" class="dropdown-link {{ 'recipes/breakfast' == request()->path() ? 'active-link' : ''}}">{{ __('Breakfast') }}</a>
                        <a href="{{ route('recipes.bread') }}" class="dropdown-link {{ 'recipes/bread' == request()->path() ? 'active-link' : ''}}">{{ __('Bread') }}</a>
                        <a href="{{ route('recipes.burger') }}" class="dropdown-link {{ 'recipes/burger' == request()->path() ? 'active-link' : ''}}">{{ __('Burger') }}</a>
                        <a href="{{ route('recipes.meat') }}" class="dropdown-link {{ 'recipes/meat' == request()->path() ? 'active-link' : ''}}">{{ __('Meat') }}</a>
                        <a href="{{ route('recipes.pasta') }}" class="dropdown-link {{ 'recipes/pasta' == request()->path() ? 'active-link' : ''}}">{{ __('Pasta') }}</a>
                        <a href="{{ route('recipes.pizza') }}" class="dropdown-link {{ 'recipes/pizza' == request()->path() ? 'active-link' : ''}}">{{ __('Pizza') }}</a>
                        <a href="{{ route('recipes.soup') }}" class="dropdown-link {{ 'recipes/soup' == request()->path() ? 'active-link' : ''}}">{{ __('Soup') }}</a>
                        <a href="{{ route('recipes.vegan') }}" class="dropdown-link {{ 'recipes/vegan' == request()->path() ? 'active-link' : ''}}">{{ __('Vegan') }}</a>
                        <a href="{{ route('recipes.cake') }}" class="dropdown-link {{ 'recipes/cake' == request()->path() ? 'active-link' : ''}}">{{ __('Cake') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ 'about' == request()->path() ? 'active-link' : ''}}">{{ __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ 'contact' == request()->path() ? 'active-link' : ''}}">{{ __('Contact') }}</a>
                </li>
                @guest
                <li class="nav-item">
                    <div class="dropdown-user">
                        <i class="fas fa-user"></i>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="user-links">
                        <a href="{{ route('login') }}" class="dropdown-link">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="dropdown-link">{{ __('Register') }}</a>
                        @endif
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <div class="dropdown-user">
                        <a class="dropdown-btn">{{ auth()->user()->name }}</a>
                        <i class="fas fa-caret-down"></i>
                    </div>

                    <div class="user-links">
                        @if(auth()->user()->role == 'admin')
                            <a href="{{ route('admin.index') }}" class="dropdown-link">{{ __('Admin') }}</a>
                            <a href="{{ route('admin.userRecipes') }}" class="dropdown-link">{{ __('Recipes') }}</a>
                        @else
                            <a href="{{ route('user.index') }}" class="dropdown-link">{{ __('Profile') }}</a>
                            <a href="{{ route('recipe.index') }}" class="dropdown-link">{{ __('My Recipes') }}</a>
                            <a href="{{ route('recipe.create') }}" class="dropdown-link">{{ __('New Recipe') }}</a>
                        @endif
                            <a class="dropdown-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>