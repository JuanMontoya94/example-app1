@extends('plantilla')

@section('seccion')
<h1>Detalle de frascos</h1>
<h4>Id:{{$frasco->Id}} </h4>
<h4>Precio:{{$frasco->Precio}} </h4>
<h4>Color:{{$frasco->Color}} </h4>
@endsection