@extends('layout.base_layout_client')
@section('content')
    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">GAF DEPLOYMENT SYSTEM </h1>
        </div>
        <div class="page-content">
            <!-- Panel -->
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>
                                <img class="margin-right-10" src="{{ asset('assets/images/GAF.png') }}"
                                     alt="..."> </h4>
                            <address>
                                <abbr title="Mail">Name:</abbr>&nbsp;&nbsp; <strong>{{ $personnel_credentials->firstname.' '.$personnel_credentials->middlename.' '.$personnel_credentials->lastname }}</strong>
                                <br>
                                <abbr title="Mail">Department:</abbr>&nbsp;&nbsp;{{ $personnel_credentials->depart }}
                                <br>
                                <abbr title="Phone">Last Prom. Date:</abbr>&nbsp;&nbsp; {{ $personnel_credentials->promdate }}
                                <br>
                                <abbr title="Fax">Rank:</abbr>&nbsp;&nbsp;
                                @if($personnel_credentials->rankno=='1')
                                        {{ 'Pte' }}
                                @elseif($personnel_credentials->rankno=='2')
                                    {{ 'L/Cpl' }}
                                @elseif($personnel_credentials->rankno=='3')
                                    {{ 'Cpl' }}
                                @elseif($personnel_credentials->rankno=='4')
                                    {{ 'Sgt' }}
                                @elseif($personnel_credentials->rankno=='5')
                                    {{ 'S/Sgt' }}
                                @elseif($personnel_credentials->rankno=='6')
                                    {{ 'WOII' }}
                                @elseif($personnel_credentials->rankno=='7')
                                    {{ 'WOI' }}
                                @endif
                            </address>
                        </div>
                        <div class="col-md-3 col-md-offset-6 text-right">
                            <h4>Service No.</h4>
                            <p>
                                <a class="font-size-20" href="javascript:void(0)">{{ $personnel_credentials->serviceno }}</a>

                            </p>
                            <address>
                                <abbr title="Mail">Promotion:</abbr>&nbsp;&nbsp;@if($personnel_credentials->isDue)
                                    <span class="label label-success">Due</span>
                                @else
                                    <span class="label label-danger">Not Due</span>
                                @endif
                                <br>

                            </address>
                            <span>Birth Date: {{ $personnel_credentials->dob }}</span>
                            <br>
                            <span>Enlistment Date:{{ $personnel_credentials->doe }}</span>
                        </div>
                    </div>

                    <div class="page-invoice-table table-responsive">
                        <table class="table table-hover text-right">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Description</th>
                                <th class="text-right">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    1
                                </td>
                                <td class="text-left">
                                    Nomination for peacekeeping
                                </td>
                                <td>
                                    @if($personnel_credentials->nominated_for_peace == '1')
                                        {{ 'Nominated' }}
                                    @elseif($personnel_credentials->nominated_for_peace == '0' || $personnel_credentials->nominated_for_course == 'NULL')
                                        {{ 'NULL' }}
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <td class="text-center">
                                    2
                                </td>
                                <td class="text-left">
                                    Nomination for Promotion
                                </td>
                                <td>
                                   @if($personnel_credentials->nominated_for_prom == '1')
                                       {{ 'Nominated' }}
                                       @elseif($personnel_credentials->nominated_for_prom == '0' || $personnel_credentials->nominated_for_course == '')
                                    {{ 'NULL' }}
                                       @endif
                                </td>

                            </tr>
                            <tr>
                                <td class="text-center">
                                    3
                                </td>
                                <td class="text-left">
                                    Nomination for Course
                                </td>
                                <td>
                                    @if($personnel_credentials->nominated_for_course == '1')
                                        {{ 'Nominated' }}
                                    @elseif($personnel_credentials->nominated_for_course == '0' || $personnel_credentials->nominated_for_course == 'NULL')
                                        {{ 'NULL' }}
                                    @endif
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="text-right">
                        <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                                onclick="javascript:window.print();">
                            <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>
    <!-- End Page -->

@endsection