<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />


    <title>Kalibrasi</title>
  </head>
  <body class="bg-success">
    <div class="container">
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container-fluid">
          <div class="card login-form">
            <h1 class="card-tittle text-center border-bottom border-5">LOGIN</h1>
            <div class="card-text">
              <form action="{{route('submitlogin')}}" method="post">
                {{ csrf_field() }}
                <div class="row mb-4 text-center">
                  <label for="InputEmail1" class="form-label">Username</label>
                  <input type="name" class="form-control" name="name" aria-describedby="emailHelp" />
                </div>
                <div class="row mb-4 text-center">
                  <label for="InputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" />
                </div>
                <div class="row text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
