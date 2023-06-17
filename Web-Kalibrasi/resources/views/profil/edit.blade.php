<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>user-profil</title>
    <link href="login.css" rel="stylesheet" />
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
</head>
  <body>
    @include('navbar')
    <div class="row g-3 align-items-center"style="margin: 50px">
        <div style="width: 50%; ">
            @if (session()->has('message'))
            <div class="text-success mt-4">{{session('message')}}
            @endif
            <form action="{{route('profile.update')}}" method="post">
                @method("put")
                {{ csrf_field() }}
                    <div class="mb-3">
                      <label for="nama"class="form-label">Nama</label>
                      <input class="form-control" name="name">
                        @error('name')
                            <div class="text-danger mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="nip" class="form-label">NIP</label>
                      <input  class="form-control" name="nip">
                      @error('nip')
                            <div class="text-danger mt-2 text-sm">{{$message}}</div>
                    @enderror
                    </div>
                    <button class="btn btn-primary">update</button>
              </form>
            </div>
            
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>