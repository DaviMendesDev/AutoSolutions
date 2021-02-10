<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('auto-part.ico') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/fe7c4dea0a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <header>
        <nav class="primary-bg">
            <ul class="menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Parts</a></li>
                <li><a href="#">Specific Search</a></li>
                <li>
                    <div class="search-container">
                        <form id="searchForm" action="{{ route('search') }}">
                            <input type="search" name="search_parts"
                                id="search_parts" placeholder="Search.."
                                value="{{ old('search_parts') }}">

                            <button>
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @if (Session::has('message'))
            <div class="message {{ Session::pull('message_type') }}">
                {{ Session::pull('message') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
