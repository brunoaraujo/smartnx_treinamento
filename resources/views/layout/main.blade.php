<!DOCTYPE html>
<html>
<head>
    <title>TREINAMENTO SMARTNX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    @yield('css')
    @livewireStyles
</head>
<body>
    @include('layout.includes.top')

    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            @include('layout.includes.navbar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="text-primary">@yield('title')</h1>
                @yield('content')
                {{ $slot ?? '' }}
            </main>
        </div>
    </div>

    @yield('js')
    @livewireScripts
</body>
</html>
