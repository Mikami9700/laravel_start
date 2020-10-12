<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Document</title>
</head>
    <body>
        <div class="container">
            <div class="justify">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                    <div class="content ">
                        <h1 class="title m-b-md">
                            Laravel
                        </h1>

                        <div class="links">
                            <a href="{{route('a',10)}}">TEST 1</a>
                            <a href="{{route('b','fuck')}}">TEST 2</a>
                        </div>
                        <hr>
                       {{--  <div class="links"> --}}
                            {{-- if(isset('name') { print name else print ''}) --}}
                            {{-- <h3>{{ $name ?? ''}}</h3>
                            <h3>{{ $age ?? '' }}</h3>
                        </div> --}}
                        <div class="links">
                            {{-- Englis to Arabic --}}
                            <p>{{ __('messages.Hello')}}</p>
                            <h3>{{ $obj->name }}</h3>
                            <h3>{{ $obj->age }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>