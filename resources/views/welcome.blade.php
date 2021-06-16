<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Registro de Autos</title>
  </head>
  <body>
   <div class="container my-4">
        <h1 class="display-4">Registro de Autos</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre Modelo</th>
      <th scope="col">Descripcion</th>      
    </tr>
  </thead>
  <tbody>
  @foreach($auto_modelo as $item)
      
  @endforeach
    <tr>
      <th scope="row">{{$item->Id}}</th>
      <td><a href="{{router('auto.detalle')}}">{{$item->Nombre}}</a></td>
      <td>{{$item->Descripcion}}</td>
      <td><button type="button" class="btn btn-primary">Detalle</button></td>
    </tr>   
     <tr>
      <th scope="row">{{$item->Id}}</th>
      <td><a href="{{router('auto.detalle')}}">{{$item->Nombre}}</a></td>
      <td>{{$item->Descripcion}}</td>
      <td><button type="button" class="btn btn-primary">Detalle</button></td>
    </tr>  
    @endforeach() 
  </tbody>
</table>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
