    @extends('layouts.blog')
    @section('content')
        <h1>Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-2">
                <div class="card-header">
                    <a href="{{ url('blog/' . $post->slug) }}" class="nav-link">{{ $post->title }}</a>
                </div>
            </div>
        @endforeach
        {{ $posts->links(0) }}
    @endsection
