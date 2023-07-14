<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>infouut</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"/>
</head>
  <body>
    <!-- navbar-->
@include('navbarv2')
    <!--end navbar-->
    <!--conten-->
    @if(session('success'))
    <div class="alert alert-success">
       {{ session('success') }}
   </div>
    @endif
    <div class="container py-3">
        <div class="container-fluid text-center text-bg-green mb-3 rounded-3" style="min-height: 150px; ">
            <h1 class="display-2 py-5 fw-bold align-middle">LABORATORIUM KALIBRASI</h1>
        </div>
        <div class="container-fluid">
            <form  action="{{ route('input.uut')}}" method="POST">
                @csrf
            <h2 class="display-4 mb-2 text-center">Informasi Alat</h2>
            <div class="row justify-content-center">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Order</label>
                <div class="col-sm-3">
                    <input type="noOrder" class="form-control form-control-sm" id="no_order" name="no_order" value="{{old('no_order')}}">               
                    @error('no_order')
                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <!--form sebelah kiri-->
                <div class="col-md-6">
                    <h3 class="mb-2 border-bottom border-3 border-color">Informasi Alat</h2>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama UUT</label>
                            <div class="col-sm-9">
                                <input type="namauut" class="form-control form-control-sm" name="nama_uut" value="{{old('nama_uut')}}">
                            @error('nama_uut')
                                <div class="text-danger mt-2 text-sm">{{$message}}</div>
                            @enderror
                        </div>
                            </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Merek</label>
                            <div class="col-sm-9">
                                <input type="merek" class="form-control form-control-sm" name="merek" value="{{old('merek')}}">
                                @error('merek')
                                <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tipe</label>
                            <div class="col-sm-9">
                                <input type="tipe" class="form-control form-control-sm" name="tipe" value="{{old('tipe')}}">
                                @error('tipe')
                                <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">No Seri</label>
                            <div class="col-sm-9">
                                <input type="NoSeri" class="form-control form-control-sm" name="no_seri"value="{{old('no_seri')}}">
                                @error('no_seri')
                                <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">tgl.test</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control form-control-sm" name="tgl_test" value="{{old('tgl_test')}}">
                                @error('tgl_test')
                                <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">tempat test</label>
                            <div class="col-sm-9">
                                <input type="res" class="form-control form-control-sm" name="tempat_test" value="{{old('tempat_test')}}">
                                @error('resolusi_uut')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                           
                    
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">resolusi</label>
                            <div class="col-sm-8">
                                <input type="res" class="form-control form-control-sm" name="resolusi_uut"  placeholder="0.00" value="{{old('resolusi_uut')}}">
                                @error('resolusi_uut')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                                <span class="form-text">
                                   m/s
                                  </span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">daerah ukur</label>
                            <div class="col-sm-8">
                                <input type="res" class="form-control form-control-sm" name="daerah_ukur"  placeholder="1 - 100" value="{{old('daerah_ukur')}}">
                                @error('daerah_ukur')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                                <span class="form-text">
                                   m/s
                                  </span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">alat standar</label>
                            <div class="col-sm-8">
                                <select id="no_sertifstd" name="no_sertifstd" class="form-select text-center" >
                                    <option selected>pilih-alat-standar</option>
                                    @foreach ($alatstd as $option)
                                        <option value="{{$option->no_sertifstd}}">{{ $option->nama_alatstd }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
    
                <!--form sebelah kanan-->
                <div class="col-md-6">
                    
                    <h3 class="mb-2 border-bottom border-3">Kondisi Lab</h3>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Suhu</label>
                            <div class="col-sm-8">
                                <input type="Truang" class="form-control form-control-sm" name="suhu_ruang" placeholder="0.00" value="{{old('suhu_ruang')}}">
                                @error('suhu_ruang')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                                <span class="form-text">
                                    &deg;C
                                  </span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Kelembapan</label>
                            <div class="col-sm-8">
                                <input type="RHruang" class="form-control form-control-sm" name="kelembaban" placeholder="0.00" value="{{old('kelembaban')}}">
                                @error('kelembaban')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                                <span class="form-text">
                                    %
                                  </span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tekanan</label>
                            <div class="col-sm-8">
                                <input type="tekanan" class="form-control form-control-sm" name="tekanan" placeholder="0.00" value="{{old('tekanan')}}">
                                @error('tekanan')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                                <span class="form-text">
                                    Hpa
                                  </span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">inhomogenitas</label>
                            <div class="col-sm-8">
                                <input type="float" class="form-control form-control-sm" name="inhomo" placeholder="0.00" value="{{old('inhomo')}}">
                                @error('inhomo')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        
                        <h3 class="mb-2 border-bottom border-3">Identitas Pemilik</h2>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
                                <div class="col-sm-9">
                                    <input type="namapemilik" class="form-control form-control-sm" name="pemilik" value="{{old('pemilik')}}">
                                    @error('pemilik')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">alamat</label>
                                <div class="col-sm-9">
                                    <input type="alamat" class="form-control form-control-sm" row="3" name="alamat" value="{{old('alamat')}}">
                                    @error('alamat')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                      submit
                                    </label>
                                    <div class="invalid-feedback">
                                      You must checkup submitting.
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary mb-1 ">Simpan</button>
                                    <button action="{{route('home')}}" type="button" class="btn btn-secondary mb-1">back</button>
                                </div> 
                            </div>
                        </div>
            </form>
            </div>           
            
    </div>
    @include('footer')

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html