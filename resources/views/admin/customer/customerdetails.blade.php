@extends('expert.master')

@section('title', 'customer Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

@include('expert.sidebar')

@include('expert.topbar')
 
 <style type="text/css">

   @media print {
.noprint{
  display: none;
}
}
 </style>


<div class="clearfix"></div>
	
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
                <i class="fa fa-user-circle"></i><span> Customer Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Customer List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                  @if($user_role_per->add == 1)
                <a href="{{url('admin/addcustomer')}}" class="btn btn-dark">+add new customer</a>
                
                @endif
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Customer Code</th>
                        <th>Customer Name</th>
                         <th>customer address</th>
                          <th>customer phone</th>
                        <th>customer city</th>
                        <th>customer email</th>
                        <th>openig due</th>
                      
                        <th>customer status</th>
                        
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1;
                $setting = DB::table('settings')
                          ->first();       
             @endphp
               @foreach($customer as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->customer_code}}</td>
                        <td>{{$row->customer_name}}</td> 
                        <td>{{$row->customer_address}}</td> 
                        <td>{{$row->customer_phone}}</td> 
                        <td>{{$row->customer_city}}</td>
                        <td>{{$row->customer_email}}</td> 

                        <td>
                           @if($setting->cndition==0)
                          {{$row->opening_due_no}}

                          @else
                          0
                         @endif
                        </td>
                        
                        <td>
                          
                          @if($row->customer_status==1)
                           <a href="{{URL::to('admin/deactive/'.$row->id)}}" class="btn btn-sm btn-success">active</a>

                           @else
                           <a href="{{URL::to('admin/active/'.$row->id)}}" class="btn btn-sm btn-danger">deactive</a>

                           @endif
                           

                        </td>
                        <td >
                          @if($user_role_per->edit == 1)

                             <a  href="{{url('admin/customerEdit/'.$row->id)}}" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> <span> 
                            Edit
                          </span>
                          </a>
                          @endif
                          
                          @if($user_role_per->delete == 1)

                            <a href="{{url('admin/customerdlt/'.$row->id)}}" class="btn btn-danger btn-sm waves-effect waves-light" id="delete"> X
                            <i class="fa fa-delete"></i> <span> 
                           Delete 
                          </span>
                          </a> 
                          
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
    </script>
  @endsection