<!DOCTYPE html>
<html lang="en">
    
    <?php
    
  //  dd($favicon->img_path);
    ?>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Admin">
        <meta name="author" content="Admin">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="24x24" 
                href="{{asset('app-front/images/favicon.png')}}">

        <title>JidaByte</title>
        <!-- ============================================================== -->
        <!-- All CSS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts.front.css')
        @yield('css')

    </head>
    <body class="">
        <div class="boxed_wrapper">

      
        @include('layouts.front.header')

        @yield('content')
        @include('layouts.front.footer')
        <!-- ============================================================== -->
        <!-- All SCRIPTS ANS JS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts.front.scripts')
        @yield('js')
      
      </div>
    </body>
</html>
