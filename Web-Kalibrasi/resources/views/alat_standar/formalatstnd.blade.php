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
    <div class="container py-5">
        <div class="container-fluid text-center text-bg-green mb-3 rounded-3" style="min-height: 150px; ">
            <h1 class="display-2 py-5 fw-bold align-middle">LABORATORIUM KALIBRASI</h1>
        </div>
        <div class="container-fluid">
            <form action="{{ route('post.alatstnd')}}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- elemen-elemen form-->
            <div class="row">
                    <h3 class="mb-2 border-bottom border-3 border-color">Informasi Alat</h2>
                     <!--form sebelah kiri-->
                    <div class="col-md-6">
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama Alat</label>
                                <div class="col-sm-9">
                                    <input type="namaAlatStd" class="form-control form-control-sm" name="nama_alatstd" id="namaAlatStd" value="{{old('nama_alatstd')}}"></div>
                                    @error('nama_alatstd')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Merek</label>
                                <div class="col-sm-9">
                                    <input type="merekStd" class="form-control form-control-sm" name="merek_std" id="merekStd" value="{{old('merek_std')}}"></div>
                                    @error('merek_std')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tipe</label>
                                <div class="col-sm-9">
                                    <input type="tipeStd" class="form-control form-control-sm" name="tipe_std" id="tipeStd" value="{{old('tipe_std')}}"></div>
                                    @error('tipe_std')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">No Seri</label>
                                <div class="col-sm-9">
                                    <input type="NoSeriStd" class="form-control form-control-sm" name="no_seristd" id="NoSeriStd" value="{{old('no_seristd')}}"></div>
                                    @error('no_seristd')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            <div class="row mb-1">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">No Sertifikat</label>
                                <div class="col-sm-9">
                                    <input type="nSertif" class="form-control form-control-sm" name="no_sertifstd" id="nSertif" value="{{old('no_sertifstd')}}"></div>
                                    @error('no_sertifstd')
                                    <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                    @enderror
                                </div>
                            <div class="row mb-1">
                                <label for="fileInput" class="col-sm-3 form-label">Sertifikat</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control" id="sertifstd" name="sertifstd"></div>
                                @error('sertifstd')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                    </div>
                
                <!--form sebelah kanan-->
                    <div class="col-md-6">
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Daerah Ukur</label>
                            <div class="col-sm-9">
                                <input type="DUkur" class="form-control form-control-sm" name="daerah_ukurstd" id="DUkur" value="{{old('daerah_ukurstd')}}"></div>
                                @error('daerah_ukurstd')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Resolusi</label>
                            <div class="col-sm-9">
                                <input type="ResolusiSTd" class="form-control form-control-sm" name="resolusi_std" value="{{old('resolusi_std')}}" id="ResolusiSTd"></div>
                                @error('resolusi_std')
                                <small class="text-danger mt-2 text-sm">{{$message}}</small>
                                @enderror
                            </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Ketidakpastian</label>
                            <div class="col-sm-9">
                                <input type="KtdPati" class="form-control form-control-sm" name="uc_std" id="KtdPasti" value="{{old('uc_std')}}"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Media</label>
                            <div class="col-sm-9">
                                <input type="media" class="form-control form-control-sm" name="media" id="media" value="{{old('media')}}"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Metoda</label>
                            <div class="col-sm-9">
                                <input type="MetodaSTD" class="form-control form-control-sm" name="metoda" id="MetodaStd" value="{{old('metoda')}}"></div>
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
                            <a href="{{route('alatstd')}}" type="button" class="btn btn-secondary mb-1">Kembali</a>
                        </div>
                    </div> 
                </form>  
                </div>
            
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>