@extends('layout.base_layout')
@section('content')
        <!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Edit Personnel Info.</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">edit personnel info</li>
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
                        {!!  Form::open(array('method'=>'PUT','url'=>'/edit_personnel/'.$personnel->id ))!!}

                        <div class="form-group form-material">
                            <label class="control-label" >Service No.</label>
                            {!! Form::text('serviceno',$personnel->serviceno,array('class'=>'form-control','placeholder'=>'Service Number')) !!}

                        </div>
                        {{--<div class="form-group form-material">--}}
                        {{--<label class="control-label" >Rank</label>--}}
                        {{--{!! Form::select('rankno','',array('class'=>'form-control','placeholder'=>'Service Number')) !!}--}}

                        {{--</div>--}}
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Rank</label>
                            <select  name="rankno" class="form-control" id="select">
                                <option value="{{ $personnel->rankno }}" selected >{{ $personnel->rankno }}</option>
                                <option value="Pte">Pte</option>
                                <option value="L/Cpl">L/Cpl</option>
                                <option value="Clp">Clp</option>
                                <option value="Sgt">Sgt</option>
                                <option value="S/Sgt">S/Sgt</option>
                                <option value="WOII">WOII</option>
                                <option value="WOI">WOI</option>
                            </select>
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Department</label>
                            {!! Form::text('depart',$personnel->depart,array('class'=>'form-control','placeholder'=>'Department')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Firstname</label>
                            {!! Form::text('firstname',$personnel->firstname,array('class'=>'form-control','placeholder'=>'Firstname')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Middlename</label>
                            {!! Form::text('middlename',$personnel->middlename,array('class'=>'form-control','placeholder'=>'Middlename')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Lastname</label>
                            {!! Form::text('lastname',$personnel->lastname,array('class'=>'form-control','placeholder'=>'Lastname')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Date of Birth</label>
                            {!! Form::text('dob',$personnel->dob,array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Date of Enlistment</label>
                            {!! Form::text('doe',$personnel->doe,array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" >Next of Kin</label>
                            {!! Form::text('nok',$personnel->nok,array('class'=>'form-control','placeholder'=>'Next of Kin')) !!}
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label">Promotion Date</label>
                            {!! Form::text('promdate',$personnel->promdate,array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}
                        </div>
                        {{--<div class="form-group form-material">--}}
                        {{--<label class="control-label">Marital Status</label>--}}
                        {{--{!! Form::text('promdate','',array('class'=>'form-control','placeholder'=>'dd/mm/yyyy')) !!}--}}
                        {{--</div>--}}
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Marital Status</label>
                            <select  name="maritalstatus" class="form-control" id="select">
                                <option value="'{{ $personnel->maritalstatus }}" selected > {{ $personnel->maritalstatus }}</option>
                                <option value="Single">Single</option>
                                <option vlaue="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Seperated">Seperated</option>
                            </select>
                        </div>
                        <div class="form-group form-material">
                            <label class="control-label" for="select">Gender</label>
                            <select  name="gender" class="form-control" id="select">
                                <option value="{{ $personnel->gender }}" selected >{{ $personnel->gender }}</option>
                                <option value="Male">Male</option>
                                <option vlaue="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group form-material">
                            <label class="control-label">Religion</label>
                            {!! Form::text('religion',$personnel->religion,array('class'=>'form-control','placeholder'=>'Religion')) !!}
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