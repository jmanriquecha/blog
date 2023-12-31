<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container px-4 mx-auto">
        <header class="flex items-center justify-between py-4 px-4">
            {{-- Start nav --}}
            <nav class="flex items-center flex-grow gap-4 justify-between w-full">
                <div class="flex sm:justify-center space-x-4">
                    <img width="50px" src="{{ asset('images/logo.png') }}">
                    <a href="{{ route('home') }}"
                        class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                        Home
                    </a>
                </div>
                <div class="text-indigo-600 flex">
                    <form action="{{ route('home') }}" method="GET">
                        <input type="search" name="search" value="{{ request('search') }}" class="border-0"
                            placeholder="Search...">
                    </form>
                    @auth
                        <a href="{{ route('posts.index') }}" target="_black"
                            class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" target="_black"
                            class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Login</a>
                    @endauth

                </div>
            </nav>
        </header>

        <div class="opacity-60 h-px mb-8"
            style="
        background: linear-gradient(to right,
            rgba(200, 200, 200, 0) 0%,
            rgba(200, 200, 200, 1) 30%,
            rgba(200, 200, 200, 1) 70%,
            rgba(200, 200, 200, 0) 100%
        );
    ">
        </div>

        {{-- End nav --}}
        @yield('content')
    </div>
</body>

</html>
