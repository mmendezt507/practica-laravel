@extends('layouts.app')

@section('content')
    <div class="card p-5">
        <div class="card-header">
            <h2>{{$title}}</h2>
        </div>
        <div class="card-body">
            <div>
                <p>
                    {{$content}}
                </p>
            </div>
        </div>
    </div>
    <div class="p-3 d-flex flex-row-reverse">
        <a href={{route('post.index')}} class="btn btn-primary rounded-pill px-3"> Regresar</a>
    </div>

@endsection
