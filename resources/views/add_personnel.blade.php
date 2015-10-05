@extends('layout.base_layout')
@section('content')
        <!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Add New Personnel</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">add new personnel</li>
        </ol>
    </div>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="error_message">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if( session()->has('success_message') )
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <!-- Panel Static Lables -->
                <div class="panel">
                    <div class="panel-body container-fluid">
                        {!!  Form::open(array('url'=>'add_personnel','method'=>'POST'))  !!}

                        <div class="form-group form-material">
                            <label class="control-label" >Service No.</label>
                            {!! Form::text('serviceno','',array('class'=>'form-control','placeholder'=>'Service Number')) !!}

                        </div>
                        {{--<div class="form-group form-material">--}}
                            {{--<label class="control-label" >Rank</label>--}}
                            {{--{!! Form::select('rankno','',array('class'=>'form-control','placeholder'=>'Service Number')) !!}--}}

                        {{--</div>--}}
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Rank</label>
                            <select  name="rankno" class="form-control" id="select">
                                <option disabled="disabled" selected >Select</option>
                                <option value="Pte">Pte</option>
                                <option vlaue="L/Cpl">L/Cpl</option>
                                <option value="Clp">Clp</option>
                                <option value="Sgt">Sgt</option>
                                <option value="S/Sgt">S/Sgt</option>
                                <option value="WOII">WOII</option>
                                <option value="WOI">WOI</option>
                            </select>
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Department</label>
                            {!! Form::text('depart','',array('class'=>'form-control','placeholder'=>'Department')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Firstname</label>
                            {!! Form::text('firstname','',array('class'=>'form-control','placeholder'=>'Firstname')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Middlename</label>
                            {!! Form::text('middlename','',array('class'=>'form-control','placeholder'=>'Middlename')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Lastname</label>
                            {!! Form::text('lastname','',array('class'=>'form-control','placeholder'=>'Lastname')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Date of Birth</label>
                            {!! Form::text('dob','',array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Date of Enlistment</label>
                            {!! Form::text('doe','',array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Next of Kin</label>
                            {!! Form::text('nok','',array('class'=>'form-control','placeholder'=>'Next of Kin')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label">Promotion Date</label>
                             {!! Form::text('promdate','',array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        {{--<div class="form-group form-material">--}}
                            {{--<label class="control-label">Marital Status</label>--}}
                              {{--{!! Form::text('promdate','',array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}--}}
                        {{--</div>--}}
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Marital Status</label>
                            <select  name="maritalstatus" class="form-control" id="select">
                                <option disabled="disabled" selected >Select</option>
                                <option value="Single">Single</option>
                                <option vlaue="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Seperated">Seperated</option>
                            </select>
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Gender</label>
                            <select  name="gender" class="form-control" id="select">
                                <option disabled="disabled" selected >Select</option>
                                <option value="Male">Male</option>
                                <option vlaue="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group form-material">
                            <label class="control-label">Religion</label>
                            {!! Form::text('religion','',array('class'=>'form-control','placeholder'=>'Religion')) !!}
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