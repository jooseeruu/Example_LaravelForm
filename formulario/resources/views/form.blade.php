@extends('layouts.basic')

@section('content')

<div class="container-sm">
<h2>POSTS</h2><h7>@lang('Crear publicación')</h7>
<br><br>
<h4>{{__('Crear una publicación')}}</h3>

<form action="{{ route('form')}}" method="POST">
  <!--Directiva de blade para verificar que el formulario es seguro  -->
  @csrf  

<select name="acceso" class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>@lang('Acceso')</option>
  <option value="1">{{__('Privado')}}</option>
  <option value="2">@lang('Público')</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{__('Título de la publicación')}}</label>
  <input name="title" class="form-control" id="exampleFormControlInput1" placeholder="@lang('Ingresa aquí el título de la publicación')">
  {{ $errors->first('title')}} <br>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">{{__('Extracto publicación')}}</label>
  <textarea name="extracto" class="form-control" id="exampleFormControlTextarea1" placeholder="@lang('Ingresa un extracto de la publicación')" rows="2"></textarea>
  {{ $errors->first('extracto')}} <br>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">{{__('Contenido publicación')}}</label>
  <textarea name="contenido" class="form-control" id="exampleFormControlTextarea1" placeholder="@lang('Ingresa el contenido completo de la publicación')" rows="3"></textarea>
  {{ $errors->first('contenido')}} <br>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label name="caducar"class="form-check-label" for="flexCheckDefault">{{__('Caducable')}}</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label name="comentar" class="form-check-label" for="flexCheckChecked">@lang('Comentable')</label>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">{{__('Enviar')}}</button>
  </div>
</div> 
</form>
@endsection