@extends('expert.master')

@section('title', 'Dashboard - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

<body onload="info_noti()">

@include('expert.sidebar')

@include('expert.topbar')

<div class="clearfix"></div>
    
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
           @php

             $setting = DB::table('settings')
            ->first();


          @endphp
          @if($setting->cndition==0)
          <div class="card " style="margin-bottom: 0px; background: #febe10;">

             
               <div class="card-header text-white " style="background-color: #FF002A;">
              <span> Welcome, AB Ceramic Industries &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span style="text-align: right;" class="text-right">Total Message:   {{$setting->Total_message}}</span>
           </div>

           
             
          </div>

          @else

          <div class="card " style="margin-bottom: 0px; background: #0C86EE;">

           <div class="card-header text-white" style="background-color: #0C86EE;">
              Welcome, AB Ceramic Industries 
           </div>
             
          </div>

          @endif
        </div>
      </div><!--End Row-->

      <!-- <div class="row mt-4">

        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-purple shadow-purple">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                    500
                  </h6>
                  <span class="text-white">Cash in Hand</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-info shadow-info">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                   500
                </h6>
                  <span class="text-white">Bank</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-danger shadow-danger">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                     500
                  </h6>
                  <span class="text-white">Receivable</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-success shadow-success">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                     500
                 </h6>
                  <span class="text-white">Payable</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>

      </div>  -->

     
  </div>
</div>  

  @include('expert.copyright')

  @endsection

  @section('js')
  
  @endsection