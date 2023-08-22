@extends('layouts.app')
@push('before-css')
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{asset('plugins/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>

    <!-- Date picker plugins css -->
    <link href="{{asset('plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!-- page css -->
    <link href="{{asset('assets/css/pages/google-vector-map.css')}}" rel="stylesheet">
@endpush



@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End Info box -->
        <!-- chart box one -->
        <!-- ============================================================== -->

   <div class="row">

          <!--  <div class="col-lg-12 col-md-12">
              <div class="row">
                <div class="col-md-2">

                  <a href="{{url('admin/users')}}"  style="color:white; text-decoration:none;">
                  <div class="card-analytics" style="background-color:#5bc0de;">

                  <div class="card-body-analytics">

                    <i class="fa fa-users" style="padding-top:40px;"></i>
                  </div>
                  </a>
              </div>

                </div>


            </div>-->


        </div>
        <!-- ============================================================== -->
        <!-- End chart box one -->
        <!-- chart box two -->
        <!-- ============================================================== -->

        @include('layouts.admin.footer')
    </div>
@endsection



@push('js')
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--c3 JavaScript -->
    <script src="{{asset('plugins/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/c3-master/c3.min.js')}}"></script>
    <!--jquery knob -->
    <script src="{{asset('plugins/vendors/knob/jquery.knob.js')}}"></script>
    <!--Sparkline JavaScript -->
    <script src="{{asset('plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset('plugins/vendors/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('plugins/vendors/morrisjs/morris.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>


    <script>
        // MAterial Date picker

        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
    </script>

    <!-- Vector map JavaScript -->
    <script src="{{asset('plugins/vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- Dashboard JS -->
    <script src="{{asset('assets/js/dashboard-shop-2.js')}}"></script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
