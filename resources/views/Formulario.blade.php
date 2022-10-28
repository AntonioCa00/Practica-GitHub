@extends('Plantilla')

@section('Espacio')




<div class="container mt-5 col-md-6">

    <h1>Formulario de bienvenida</h1>
    <form action="EnviaForm" method="POST">

        @csrf

        <div class="mb-3">
          <label class="form-label" style="color: aliceblue">Nombre completo:</label>
          <input type="text" class="form-control" name="Nombre">
          <p class="text-danger bw-bold">{{$errors ->first('Nombre')}}</p>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: aliceblue">Edad:</label>
            <input type="number" class="form-control" name="Edad">
            <p class="text-danger bw-bold">{{$errors ->first('Edad')}}</p>
          </div>
        <div class="mb-3">
          <label class="form-label" style="color: aliceblue">¿Que esperas encontrar dentro del Proyecto?</label>
          <input type="text" class="form-control" name="Expectativas">
          <p class="text-danger bw-bold">{{$errors ->first('Expectativas')}}</p>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

</div>
    
@endsection