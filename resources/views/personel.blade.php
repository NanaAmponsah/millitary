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
      <header class="panel-heading">
        <div class="panel-actions"></div>
        <h3 class="panel-title">Basic</h3>
      </header>
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
          <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Date</th>
            <th>Salary</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Date</th>
            <th>Salary</th>
          </tr>
          </tfoot>
          <tbody>
          <tr>
            <td>Damon</td>
            <td>5516 Adolfo Green</td>
            <td>Littelhaven</td>
            <td>85</td>
            <td>2014/06/13</td>
            <td>$553,536</td>
          </tr>
          <tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Panel FixedHeader -->
  </div>
  </div>

@endsection