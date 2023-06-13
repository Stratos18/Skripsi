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
    @include('navbar')
    <!--end navbar-->
    <!--conten-->
    <div class="container py-5">
        <div class="container-fluid text-center text-bg-green mb-3 rounded-3" style="min-height: 150px; ">
            <h1 class="display-2 py-5 fw-bold align-middle">LABORATORIUM KALIBRASI</h1>
        </div>
        <div class="container-fluid">
            <form>
            <h2 class="display-4 mb-2 text-center">Informasi Alat</h2>
            <div class="row justify-content-center">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Order</label>
                <div class="col-sm-3">
                    <input type="noOrder" class="form-control form-control-sm" id="NoOrder">               
                </div>
            </div>
            <div class="row">
                <!--form sebelah kiri-->
                <div class="col-md-6">
                    <h3 class="mb-2 border-bottom border-3 border-color">Informasi Alat</h2>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama UUT</label>
                            <div class="col-sm-9">
                                <input type="namauut" class="form-control form-control-sm" id="namauut"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Marek</label>
                            <div class="col-sm-9">
                                <input type="merek" class="form-control form-control-sm" id="merek"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tipe</label>
                            <div class="col-sm-9">
                                <input type="tipe" class="form-control form-control-sm" id="tipe"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">No Seri</label>
                            <div class="col-sm-9">
                                <input type="NoSeri" class="form-control form-control-sm" id="NoSeri"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">tgl.test</label>
                            <div class="col-sm-9">
                                <input type="tgl" class="form-control form-control-sm" id="tgl"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">resolusi</label>
                            <div class="col-sm-9">
                                <input type="res" class="form-control form-control-sm" id="res"></div>
                        </div>
                </div>
                <!--form sebelah kanan-->
                <div class="col-md-6">
                    <h3 class="mb-2 border-bottom border-3">Kondisi Lab</h3>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Suhu</label>
                            <div class="col-sm-9">
                                <input type="Truang" class="form-control form-control-sm" id="Truang"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Kelembapan</label>
                            <div class="col-sm-9">
                                <input type="RHruang" class="form-control form-control-sm" id="RHruang"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tekanan</label>
                            <div class="col-sm-9">
                                <input type="tipe" class="form-control form-control-sm" id="tipe"></div>
                        </div>
                </div>
                <!--form sebelah kiri-->
                <div class="col-md-6">
                    <h3 class="mb-2 border-bottom border-3">Identitas Pemilik</h2>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
                            <div class="col-sm-9">
                                <input type="nama" class="form-control form-control-sm" id="nama"></div>
                        </div>
                        <div class="row mb-1">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">alamat</label>
                            <div class="col-sm-9">
                                <textarea type="RHruang" class="form-control form-control-sm" row="3" id="RHruang"></textarea>
                        </div>
                    </div>
                </div>
               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary mb-1 ">Simpan</button>
                    <button type="button" class="btn btn-secondary mb-1">Next</button>
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