@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Create New vendorproduct</h3>
                    
                        <a class="btn btn-success pull-right" href="{{url('/admin/vendorproduct')}}">
                            <i class="icon-arrow-left-circle"></i> View vendorproduct</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => '/admin/vendorproduct', 'files' => true]) !!}

                    @include ('admin.vendorproduct.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
        </div>
        @include('layouts.admin.footer')
    </div>
@endsection
