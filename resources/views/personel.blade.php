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
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                        '<select class="form-control width-full"><option value=""></option></select>'
                )
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                          var val = $.fn.dataTable.util.escapeRegex(
                                  $(this).val()
                          );

                          column
                                  .search(val ? '^' + val + '$' : '',
                                  true, false)
                                  .draw();
                        });

                column.data().unique().sort().each(function(
                        d, j) {
                  select.append('<option value="' + d +
                          '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);
  </script>
@endsection