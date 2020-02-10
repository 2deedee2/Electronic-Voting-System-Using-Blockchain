<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Electronic Voting System Using Blockchain</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a href="#" class="nav-link">User List</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">個人中心</a>
                        <a href="#" class="dropdown-item">編輯資料</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" id="logout" class="dropdown-item">
                            <form action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                            </form>
                        </a>
                    </div>
                </li>
            @else
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
      </div>
</nav>
