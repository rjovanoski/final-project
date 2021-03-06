<header>
    <div class="container">
        <nav class="sidepanel">
            <div class="logo">
                <a href="{{ url('/') }}">{{ config('app.name') }}</a>
            </div>
            <div class="menu">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="dropdown-menu">
                <li class="dropdown-item {{ 'admin' == request()->path() ? 'active-link' : ''}}">
                    <a href="{{ route('admin.index') }}" class="dropdown-link">
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <li class="dropdown-item {{ 'admin/user/recipes' == request()->path() ? 'active-link' : ''}}"">
                    <a href="{{ route('admin.userRecipes') }}" class="dropdown-link">{{ __('Recipes') }}</a>
                </li>
                <li class="dropdown-item {{ 'admin/'.auth()->id().'/edit' == request()->path() ? 'active-link' : ''}}"">
                    <a href="{{ route('admin.edit',auth()->id()) }}" class="dropdown-link">{{ __('Settings') }}</a>
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