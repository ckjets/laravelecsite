<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- link for stripe --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/js/app.js') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
       

        @include('inc.nav')
    <div class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('inc.footer')
    </div>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- stripe  --}}
    <script src="https://js.stripe.com/v3/">
    
    var stripe = Stripe('sk_test_RBPbIgNyfUXQJT9JD8Vyd9Iv');
var elements = stripe.elements();   
    </script>


    
</body>
</html>
