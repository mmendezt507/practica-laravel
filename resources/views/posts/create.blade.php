@extends('layouts.app')

@section('content')
    <div class="card p-5">
        <div class="card-header">
            <h2>CREAR UN NUEVO POST</h2>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contenido</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>
                <div class="p-3 d-flex flex-row-reverse">
                    <button type ="submit" class="btn btn-success rounded-pill px-3">Guardar</button>
                    <a href={{route('post.index')}} class="btn btn-danger rounded-pill px-3"> Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection
