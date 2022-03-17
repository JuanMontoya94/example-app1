@extends('plantilla')

@section('seccion')
    <h1>Editar frasco {{$frasco->Id}}</h1>

    @if(session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif
    <form action="{{route('frascos.update',$frasco->Id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT"> 
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
      value="{{$frasco->Id}}">
      <input type="text" name="Precio" placeholder="precio" class="form.control mb-2"
      value="{{$frasco->Precio}}">
      <input type="text" name="Color" placeholder="color" class="form.control mb-2"
      value="{{$frasco->Color}}">
      <input type="text" name="ML" placeholder="cantidad en ml" class="form.control mb-2"
      value="{{$frasco->ML}}">
      <input type="text" name="Descripcion" placeholder="descripcion" class="form.control mb-2"
      value="{{$frasco->Descripcion}}">
      <button class="btn btn-warning btn-block" type="submit">Actualizar</button>

    </form>
@endsection