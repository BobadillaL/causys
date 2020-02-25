@extends('layout')

@section('title', "Lista de telefonos")

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Telefonos</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Marca</td>
          <td>Modelo</td>
          <td>Numero</td>
          <td>Imei</td>
          <td>Propietario</td>
          <td>Compania</td>
          <td>Estado</td>
          <td colspan = 2>Accion</td>
        </tr>
    </thead>
    <tbody>
        @foreach($phones as $phone)
        <tr>
            <td>{{$phone->id}}</td>
            <td>{{$phone->brand}} {{$phone->model}}</td>
            <td>{{$phone->number}}</td>
            <td>{{$phone->imei}}</td>
            <td>{{$phone->owner}}</td>
            <td>{{$phone->compania}}</td>
            <td>{{$phone->state}}</td>
            <td>
                <a href="{{ route('phones.edit',$phone->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('phones.destroy', $phone->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection