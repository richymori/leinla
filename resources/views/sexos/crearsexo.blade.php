@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">CREAR NUEVO SEXO</h1>
                </div>
                <div class="card-body">
                    <form action="/sexos" method="POST" role="form">
                        <div class="form-group">
                            @csrf()
                            <label for="">Nuevo</label>
                            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese el nombre del Sexo">
                        </div>
                        <a href="/sexos/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
