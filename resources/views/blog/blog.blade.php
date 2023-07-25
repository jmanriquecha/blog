    @extends('layouts.blog')
    @section('content')
        <h1>Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body pt-3 pb-4">
                    <a href="{{ url('blog/' . $post->slug) }}" class="nav-link">{{ $post->title }}</a>
                </div>
                <div @class(['border-top', 'card-footer' => true])>
                    <span @class(['fw-bold', 'small' => true])>Creado por:</span>
                    <span @class(['small'])>{{ $post->user->name }} | {{ $post->created_at }}</span>
                </div>
            </div>
        @endforeach
        {{ $posts->links(0) }}
    @endsection
