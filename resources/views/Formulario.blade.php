@extends('Plantilla')

@section('Espacio')




<div class="container mt-5 col-md-6">

    <h1>Formulario de bienvenida</h1>

    <form>
        <div class="mb-3">
          <label class="form-label" style="color: aliceblue">Nombre completo:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: aliceblue">Edad:</label>
            <input type="number" class="form-control"aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label class="form-label" style="color: aliceblue">¿Que esperas encontrar dentro del Proyecto?</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

</div>
    
@endsection