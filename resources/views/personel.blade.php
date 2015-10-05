@extends('layout.base_layout')
@section('content')
  <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Personnel Table</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Personnel</li>
    </ol>
  </div>
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
      @endif
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
          <thead>
          <tr>
            <th>Service No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Action</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
            <th>Service No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Action</th>
          </tr>
          </tfoot>

          <tbody>
          @foreach($personnel as $person)
          <tr>
            <td>{{ $person->serviceno }}</td>
            <td>{{ $person->firstname }}&nbsp;{{ $person->lastname }} </td>
            <td>{{ $person->gender }}</td>
            <td>{{ $person->dob}}</td>
            <td>{{ $person->depart }}</td>
            <td>{{ $person->rankno }}</td>
            <td> <a href="{{ url('/edit_personnel',$person->id) }}"><i class="icon wb-eye" aria-hidden="true"></i></a> &nbsp; <a href="{{ url('/personel',$person->id) }}"><i class="icon wb-trash" aria-hidden="true"></i></a></td>
          </tr>
          @endforeach
          </tbody>

        </table>
      </div>
    </div>
    <!-- End Panel FixedHeader -->
  </div>
  </div>

@endsection