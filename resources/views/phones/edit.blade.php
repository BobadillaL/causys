@extends('layout')

@section('title', "Editar telefono")

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a phone</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('phone.update', $phone->id) }}">
            @method('PATCH') 
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
              <label for="coompany">Compania:</label>
              <input type="text" class="form-control" name="company"/>
          </div>                         
                   <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection