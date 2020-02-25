@extends('layout')

@section('title', "Crear telefono")

@section('content')
    <h1>Crear telefono</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="POST" action="{{ route('phones.store')}}">
        {{ csrf_field() }}

        @csrf
          <div class="form-group">    
              <label for="brand">Marca del telefono:</label>
              <input type="text" class="form-control" name="brand"/>
          </div>

          <div class="form-group">
              <label for="model">Modelo:</label>
              <input type="text" class="form-control" name="model"/>
          </div>

          <div class="form-group">
              <label for="number">Numero:</label>
              <input type="text" class="form-control" name="number"/>
          </div>
          <div class="form-group">
              <label for="imei">Imei:</label>
              <input type="text" class="form-control" name="imei"/>
          </div>
          <div class="form-group">
              <label for="owner">Propietario:</label>
              <input type="text" class="form-control" name="owner"/>
          </div>
          <div class="form-group">
              <label for="company">Compania:</label>
              <input type="text" class="form-control" name="company"/>
          </div>
          <div class="form-group">
              <label for="state">Estado de Pericia:</label>
              <input type="text" class="form-control" name="state"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Agregar Telefono</button>

      </form>
@endsection