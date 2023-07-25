@extends('layouts.blog')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            {{ $post->body }}
        </div>
    </div>
@endsection
