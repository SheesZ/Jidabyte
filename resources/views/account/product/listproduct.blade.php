@extends('layouts.main')
@section('content')

<?php $segment = Request::segments();


 ?>

<!-- banner_sec -->
<section class="banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="inner_text wow fadeInUp" data-wow-duration="2s">
          <h1>Products</h1>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- banner_sec -->


  <div class="my-account-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                               <!-- My Account Tab Menu Start -->
                      
                        @include('account/account_sidebar')
<!-- My Account Tab Menu End -->

<!-- My Account Tab Content Start -->

<div class="col-lg-9 col-md-8">
  <div class="tab-content" id="myaccountContent">
      <!-- Single Tab Content Start -->
    <div class="tab-pane fade show active" id="orders" role="#">
      <div class="myaccount-content">
               
       
       

             <a  href="{{ url('add-product') }}" class="theme-btn btn-one" style="float: right; ">
                <i class="icon-plus"></i> Add Product
            </a>
          
            <h2>Product</h2>
  	            <hr>
            <div class="myaccount-table table-responsive text-center">
                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                           
                            <th>short detail</th>
                        </tr>
                    </thead>

                    <tbody>

                        @php
                        $counter = 0;
  				              @endphp
                        
                        @foreach($listproduct as $key=>$item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->short_detail }}</td>
                   

                         
                        </tr>

                        @php
                        $counter++;
                        @endphp

                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $listproduct->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
    
      </div>
    </div>
  </div>
<!-- Single Tab Content End -->
</div>
</div> <!-- My Account Tab Content End -->
</div>
</div> <!-- My Account Page End -->
</div>
</div>
</div>

<!-- main content end -->   
</main>






@endsection
@section('css')
<style type="text/css">

/*payment accordion*/
   .accordion-item {
      padding: 20px 0 0;
   }

   .accordion-item .accordion-content div {
      color: #000;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 400;
      padding: 3px 3px;
      width: 100%;
      border: none;
      margin: 0px 0px;
      font-family: 'Myriad Pro';
   }

   .contact-row.cvv-box {
      padding-bottom: 12px;
   }

   label {
      padding-top: 20px;
   }

   .form-group {
      margin-bottom: 0px;
   }

   a.checkout_css {
      color: #fff;
      height: 41px;
      padding-top: 8px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      text-transform: uppercase;
      background: #bd2323;
      font-family: 'Oswald', sans-serif;
   }

   .panel-title {
      font-weight: 700;
   }

   .stripe_pay {
      font-size: 14px;
      color: #fff;
      padding: 0px 10px;
      border-radius: 0;
      background: #ff3333;
      display: inline-block;
      border: 2px solid #ff3333;
      font-family: 'oswald_stencilbold';
      font-weight: 600;
      height: auto;
      margin-top: 15px;
      margin-bottom: 30px;
   }

   .stripe_pay:hover {
      color: #fff;
      background: #39B7FF;
      border: 2px solid #39B7FF;
   }

   input.recurring {
      height: auto;
      width: 8%;
   }

   input#email {
    text-align: left;
   }

   .add-to-cart input {
      text-align: left;
      margin-top: 3px;
   }

   select#month {
      width: 47%;
      float: left;
      height: 49px;
   }

   select#year {
      width: 47%;
      float: left;
      height: 49px;
   }

   input#submit-btn {
      text-align: center;
      color: #fff;
      border: none;
   }


   /*custom*/
   .all-section-inner {
    padding: 0px 0px; 
  }

  h1 {
    text-align: center;
    padding-top: 0px;
  }

  .accordion-item .accordion-title h2 {
    margin: 0;
    justify-content: space-between;
    color: #fff;
    font-weight: 000;
    font-size: 17px;
    line-height: 1;
    font-weight: 100;
    padding: 19px 19px;
    border-radius: 0px;
    background-color: #0099cc;
    font-family: 'Myriad Pro';
  }

  .accordion-item .accordion-title h2 i {
    float: right;
  }

  input#paypalSubmit {
    text-align: center;
    color: #fff;
    border: none;
}

.accordion-item .accordion-title.active-title{
  height: auto;
}

.paypalButton{
  margin-top: 5%!important;
}

/*paypal*/
#paypal-button-container-popup{
  margin-top: 6%;
}


/*button*/
#addProduct{
  float: right!important;
  font-size: 15px; 
}

/*pagination*/
.dataTables_info{
  display: none;
}

.dataTables_wrapper .dataTables_paginate {
    display: none;
}

.dataTables_length{
  display: none;
}

#myTable_filter input {
    padding: 0.375rem 0.75rem;
    font-size: 15px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    box-shadow: none;
    border-radius: 50px;
    height: 35px;
    width: 210px;
}
</style>

<link href="http://localhost:8080/Netwave/public/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>

@endsection


