<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>kalibrasi</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/jquery.js')}}"></script>
    

  <body>
    <!--conten-->
    <div class="container mb-3" style="top: 50px;">
        <div class="container-fluid py-5 text-bg-green rounded-3">
          <h1 class="display-5 fw-bold text-center" style="margin-top: 25px;">LABORATORIUM KALIBRASI</h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="container-fluid">
            <form action="{{route('post.baca')}}" method="POST">
                @csrf
                <div class="form-grup mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">no order</label>
                    <div class="d-flex justify-content-center"">
                    <select id="option" name="no_order" class="form-select text-center" style="width: 100px;">
                        <option value="">-no order-</option>
                        @foreach ($options as $option)
                            <option value="{{$option->no_order}}">{{ $option->no_order }}</option>
                        @endforeach
                    </select>
                    </div>
               
                </div>
                <h3 class="dispaly-3 text-center">Kalibrasi Alat Pengukuran Kecepatan Angin</h3>
                <div class="row justify-content-center align-items-center mb-1">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">inhomogenitas media :</label>
                    <div class="col-sm-2">
                        <input type="float" class="form-control form-control-sm" name="inhomo" id="inhomo">               
                    </div>
                </div>
                <div class="row justify-content-center mb-1">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Set Poin :</label>
                    <div class="col-sm-2">
                        <input type="Setpoin" class="form-control form-control-sm" name="set_poin" id="setpoin">               
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-12 mb-1 text-center border-top border-3" style="font-size: 30px;">Nilai Pembacaan</div>
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Koreksi alat Standar</label>
                    <div class="col-sm-3">
                        <input type="double" class="form-control form-control-sm" name="koreksistd" id="koreksistd">               
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-3 col-sm-2 ">no</div>
                        <div class="col-3 col-sm-2 ">Standar (m/s)</div>
                        <div class="col-3 col-sm-2 ">UUT (m/s)</div>  
                        <div class="col-3 col-sm-2 ">koreksi</div>               
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-3 col-sm-2 ">1</div>
                    <div class="col-3 col-sm-2 ">
                        <input type="double" class="form-control"  name="baca1" id="baca1" placeholder="m/s">
                    </div>
                    <div class="col-3 col-sm-2 "> 
                        <input type="double" class="form-control"  name="bacauut1" id="bacauut1" placeholder="m/s">
                    </div>
                    <div class="col-3 col-sm-2 ">
                        <input type="double" class="form-control"  name="koreksiuut1" id="koreksiuut1" placeholder="m/s" ></div>                 
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-3 col-sm-2 ">2</div>
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="baca2" id="baca2" placeholder="m/s">
                    </div>
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="bacauut2" id="bacauut2" placeholder="m/s">
                    </div>  
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="koreksiuut2" id="koreksiuut2" placeholder="m/s" >
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-3 col-sm-2 ">3</div>
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="baca3" id="baca3" placeholder="m/s">
                    </div>
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="bacauut3" id="bacauut3" placeholder="m/s">
                    </div>  
                    <div class="col-3 col-sm-2">
                        <input type="double" class="form-control" name="koreksiuut3" id="koreksiuut3" placeholder="m/s" >
                    </div>
                </div>
                <div class="row justify-content-center mb-3 ">
                    <div class="col-3"></div>
                    <div class="col-sm-3">
                        <div class="row align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Max standar :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="max_std" id="max_std" >               
                            </div>
                        </div>
                        <div class="row align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Max UUT :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="max_uut" id="max_uut" >               
                            </div>
                        </div>
                        <div class="row  align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Mean Standar:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="meanstd" id="meanstd" >               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row  align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Min standar :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="min_std" id="min_std" >               
                             </div>
                        </div>
                        <div class="row  align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Min UUT :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="min_uut" id="min_uut" >               
                            </div>
                        </div>
                        <div class="row  align-items-center mb-1">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Mean UUT:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="meanuut" id="meanuut" >               
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>

                </div>
                <div class="row justify-content-center mb-3 ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Standar Deviasi:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" name="sd" id="sd" >               
                     </div>
                </div>
                <div class="row justify-content-center align-items-center mb-3 ">
                    @foreach ($alatstd as $std)
                    <label class="col-sm-2 col-form-label col-form-label-sm">U driff: </label>
                    <div class="col-sm-2">
                        <input type="float" class="form-control form-control-sm" style="width: 100px;" value="{{$std->Udriff}} " id="Udriff" >           
                     </div>
                     <label class="col-sm-2 col-form-label col-form-label-sm">U95 alat standar: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" style="width: 100px;" value="{{$std->uc_std}}" id="Usertif" >               
                     </div>
                     <label class="col-sm-2 col-form-label col-form-label-sm">resolusi stanadar: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" style="width: 100px;" value="{{$std->resolusi_std}}" id="resolusistd" >               
                     </div>
                    @endforeach
                    
                </div>
                <div class="container">
                    <table class="table text-center">
                        <thead class="table-light">
                         <tr>
                            <th scope="col">U1</th>
                            <th scope="col">U2</th>
                            <th scope="col">U3</th>
                            <th scope="col">U4</th>
                            <th scope="col">U5</th>
                            <th scope="col">U6</th>
                            <th scope="col">U7</th>
                            <th scope="col">Ugab</th>
                            <th scope="col">Veff</th>
                            <th scope="col">U95</th>
                          </tr>
                        </thead>
                        <tbody>
                         <td><input name="ui" id="u1" type="text" style="width: 75px;" readonly ></td>
                         <td><input name="u2" id="u2"  type="text" style="width: 75px;"readonly></td>
                         <td><input name="u3" id="u3"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="u4" id="u4"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="u5" id="u5"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="u6" id="u6"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="u7" id="u7"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="ugab" id="ugab"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="veff" id="veff"  type="text"style="width: 75px;"readonly></td>
                         <td><input name="u95" id="u95"  type="text"style="width: 75px;"readonly></td>
                         </tbody>
                       </table>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-secondary" type="submit">Simpan</button>
                    <button class="btn btn-secondary" type="button">Laporan</button>
                    <a href="{{route('home')}}" type="button" class="btn btn-primary">back</a>
                </div> 
            </div>
            </form>
            <script src="{{asset('frontend/hitungkoreksi.js')}}"></script> 
                
        <script>
            // Tangkap peristiwa perubahan pilihan select
            document.getElementById('option').addEventListener('change', function() {
              var selectedOption = this.value;
              if (selectedOption !== '') {
                fetchData(selectedOption); // Panggil fungsi untuk mengambil data yang sesuai
              } else {
                clearData(); // Panggil fungsi untuk menghapus data jika opsi tidak dipilih
              }
            });
          
            function fetchData(option) {
              fetch('/pkalibrasi/inputbaca/getuc/' + option) // Ganti dengan URL endpoint yang sesuai di sisi server
                .then(response => response.text())
                .then(data => {
                  document.getElementById('dataContainer').innerHTML = data; // Update konten dengan data yang diterima
                })
                .catch(error => console.log(error));
            }
          
            function clearData() {
              document.getElementById('dataContainer').innerHTML = ''; // Hapus konten data
            }
          </script>
    </div>
   
    

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>