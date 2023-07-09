<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>alat-stndar</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
  <body>
    <!-- navbar-->
    @include('navbarv2')
    <!--conten-->
    <div class="container" style="margin-top: 20px;">
        <div class="container-fluid py-3 text-bg-green rounded-3 mb-3" >
            <h1 class="display-5 fw-bold text-center" style="margin-top: 25px;">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h1>
            <h4 class="text-center" >LABORATORIUM KALIBRASI</h4>
        </div>
        <div class="container-fluid">
          <div class="row border-bottom border-3 mb-3">
            <h2 class="col-9 "> Daftar Alat Standar</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end col-3">
              <a type="button" class="btn btn-primary mb-1" href="{{route('formalatstd')}}">tambah</a>
            </div>
          </div>
        </div>
        <div class="container-fluid card p-3 rounded-3">
          <table class="table text-center">
           <thead class="table-light">
            <tr>
               <th scope="col">nama alat</th>
               <th scope="col">tipe</th>
               <th scope="col">no sertifikat</th>
               <th scope="col">sertifikat</th>
               <th scope="col">action</th>
             </tr>
           </thead>
           @foreach ($liststd as $tstd)
           <tbody>
            <td > {{$tstd->nama_alatstd}}</td>
            <td> {{$tstd->tipe_std}}</td>
            <td>{{$tstd->no_sertifstd}}</td>
            <td> 
              <a href="{{asset('sertifstd/'.$tstd->sertifstd)}}" target="_blank" rel="noopener noreferrer">lihat</a></td>
           <td>
            <a  href="/alatstd/hapus/{{$tstd->no_sertifstd}}" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">  
              <i class="bi bi-trash-fill"></i>
              <small>hapus</small>
            </a>
            <a  href="/alatstd/edit/{{$tstd->no_sertifstd}}" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">  
              <i class="bi bi-vector-pen"></i>
              <small>edit</small>
            </a>
           </td>
            </tbody>
           @endforeach
          </table>
        </div>
      </div>
    </div>
    @include('footer')
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>