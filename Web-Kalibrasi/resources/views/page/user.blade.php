<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>user-profil</title>
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
            <div class="d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-4 p-4">
                            <img class="img-fluid mx-auto d-block " width="200" height="200" src="{{asset('frontend/asset/office.png')}}" alt="profilimage"></img>
                        </div>
                        <div class="col-md-8">
                            @foreach ($user as $us)
                            <div class="card-body ">
                                <h3 class="fw-bold"><span>{{$us->kantor}}</span> </h3>
                                <p class="-5"><span>{{$us->alamat}}</span></p>
                                    <div class="d-grid justify-content-md-end">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$us->id}}" class="btn btn-sm btn-primary">edit</a>
                                    </div>
                                    @foreach ($user as $item)
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">update</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form action="{{url('/update/'.$item->id)}}" method="post">
                                              
                                              @csrf
                                                  <div class="mb-3">
                                                    <label for="nama"class="form-label">kantor</label>
                                                    <input class="form-control" name="kantor" value="{{$item->kantor}}">
                                                      @error('name')
                                                          <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                                      @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="nip" class="form-label"  >alamat</label>
                                                    <input  class="form-control" name="alamat" value="{{$item->alamat}}">
                                                    @error('alamat')
                                                          <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                                  @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="nip" class="form-label"  >Kepala Pusat INSKALREK</label>
                                                    <input  class="form-control" name="pjb_tinggi" value="{{$item->pjb_tinggi}}">
                                                    @error('pjb_tinggi')
                                                          <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                                  @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="nip" class="form-label"  >NIP</label>
                                                    <input  class="form-control" name="nip" value="{{$item->nip}}">
                                                    @error('nip')
                                                          <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                                  @enderror
                                                  </div>
                                                 
                                                  
                                                  <button type="submit" class="btn btn-primary">update</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center border-bottom border-3"> Riwayat Kalibrasi</h2>
            <div class="container">

              
            
            <div class="container">
                <table class="table text-center"">
                 <thead class="table-light">
                   <tr>
                     <th scope="col">No. Order</th>
                     <th scope="col">Pemilik</th>
                     <th scope="col">Nama Alat</th>
                     <th scope="col">Tanggal Kalibrasi</th>
                     <th scope="col">action</th>
                     

                   </tr>
                 </thead>
                @foreach ($data as $item)
                 <tbody>
                   <td > {{$item->no_order}}</td>
                   <td> {{$item->pemilik}}</td>
                   <td> {{$item->nama_uut}}</td>
                   <td> {{$item->tgl_test}}</td>
                   <td style="text-align:center" width="200px"> 
                    <a href="#" type="button" class="btn btn-primary "title="keluarkan seritifikat" data-bs-toggle="modal" data-bs-target="#sertif{{$item->no_order}}">
                      <i class="bi bi-archive"></i></a>
                    <a href="{{url('/detail/'.$item->no_order)}}" type="button" class="btn btn-success "title="detail">
                      <i class="bi bi-eye-fill text-light"></i></a>
                    <a href="{{url('/cetaksertif/'.$item->no_order)}}" type="button" class="btn btn-warning "title="cetak">
                      <i class="bi bi-printer-fill text-light'"></i></a>
                    </td>
                 </tbody>
                @endforeach
               </table>
               <!-- Modal -->
               @foreach ($data as $sertif)
                <div class="modal fade" id="sertif{{$sertif->no_order}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('sertif')}}" method="post">                   
                        @csrf
                            <div class="mb-3">
                              <label for="nama"class="form-label">no order</label>
                              <input class="form-control" name="no_order" value="{{$sertif->no_order}}">
                              @error('no_order')
                              <small class="text-danger mt-2 text-sm">{{$message}}</small>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="nip" class="form-label" >no sertifikat</label>
                              <input  class="form-control" name="no_sertifikat" >
                              @error('no_sertifikat')
                              <small class="text-danger mt-2 text-sm">{{$message}}</small>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">simpan</button>
                        
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                 @endforeach
              
               {{$data->links()}}
                    
        </div>
    </div>
    
    
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>