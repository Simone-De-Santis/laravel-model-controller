<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie |@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- CDN --}}
  @yield('cdns')
</head>

<body>
  {{-- header --}}
  @include('includes.header')
  <main>
    @yield('content')
  </main>


  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>
