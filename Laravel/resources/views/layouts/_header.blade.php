<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home_page') }}" class="navbar-brand">App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
              <li class="nav-item"><a href="#" class="nav-link">User List</a></li>
              <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDopdown">
                  <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">Personal Center</a>
                  <a href="{{ route('users.edit', Auth::user()) }}" class="dropdown-item">Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item" id="logout">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                    </form>
                  </a>
                </div>
              </li>
            @else
              <li class="nav-tiem"><a href="{{ route('faq') }}" class="nav-link">FAQ</a></li>
              <li class="nav-tiem"><a href="{{ route('login') }}" class="nav-link">LOG IN</a></li>
            @endif
        </ul>
    </div>
</nav>
