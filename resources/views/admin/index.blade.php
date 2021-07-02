@extends('adminlte::page')
@section('title', 'Proyecto MOOC')

@section('content_header')
    <h1 class="text-black font-bold text-5xl "> Bienvenido a la zona de administración de Proyecto MOOC</h1>
@stop

@section('content')
   <p>En esta sección se te dará acceso a las funciones de administrador las cuales son las siguientes: </p>
        <p>•Roles</p>
      <p>•Usuarios </p>  
      <p>•Niveles</p>  
       <p>•Categorías</p> 
       <p> •Pendientes de aprobación</p>
       
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop