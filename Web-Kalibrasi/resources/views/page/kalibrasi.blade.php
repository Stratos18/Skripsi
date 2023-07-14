<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>kalibrasi</title>
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
              <td> <a  href="/pkalibrasi/inputbaca/{{$du->no_order}}}"  class="btn btn-primary" title="kalibrasi">  
                <i class="bi bi-calculator-fill text-light"></i></a>
              </a>
              <a  data-bs-toggle="modal" data-bs-target="#detailuut{{$du->no_order}}" class="btn bg-success" title="detail">  
                <i class="bi bi-eye-fill text-light"></i></a>
              <a  href="/pkalibrasi/hapus/{{$du->no_order}}" class="btn btn-danger" title="kalibrasi">  
                <i class="bi bi-trash-fill text-light"></i></a>
            </td>
            
              
            </tbody>
            @endforeach
          </table>
          @foreach ($listuut as $du)
            <!-- MODAL DETAIL UUT-->
            <div class="modal fade" id="detailuut{{$du->no_order}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Informasi Alat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row ">
                        <!--form sebelah kiri-->
                        <div class="col-md-6">
                          <div class="row mb-1">
                            <div class="col-4">
                              <p>Nama UUT</p>
                              <p>Merek</p>
                              <p>Tipe</p>
                              <p>No Seri</p>
                              <p>Tanggal Test</p>
                              <p>Tempat Test</p>
                              <p>Daerah Ukur</p>
                              <p>Resolusi</p>
                            </div>
                            <div class="col-8">
                              <p>: {{$du->nama_uut}}</p>
                              <p>: {{$du->merek}}</p>
                              <p>: {{$du->tipe}}</p>
                              <p>: {{$du->no_seri}}</p>
                              <p>: {{date('d/m/Y', strtotime($du->tgl_test))}}</p>
                              <p>: {{$du->tempat_test}}</p>
                              <p>: {{$du->daerah_ukur}}</p>
                              <p>: {{$du->resolusi_uut}}</p>
                            </div>
                          </div>
                        </div>
            
                        <!--form sebelah kanan-->
                        <div class="col-6">
                          <div class="row border-3 border-bottom">Kodisi Ruangan</div>
                          <div class="row">
                            <div class="col-4">
                              <p>Suhu</p>
                              <p>Kelembaban</p>
                              <p>Tekanan</p>
                            </div>
                            <div class="col-8">
                              <p>: {{$du->suhu_ruang}} &degC</p>
                              <p>: {{$du->kelembaban}} %</p>
                              <p>: {{$du->tekanan}} hPa</p>
                            </div>
                          </div>
                          <div class="row border-3 border-bottom">Informasi Pemilik</div>
                          <div class="row">
                            <div class="col-4">
                              <p>Pemilik</p>
                              <p>Alamat</p>
                            </div>
                            <div class="col-8">
                              <p>: {{$du->pemilik}}</p>
                              <p>: {{$du->alamat}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
              </div>
            </div>
          </div>
            <!--  end modal-->
            @endforeach
        </div>
      </div>

    
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>