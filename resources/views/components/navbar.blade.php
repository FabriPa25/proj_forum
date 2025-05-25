<nav class="navbar navbar-expand-lg nav">
  <div class="container-fluid">
    <img class="logo2" src="{{asset('media/logo2.png')}}" alt="">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item me-5">
          <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
        </li>
        
        <li class="nav-item me-5">
          <a class="nav-link" href="{{route('forum')}}">Forum</a>
        </li>
       
        <li class="nav-item me-5">
          <a class="nav-link" href="{{route('chat')}}">Chat</a>
        </li>
       
        @guest
        <li class="nav-item me-5">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>    
        @endguest  
        
        @auth    
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Benvento: {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profilo')}}">Crea una nuova discussione</a></li>
            <li><a class="dropdown-item" href="{{route('control_panel')}}">Pannello di controllo</a></li>
                    <!-- pulsante logout -->
              <li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
                      <!-- fine pulsante logout -->
            </li>
          </ul>
        </li>
        @endauth
       
      </ul>
    </div>
  </div>
</nav>