@extends('layouts.app')

@section('content')
    <div class="d-grid gap-3" style="grid-template-columns: 2fr 1fr;">
        <div class="bg-body-tertiary border rounded-3">
            <div class="p-5">
                <h1>POSTS</h1>
            </div>
            <div class="p-5">
                @foreach ($posts as $post)
                <div class="card p-5">
                    <div class="card-header">
                        <a href="{{route('post.show', ['id' => $post['id']])}}"><h4>{{$post['title']}}</h4></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="bg-body-tertiary border rounded-3">
            <div class="p-5">
                <a href={{route('post.create')}} class="btn btn-primary rounded-pill px-3"> Crear Nuevo Post</a>
            </div>
        </div>
  </div>

@endsection
