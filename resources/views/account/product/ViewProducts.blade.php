@extends('layouts.main')
@section('content')

<?php 
$segment = Request::segments(); 
?>

<main class="my-cart">
    <div class="my-account-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-page-wrapper">
                        <div class="row">
                        @include('account/account_sidebar')

                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="orders" role="#">
                                        <div class="myaccount-content">
                                            <h3>Products</h3>

                                            <form method="post" action="" enctype="multipart/form-data">
                                        

                                           

                                                <div class="form-group row justify-content-center">
                                                    {!! Form::label('images', 'Product Information', ['class' => 'col-md-12 control-label']) !!}
                                                  
                                                    <div class="col-md-12">
                                                     
                                                        <div class="max-text">
                                                              @foreach($listproduct as $value)
                                                              <?php
                                                              $vendorName = DB::table('users')->where('id',$value->user_id)->first()->name;
                                                              ?>
                                                            <div class="gallery_css">
                                                                <img style="width: 100%;padding: 10px;" alt="" class="img-responsive" id="banner1" src="{{asset($value->image)}}">
                                                                 <div class="max-text">
                                                                    <p>Name:{{$value->name}}</p>
                                                                   <p> Vendor Name:{{$vendorName}}</p>
                                                                   
                                                                    </div>
                                                                        
                                                                	<a href="{{asset($value->image)}}"  download class="theme-btn btn-one">Download</a>
                                                                	
                                                            </div>  
                                                               
                                                        
                                                   
                                                     @endforeach
                                                        </div>
                                                       
                                                    </div>
                                                  

                                                
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
    </div> 
</main>

@endsection
@section('css')
<style>
a.delete_css {
    position: absolute;
    background: red;
    padding: 5px 10px;
    color: #fff;
    font-weight: 800;
}

.gallery_css {
    width: 18%;
    float: left;
    margin: 0px 4px;
}

#banner1{
    height: 168px;width: 168px;
}

/*button*/
#uploadImage{
    float: left;
    width: 15%;
    font-size: 15px;
}

#button_div{
    margin-top: 12px;
}
</style>
@endsection
@section('js')
 <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>

<script>
    $(document).ready(function () {

        @if(\Session::has('message'))
        // $.toast({
        //     heading: 'Success!',
        //     position: 'top-center',
        //     text: '{{session()->get('message')}}',
        //     loaderBg: '#ff6849',
        //     icon: 'success',
        //     hideAfter: 3000,
        //     stack: 6
        // });
        @endif
    })

</script>


@endsection