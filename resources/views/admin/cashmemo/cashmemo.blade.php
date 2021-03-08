@extends('expert.master')

@section('title', 'cashmemo Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

@include('expert.sidebar')

@include('expert.topbar')

<style type="text/css">
   @media print {
.noprint{
  display: none;
}
}

.raees-spinner-wrap {
      background: #fff none repeat scroll 0 0;
      height: 100%;
      position: fixed;
      width: 100%;
      z-index: 999;
  }
  .raees-spinner-wrap .spinner {
      left: 50%;
      margin: -20px 0 0 -25px;
      position: absolute;
      top: 50%;
  }
  .raees-spinner-wrap .spinner .rect1 {
      background-color: #ffc400;
  }
  .raees-spinner-wrap .spinner .rect2 {
      background-color: #009ce9;
  }
  .raees-spinner-wrap .spinner .rect3 {
      background-color: #ffc400;
  }
  .raees-spinner-wrap .spinner .rect4 {
      background-color: #333;
  }
  .raees-spinner-wrap .spinner .rect5 {
      background-color: #fc07dc;
  }


</style>


<div class="clearfix"></div>

<div class="raees-spinner-wrap">
      <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
      </div>
  </div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          <?php if (session('message')): ?>
              <div class="alert alert-{{session('class')}} alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
                <div class="alert-message"><span>{{session('message')}}</span></div>
              </div>
        <?php endif; ?>

          <div class="card bg-dark">
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-user-circle"></i><span> Cashmemo Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Cashmemo List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                 @if($user_role_per->add == 1)
                <a href="{{url('admin/cashmemo')}}" class="btn btn-dark">+add new Cashmemo</a>
                @endif
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                      <b>
                       <th class="noprint" width="8%" class="text-center">Action</th>
                      <!--   <th width="5%">SN</th>-->
                        
                        <th>Date</th>
                        <th>Customer Name</th>
                       
                        <th>TT/Deposit</th>
                        <th>Miss. Dep.</th>
                        <th>Total</th>
                        <th>Prev. Due</th>
                        <th><b> Balance </b> </th>
                        </b>
                        
                       
                    </tr>
                </thead>
                <tbody>
            
            @php $i=1;  $setting = DB::table('settings')
        ->first();   @endphp
              @foreach($cashmemo as $key => $data)
              
             
              
                    <tr>
                     

                      <td class="noprint">
                          
                           @if($user_role_per->admin == 1)
                        @if($data->sms_status==1)

                         @else

                         @php
                          $count =  strlen($data->customer_phone);
                         @endphp

                         @if($count == 11)
                         
                          <a href="{{url('admin/otpmessage/'.$data->id)}}"  class="btn btn-info btn-sm waves-effect waves-light"> 
                            <i class="fa fa-envelope"></i> <span> 
                          
                          </span>
                          </a> 
                          @endif

                          
                          @endif
                        @endif
                         
                          
                        @if(in_array($data->id, $editable_ids))

                         

                         @if($user_role_per->delete == 1)

                          <a href="{{url('admin/dltcashmemo/'.$data->id)}}" id="delete" class="btn btn-danger btn-sm waves-effect waves-light "> 
                            <i class="fa fa-trash"></i> <span> 
                          
                          </span>
                          </a> 

                          @endif
                          
                          
                          @if($user_role_per->edit == 1)
                          
                            <a href="{{url('admin/editCashmemo/'.$data->cash_memo_id)}}" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> <span> 
                          
                          </span>
                          </a> 

                        @endif
                          
                        @endif

                       
                          
                           
                          
                       
                        
                            <a href="{{url('admin/billprint/'.$data->cash_memo_id)}}" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                       
                          </span>
                          </a>
                         
                          

                        </td>
                        <!-- <td>{{$i++}}</td> -->
                      
                        <td>{{ date("d-m-Y", strtotime($data->date)) }}</td>  
                        <td>{{$data->customer_name}}</td>
                     
                       
                        <td>{{$data->tt_deposit_balance}}</td>
                        <td>{{$data->missig_deposit_balance}}</td>
                        <td>{{$data->total}}</td>
                        <td>
                        @if($setting->cndition==0)

                       {{$data->Prev_due}}

                       @else
                       {{$data->f_prev_due}}
                       @endif
                          
                            </td> 
                        <td>
                             @if($setting->cndition==0)

                       {{$data->balance}}

                       @else
                       {{$data->f_balance}}
                       @endif
                            </td>
                      
                        
                        
                   </tr>
           @endforeach
                </tbody>
            </table>
            </div>
            </div>
          </div>
               
          </div>
        </div>
      </div><!--End Row-->
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   

  @include('expert.copyright')

  @endsection

  @section('js')
    <script>
        $(document).ready(function() {
            dataTableLoad({
                curUrl: "{{route('Admin.userrole.index')}}",
                addUrl: "{{route('Admin.userrole.create')}}"
            });
        });

        /*document.addEventListener("DOMContentLoaded", () => {
          $('.delete').removeClass('d-none');
        });*/

         jQuery(window).load(function () {
        jQuery(".raees-spinner-wrap").fadeOut(1000);
    });
    </script>
  @endsection