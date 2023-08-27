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
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
        <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.replace( 'summary-ckeditor1' );
	CKEDITOR.replace( 'summary-ckeditor2' );
</script>


<script>
    $('#slimtest1, #slimtest2').perfectScrollbar();
	
	 $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif
			
			
            @if(\Session::has('flash_message'))
            $.toast({
                heading: 'Info!',
                position: 'top-center',
                text: '{{session()->get('flash_message')}}',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
            @endif
			
			
        })
	
</script>

<script type="text/javascript">
            $(document).ready(function() { $("#e1").select2(); });
</script>

<script type="text/javascript">
            $(document).ready(function() { $("#e2").select2(); });
</script>
      
      </div>
    </body>
</html>
