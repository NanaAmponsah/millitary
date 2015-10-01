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
                    <p>Total Troop</p>
                    <p class="font-size-30" style="line-height: 1;">450000000 USD</p>
                    <p class="blue-200">Last Sale 23.45 USD</p>
                  </div>
                  <div class="ct-chart" style="height: 80px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetSaleBar">
                <div class="widget-content widget-radius bg-purple-600 white">
                  <div class="padding-top-25 padding-horizontal-30">
                    <div class="row no-space">
                      <div class="col-xs-6">
                        <p>Today Sale's</p>
                        <p class="purple-200">2% higher than last month</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p class="font-size-30 text-nowrap">$ 14,500</p>
                      </div>
                    </div>
                  </div>
                  <div class="ct-chart" style="height: 120px;"></div>
                </div>
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