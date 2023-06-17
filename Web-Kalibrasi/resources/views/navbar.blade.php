<nav class="navbar navbar-light bg-light fixed-top mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kalibrasi</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="offcanvas offcanvas-end text-bg-light"
        tabindex="-1"
        id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel"
      >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLightkNavbarLabel">
            Kalibrasi Alat Pengukuran Kecepatan Angin
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('profil')}}">Profil</a>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('logout')}}">logout</a>
            </li>
        </div>
      </div>
    </div>
  </nav>