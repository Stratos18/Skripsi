<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>kalibrasi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>home</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
  <body>
    <!-- navbar-->
   @include('navbarv2')
    <!--conten-->
    <div class="container" style="margin-top: 25px;">
        <div class="container-fluid py-3 text-bg-green rounded-3 mb-3" >
            <h1 class="display-5 fw-bold text-center" style="margin-top: 25px;">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h1>
            <h4 class="text-center" >LABORATORIUM KALIBRASI</h4>
        </div>
        <div class="container-fluid">
          <div class="row border-bottom border-3 mb-3">
            <h2 class="col-9"> Riwayat Unit Under Test (UUT)</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end col-3">
              <a type="button" class="btn btn-primary mb-1" href="{{route('finfo.uut')}}">new</a>
            </div>
           </div>
        <div class="container-fluid card p-3 rounded-3">
           <table class="table text-center"">
            <thead class="table-light">
              <tr>
                <th scope="col">No. Order</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Nama Alat</th>
                <th scope="col">Tipe</th>
                <th scope="col"> action</th>
              </tr>
            </thead>
            @foreach ($listuut as $du)
            <tbody>
              <td > {{$du->no_order}}</td>
              <td> {{$du->pemilik}}</td>
              <td> {{$du->nama_uut}}</td>
              <td> {{$du->tipe}}</td>
              <td> <a  href="{{route('input.baca')}}" class="btn">  
                <i class="bi bi-vector-pen"></i>
                <small>kalibrasi</small>
              </a></td>
            </tbody>
            @endforeach
          </table>

        </div>
      </div>

    
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>