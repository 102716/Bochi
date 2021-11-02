<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand mx-auto d-lg-none" href="index.html">
            Medic Care
            <strong class="d-block">Health Specialist</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services') }}">Our Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/booking') }}">Appointments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/disease') }}">Disease and Symptoms</a>
     
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            <li>

              @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                      @auth
                          <a href="{{ url('/dashboards') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                      @else
                        <li> <a href="{{ route('login') }}" class="nav-link">Log in</a> </li>

                          @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}" class="nav-link">Register</a> </li>
                          @endif
                      @endauth
                  </div>
              @endif

            </li>
            </ul>
        </div>

    </div>
</nav>
