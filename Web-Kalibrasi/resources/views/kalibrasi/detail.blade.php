<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail.{{$data->nama_uut}}</title>
  <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
</head>
<body>

<div class="container py-2" style="top: 20px;">
  <a href="{{route('profil')}}" class="btn btn-secondary"><i class="bi bi-arrow-90deg-left "></i> Kembali</a>
  <a href="{{url('/cetaksertif/'.$data->no_order)}}" class="btn btn-secondary"><i class="bi bi-printer-fill"></i>cetak</a>
</div>
  <div class="container card py-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h5>Unit Under Test</h5>
        <h5 class="display-4">{{$data->nama_uut}}</h5>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-2">
        <div class="text-center rounded-3 bg-success" style="height: 70px">
          <h5>No. Order <br>{{$data->no_order}} </h5>
          </div>
      </div>
      <div class="col-6">
        <div class="row">
          <div class="col-6">
            <h6>Pemilik</h6>
            <h6>Merek </h5>
            <h6>Tipe</h5>
            <h6>Tanggal Kalibrasi</h5>
            <h6>Tempat Kalibrasi</h5>
          </div>
          <div  class="col-6">
            <h6>: {{$data->pemilik}}</h6>
            <h6>: {{$data->merek}} </h5>
            <h6>: {{$data->tipe}} </h5>
            <h6>: {{date('d/m/Y', strtotime($data->tgl_test))}}</h6>
            <h6>: {{$data->tempat_test}}</h5>
          </div>
        </div>
        <div class="row">
        
          <div class="col-6">
            <h6>No sertifikat</h6>
          </div>
          <div class="col-6">
            @if($sertif->count() > 0)
               @foreach ($sertif as $item)
            <h6>:{{$item->no_sertifikat}}</h6>
            @endforeach
            @else
                <p>: No sertifikat belum dikeluarkan.</p>
            @endif
          </div>
        
        </div>
    </div>
      <div class="col-4 ms-auto ">
        <div class="row">
          <div class="col-6">
            <h6>Kapasitas</h6>
            <h6>Graduasi</h6>
          </div>
          <div class="col-6">
            <h6>: {{$data->daerah_ukur}} m/s</h6>
            <h6>: {{$data->resolusi_uut}} m/s</h6>
          </div>
        </div>
        <div class="row"><h6 class="border-bottom border-top">Kondisi Ruang</h6></div>
        <div class="row border bg-warning rounded-3">
          <div class="col-6">
            <h6>suhu</h6>
            <h6>kelembaban</h6>
            <h6>tekanan</h6>
          </div>
          <div class="col-6">
            <h6>: {{$data->suhu_ruang}} &deg;C</h5>
            <h6>: {{$data->kelembaban}} %</h5>
            <h6>: {{$data->tekanan}} hPa</h5>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <div class="container">
    <div class="row text-center">
        <h5>Hasil Pembacaan</h5>
    </div>
    <div class="rounded border">
      <div class="table-responsive">
        <table class="table text-center">
          <thead class="table-light">
            <tr>
              <th scope="col">Set Poin</th>
              <th scope="col">Rata-rata standar</th>
              <th scope="col">Rata-rata UUT</th>
              <th scope="col">Max Standar</th>
              <th scope="col">Max UUt</th>
              <th scope="col">Min Standar</th>
              <th scope="col">Min UUT</th>
              <th scope="col">Koreksi</th>
              <th scope="col">Standar Deviasi</th>
            </tr>
          </thead>
          @foreach ($baca as $item)
          <tbody>
            
            <th> {{$item->set_poin}}</th>
            <th> {{$item->meanstd}}</th>
            <th> {{$item->meanuut}}</th>
            <th> {{$item->max_std}}</th>
            <th> {{$item->max_uut}}</th>
            <th> {{$item->min_std}}</th>
            <th> {{$item->min_uut}}</th>
            <th> {{$item->koreksi}}</th>
            <th> {{$item->sd}}</th>
          
          </tbody>
        @endforeach
        </table>  
      </div>
    </div>
  </div>
    <div class="row text-center  mb-2">
      <h5>Perhitungan Ketidakpastian</h5>
    </div>
  <div class="rounded border">
    <div class="table-responsive">
      <table class="table text-center" >
        <thead class="table-light">
         <tr>
            
            <th scope="col">alat standar</th>
            <th scope="col">alat yang dikalibrasi</th>
            <th scope="col">U1</th>
            <th scope="col">U2</th>
            <th scope="col">U3</th>
            <th scope="col">U4</th>
            <th scope="col">U5</th>
            <th scope="col">U6</th>
            <th scope="col">U7</th>
            <th scope="col">Ugab</th>
       
            <th scope="col">U95</th>
          </tr>
        </thead>
        @foreach ($uc as $uc)    
        <tbody>           
      
          <td >{{$uc->meanstd}}</td>
          <td >{{$uc->meanuut}}</td>
          <td >{{$uc->ui}}</td>
          <td >{{$uc->u2}}</td>
          <td >{{$uc->u3}}</td>
          <td >{{$uc->u4}}</td>
          <td >{{$uc->u5}}</td>
          <td >{{$uc->u6}}</td>
          <td >{{$uc->u7}}</td>
          <td >{{$uc->ugab}}</td>
      
          <td >{{$uc->u95}}</td>
         </tbody>
         @endforeach
       </table>
    </div>
  </div>
</div>
</body>
</html>