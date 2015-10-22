@extends('layout.base_layout')
@section('content')
        <!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Add New User</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">add new user</li>
        </ol>
    </div>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="error_message">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if( session()->has('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <!-- Panel Static Lables -->
                <div class="panel">
                    <div class="panel-body container-fluid">
                        {!!  Form::open(array('url'=>'add_new','method'=>'POST'))  !!}

                        <div class="form-group form-material">
                            <label class="control-label" >Username</label>
                            {!! Form::text('username','',array('class'=>'form-control','placeholder'=>'Username')) !!}

                       </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Email</label>
                            {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'email')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password"
                                   placeholder="Password" />
                        </div>
                        <div class="form-group form-material">

                                <span class="input-group-btn">
                                      <button class="btn btn-outline btn-default">Submit</button>
                                </span>

                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
                <!-- End Panel Static Lables -->
            </div>
            </div>
        </div>
    </div>

@endsection