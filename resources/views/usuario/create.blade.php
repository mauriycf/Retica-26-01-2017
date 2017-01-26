@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
  <div class="form-group">
    {!!Form::label('Nombre: ')!!}
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del usuario'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Correo: ')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Correo Electronico'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Contraseña: ')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa una contraseña'])!!}
  </div>
  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

@stop
