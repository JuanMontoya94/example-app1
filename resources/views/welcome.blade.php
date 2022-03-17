<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cattleya</title>
</head>

<body>
  <div class="container may-4">
    <class class="display-4">Frascos</class>
    @if(session('mensaje'))
      <div class="alert alert-succes">
        {{session('mensaje')}}
      <div>
    @endif

    <form action="{{route('frascos.crear')}}" method="POST">
      @csrf
      @error('Id')
        <div class="alert alert-danger">El id es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
      @enderror
      @error('Precio')
        <div class="alert alert-danger">El precio es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
      @enderror
      @error('Color')
        <div class="alert alert-danger">El color es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
      @enderror
      @error('ML')
        <div class="alert alert-danger">la capacidad es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
      @enderror
      <input type="text" name="Id" placeholder="id" class="form.control mb-2"
      value="{{old('Id')}}">
      <input type="text" name="Precio" placeholder="precio" class="form.control mb-2"
      value="{{old('Precio')}}">
      <input type="text" name="Color" placeholder="color" class="form.control mb-2"
      value="{{old('Color')}}">
      <input type="text" name="ML" placeholder="cantidad en ml" class="form.control mb-2"
      value="{{old('ML')}}">
      <input type="text" name="Descripcion" placeholder="descripcion" class="form.control mb-2">
      <button class="btn btn-primary btn-block" type="submit">Agregar</button>

    </form>

    <table class="table may-10">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Precio</th>
          <th scope="col">Color</th>
          <th scope="col">ML</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($frascos as $item)
        <tr>
          <th scope="row">{{$item->Id}}</th>
          <td>
            <a href="{{route('frascos.detalle', $item->Id)}}">
              {{$item->Precio}}
            </a>

          </td>
          <td>{{$item->Color}}</td>
          <td>{{$item->ML}}</td>
          <td>{{$item->Descripcion}}</td>
          <td>
            <a href="{{route('frascos.editar',$item->Id)}}" class="btn btn-warning btn-sm">Editar</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>