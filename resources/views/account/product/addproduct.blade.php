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
            <br>
          <h1>Add Product</h1>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- banner_sec -->
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
                            <!-- My Account Tab Menu End -->
    
                            <!-- My Account Tab Content Start -->

                                <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                   
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="orders" role="#">
                         
                                        <div class="myaccount-content">
                     
                                            <h3>Create New Product</h3>
                     <form method="post" action="{{route('submitproduct')}}" enctype="multipart/form-data">
                                             @csrf

                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


  <div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('short_detail') ? 'has-error' : ''}}">
    {!! Form::label('short_detail', 'Short Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('short_detail', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('short_detail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
         <div class="max-text">
        <img alt="" class="img-responsive" id="banner1" 
        src="{{ isset($product)?asset($product->image):asset('images/upload.jpg') }}" style=" width: 30%; "> 
        <br/>
      </div>
        <br/>
        {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<br>
<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center" id="button_div">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'theme-btn btn-one', 'id' => 'createBtn']) !!}
    </div>
</div>


                                           </form>
  

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
    </div>



@endsection
@section('css')
<style type="text/css">
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

/*button*/
#createBtn{
  width: 55%;
  font-size: 15px;
}

#button_div{
    margin-top: 18px;
}


</style>
@endsection
@section('js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.replace( 'summary-ckeditor1' );
  CKEDITOR.replace( 'summary-ckeditor2' );
</script>
<script type="text/javascript">
            $(document).ready(function() { $("#e1").select2(); });
</script>

<script type="text/javascript">
            $(document).ready(function() { $("#e2").select2(); });
</script>
@endsection