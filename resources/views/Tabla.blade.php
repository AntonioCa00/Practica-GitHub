@extends('Plantilla')

@section('Espacio')
    
    <div class="container mt-5 col-md-6">
        <h1 style="color: aliceblue">Equipos más populares del futbol mexicano</h1>
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">Posición</th>
                <th scope="col">Equipo</th>
                <th scope="col">Porcentaje %</th>            
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Chivas</td>
                <td>25%</td>    
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>America</td>
                <td>22%</td>
              </tr> 
              <tr>
                <th scope="row">3</th>
                <td>Cruz Azul</td>
                <td>13%</td>
              </tr>          
              <tr>
                <th scope="row">4</th>
                <td>Pumas</td>
                <td>8.5%</td>
              </tr> 
              <tr>
                <th scope="row">5</th>
                <td>Tigres</td>
                <td>7%</td>
              </tr>
              <tr>
                <th scope="row">...</th>
                <td>Otro</td>
                <td>24.5%</td>
              </tr>
            </tbody>
          </table>
    </div>


@endsection