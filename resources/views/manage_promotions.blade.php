@extends('layout.base_layout')
@section('content')
    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">Manage Promotions</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Promotion</li>
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

                {!! Form::open(array('url'=>'nominate', 'method'=>'post','role'=>'search','id'=>'update')) !!}
                <div class="panel-body">
                    <div style="float:right;">
                        <div class="form-group">
                            <select class="form-control" id="sel1" name="action" style="width: 200px;" onchange="submit()">
                                <option disabled="disabled" selected >Action</option>
                                <option value="Promotion"> Nominate for Promotion</option>
                                <option value="Undo_promote">Remove Nomination</option>
                                <option value="Army">Army</option>
                            </select>
                        </div>
                        <noscript>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </noscript>

                    </div>

                    <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                        <thead>
                        <tr>

                            <th>Service No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Department</th>
                            <th>Rank</th>
                            <th>Prom. Status<th>
                            <th>Select</th>
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
                            <th>Prom. Status<th>
                            <th>Select</th>
                        </tr>
                        </tfoot>

                        <tbody>

                        @foreach($manage_proms as $person)
                            <tr>

                                <td>{{ $person->serviceno }}</td>
                                <td>{{ $person->firstname }}&nbsp; {{ $person->middlename }}&nbsp;{{ $person->lastname }} </td>
                                <td>{{ $person->gender }}</td>
                                <td>{{ $person->dob}}</td>
                                <td>{{ $person->depart }}</td>
                                <td>@if($person->rankno=='1')
                                        {{ 'Pte' }}
                                    @elseif($person->rankno=='2')
                                        {{ 'L/Cpl' }}
                                    @elseif($person->rankno=='3')
                                        {{ 'Cpl' }}
                                    @elseif($person->rankno=='4')
                                        {{ 'Sgt' }}
                                    @elseif($person->rankno=='5')
                                        {{ 'S/Sgt' }}
                                    @elseif($person->rankno=='6')
                                        {{ 'WOII' }}
                                    @elseif($person->rankno=='7')
                                        {{ 'WOI' }}
                                    @endif
                                </td>
                                {{--<td>--}}
                                    {{--@if($person->isDue)--}}
                                        {{--<span class="label label-success">Due</span> {{ App\Personnel::$ranks[$person->rankno] }}--}}
                                    {{--@else--}}
                                        {{--<span class="label label-danger">Not Due</span>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                                <td>
                                    @if($person->nominated_for_prom=='1')
                                        <span class="label label-success">Nominated</span>
                                    @else
                                        <span class="label label-danger">Not Nominated</span>
                                    @endif
                                </td>

                                <td><input type="checkbox" name="nominate[]" value="{{$person->id}}"></td>

                            </tr>
                        @endforeach


                        </tbody>

                    </table>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- End Panel FixedHeader -->
        </div>
    </div>

@endsection