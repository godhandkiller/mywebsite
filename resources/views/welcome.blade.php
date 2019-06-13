<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

    </head>
    <body>
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

            <div id="app" class="content">
                <div class="alert alert-primary" role="alert" v-show="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="title m-b-md">
                    <span class="badge badge-danger">@{{name.first}}</span>
                    <span class="badge badge-dark">@{{name.last}}</span>
                </div>
                {{-- <form action=""> --}}
                    {{-- @csrf --}}
                    <div class="form-group">
                        <label class="form-control-label" for="">Ask me anything</label>
                        <input class="form-control" type="text">
                    </div>
                    <button class="form-control btn btn-dark" v-on:click="sendQuestion">SEND</button>
                {{-- </form> --}}
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
