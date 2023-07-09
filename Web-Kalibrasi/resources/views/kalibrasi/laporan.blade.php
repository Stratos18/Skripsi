<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbarv2')
    <div class="container-fluid py-4">
        <a href="{{route('input.baca')}}" class="btn btn-primary">back</a>
        <div class="container">
            <div class="card">
                <p> no : order</p>
                <p>nama alat    :</p>
                <p>pemilik  :</p>
            </div>
            <div class="container-fluid card p-3 rounded-3" id="dataContainer">
                <table class="table text-center" >
                 <thead class="table-light">
                  <tr>
                     <th scope="col">set point</th>
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
                     <th scope="col">Veff</th>
                     <th scope="col">U95</th>
                   </tr>
                 </thead>
                 @if ($data->count() > 0)
                 @foreach ($data as $item)   
                 <tbody>           
                  <td >{{$item->set_poin}}</td>
                  <td >{{$item->meanstd}}</td>
                  <td >{{$item->meanuut}}</td>
                  <td >{{$item->ui}}</td>
                  <td >{{$item->u2}}</td>
                  <td >{{$item->u3}}</td>
                  <td >{{$item->u4}}</td>
                  <td >{{$item->u5}}</td>
                  <td >{{$item->u6}}</td>
                  <td >{{$item->u7}}</td>
                  <td >{{$item->ugab}}</td>
                  <td >{{$item->veff}}</td>
                  <td >{{$item->u95}}</td>
                  </tbody>
                  @endforeach
                  @else
                 <p>Tidak ada data yang tersedia.</p>
               @endif
                </table>
    </div>
        </div>

    </div>
</body>
</html>