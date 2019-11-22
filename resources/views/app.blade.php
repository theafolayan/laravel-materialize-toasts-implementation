<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifications</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
        {{-- <a class="btn" onclick="">Toast!</a> --}}
        <div class="container">
                <h1>Laravel Flash Messages with Materialize CSS Toasts</h1>
              </div>
             
            @if ( Session::has('flash_message') )
             
              <div class="alert {{ Session::get('flash_type') }}">
                <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
                  <h3></h3>
              </div>
              @endif
        @yield('content')    
    <footer>
        
    </footer>

</body>
</html>