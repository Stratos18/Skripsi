<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11" style="">
      <a class="navbar-brand col-lg-3 me-0" href="#">Laboratorium Kalibrasi</a>
      <ul class="navbar-nav col-lg-6 justify-content-lg-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profil')}}">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pkalibrasi')}}">List UUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('alatstd')}}">List Alat Standar</a>
        </li>
        
      </ul>
      <div class="d-lg-flex col-lg-3 justify-content-lg-end">
        <a class="btn btn-primary" href="{{route('logout')}}" >logout</a>
      </div>
    </div>
  </div>
</nav>