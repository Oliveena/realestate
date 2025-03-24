<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet" type="text/css" >
  <title>Laravel</title>
  @vite(['resources/ssss/app.scss:resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div id="id">
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>