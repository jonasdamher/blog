<!DOCTYPE html>
<html lang="es      ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <link href="{{ asset(mix('css/web/main.css')) }}" rel="stylesheet">


    <style>
        .code {
            font-size: 3rem;
        }

        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .message{
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <p class="code text-primary">@yield('code')</p>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-4 text-center mb-2">
                    <p class="message">@yield('message')</p>
                </div>
                <div class="col-12 text-center">
                <a href="{{route('home')}}" class="btn btn-primary">Ir al inicio</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
