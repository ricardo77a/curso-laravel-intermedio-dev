@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <div class="col-md-12 mt-3">
                        <a href="{{ route('enviar.correo') }}" class="btn btn-primary">Enviar Correo Electrónico</a>
                    </div>
                    <div class="card m-3">
                        <div class="card-header">
                            <h5>Subir archivo</h5>
                        </div>                        
                        <div class="col-md-12 mt-3">
                            <form action="{{ route('importar.excel') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="documento">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                    </div>
                                </div>
                                @error('documento')
                                    <div class="alert alert-danger mt-3" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="input-group m-3">
                                    <button type="submit" class="btn btn-dark">Subir</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            Exportar excel
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exporta parte de la tabla becarios.</p>
                            <a href="{{ route('exportar.excel') }}" class="btn btn-primary">Exportar</a>
                        </div>
                    </div>  

                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            Exportar PDF
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exporta parte de la tabla becarios.</p>
                            <a href="{{ route('exportar.pdf') }}" class="btn btn-primary">Exportar</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
