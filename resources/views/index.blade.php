@extends('layout.base_layout')
@section('content')
  <div class="page">
    <div class="page-content padding-30 container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-3 col-md-12">
          <div class="row height-full">
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetLinepoint">
                <div class="widget-content widget-radius bg-blue-600 white">
                  <div class="padding-top-25 padding-horizontal-30" style="height:calc(100% - 80px);">
                    <p>Total Troop (Army)</p>
                    <p class="font-size-30" style="line-height: 1;">{{ $army }} Army</p>
                    <p class="blue-200">Summary</p>
                  </div>
                  <div class="ct-char" style="height: 80px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetLinepoint">
                <div class="widget-content widget-radius bg-purple-600 white">
                  <div class="padding-top-25 padding-horizontal-30" style="height:calc(100% - 80px);">
                    <p>Total Troop (Navy)</p>
                    <p class="font-size-30" style="line-height: 1;">{{ $navy }} Navy</p>
                    <p class="blue-200">Summary</p>
                  </div>
                  <div class="ct-char" style="height: 80px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetLinepoint">
                <div class="widget-content widget-radius bg-red-600 white">
                  <div class="padding-top-25 padding-horizontal-30" style="height:calc(100% - 80px);">
                    <p>Total Troop (Airfoce)</p>
                    <p class="font-size-30" style="line-height: 1;">{{ $airforce }} Airforce</p>
                    <p class="blue-200">Summary</p>
                  </div>
                  <div class="ct-char" style="height: 80px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
              <!-- End Panel Today Sale's -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
  @endsection