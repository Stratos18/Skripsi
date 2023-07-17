<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sertifikat</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div class="container card p-4" style="margin-top: 25px">
        <div class="row justify-conten-center mb-5">
            <div class="col-3">
                <img src="{{asset('frontend/asset/Logo-BMKG.png')}}" height="124" class="mx-auto d-block">
            </div>
            <div class="col-6 text-center"></div>
            <div class="col-3">
                <img src="{{asset('frontend/asset/KAN.png')}}" height="124" class="mx-auto d-block">
            </div>
        </div>
    <form action="#">
        <div class="row justify-content-end">
            
            <div class="col-6">
              @foreach ($sertif as $item)
                <h6> No. Sertifikat :<span>{{$item->no_sertifikat}}</span></h3>
                <h6> No. Order : <span>{{$item->no_order}}</span> </h3>
                <h6> Lembar ke : 2 dari 2 lembar</h3>
                  @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Nama Alat/<small class="fst-italic">Instrumen Name</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Merek Alat/<small class="fst-italic">Manufacturer</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Tipe & No.seri Alat/<small class="fst-italic">Type & Serial Number</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Kapasitas/<small class="fst-italic">Range</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Graduasi/<small class="fst-italic">Graduating</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Tanggal Kalibrasi/<small class="fst-italic">Calibration Date</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-6 col-form-label">Tempat Kalibrasi/<small class="fst-italic">Calibration Place</small></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="namauut">
                    </div>
                </div>
             
            </div>
            <div class="col-4">
            </div>
        </div>

            <!-- form TTD-->

            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h4> <u>Kondisi Ruang / <small>Enviroment</small></u></h4>
                    <div class="align-item-center row">
                      <label class="col-sm-6 col-form-label">Suhu Ruang/<small class="fst-italic">Room Temperature</small></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="suhu_ruang">
                      </div>
                    </div>
                    <div class=" align-items-center row">
                        <label class="col-sm-6 col-form-label">kelembaban/<small class="fst-italic">Relativ Humidity</small></label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control form-control-sm" id="kelembaban">
                        </div>
                    </div>
                    <div class=" row align-items-center">
                      <label class="col-sm-6 col-form-label">Tekanan/<small class="fst-italic">Pressure</small></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="tekanan">
                      </div>
                    </div>
                  </div>
            </div>
            <div class="container">
              <h4 class="text-center"><u>HASIL KALIBRASI/ <small class="fst-italic">CALIBRATION RESULT</small></u></h4>
              <h5>kecepatan angin</h5>
              <table class="table table-bordered border-dark mb-3 center-table">
                <thead>
                  <tr class="text-center">
                    <th scope="col" >Alat Standar</th>
                    <th scope="col" >Alat Yang Dikalibrasi</th>
                    <th scope="col">Koreksi</th>
                    <th scope="col">U95</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <th>1 </th>
                    <th>1 </th>
                    <th>1 </th>
                    <th>1 </th>
                  </tr>
              </table>
            </div>
            <div>
              <small> <u>Catatan / <small>Notes</small></u><small>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-4 col-form-label">Standar Kalibrasi/<small class="fst-italic">Calibration Standard</small></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="Standar Kalibrasi">
                      </div>
                    </div>
                    <div class="mb-1 row align-items-center">
                        <label class="col-sm-4 col-form-label">Terelusur SI melalui/<small class="fst-italic">Traceable to SI through</small></label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control-sm form-control" id="kelembaban">
                        </div>
                    </div>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-4 col-form-label">Dokumen Acuan /<small class="fst-italic">Reference Document</small></label>
                      <div class="col-sm-6">
                        <small>: WMO-NO. 08, 2008 Edition, Update in 2021</h5>
                      </div>
                    </div>
                    <div class="row">
                      <small> Ketidak pastian pengukuran dinyatakan pada tingkat kepercaan tidak kurang dari 95% dengan daftor cakupan k=1.96 <br>Uncertainty of measurement is expressed at a confidence level of no joss than 95% with coverage facttor k=1.96</h5>
                    </div>
                    <div class="row border-bottom border-1 border-dark mb-1"></div>
                    <div class="row border-bottom border-1 border-dark mb-2"></div>
                    <h6 class="text-center">Akhir dari Sertifikat / <small><i>End of Certificate</i></small></h6>
            </div>
        </form>
        </div>
    </div>
    <div class="container p-2">
      <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">Sudah Sesuai</label>
          </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>

      
    <div class="container p-2">
            <nav aria-label="sertif">
                <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item ">
                    <a class="page-link">Back</a>
                  </li>
                  <li class="page-item"><a class="page-link active" href>1</a></li>
                  <li class="page-item" aria-current="page">
                    <a class="page-link">2</a>
                  </li>
                  <li class="page-item disable">
                    <a class="page-link" >Next</a>
                  </li>
                </ul>
              </nav>
    </div>
</body>
</html>