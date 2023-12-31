<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->
<script src="{{asset('app-front/js/jquery.js')}}"></script>
<script src="{{asset('app-front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('app-front/js/owl.js')}}"></script>
<script src="{{asset('app-front/js/jquery-ripples.js')}}"></script>
<script src="{{asset('app-front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('app-front/js/script.js')}}"></script>



  <!-- Notification JS Below  -->

  <script src="{{ asset('/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>

  <script>

       $(document).ready(function () {

             @if(\Session::has('message')) 
                  $.toast({
                      heading: 'Success!',
                      position: 'bottom-right',
                      text:  '{{session()->get('message')}}',
                      loaderBg: '#ff6849',
                      icon: 'success',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif
              
              
              @if(\Session::has('flash_message')) 
                  $.toast({
                      heading: 'Error!',
                      position: 'bottom-right',
                      text:  '{{session()->get('flash_message')}}',
                      loaderBg: '#ff6849',
                      icon: 'error',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif

              
          })
      
  </script>
