@extends('plantilla')

@section('seccion')
<h1>Nuestro equipo de trabajo</h1>

@foreach($equipo as $persona)
<a href="{{route('nosotros',$persona)}}" class="h4 text-danger">{{$persona}}</a><br>
@endforeach

@if(!empty($nombre))

<h2>El nombre es {{$nombre }}</h2>

@endif

@endsection