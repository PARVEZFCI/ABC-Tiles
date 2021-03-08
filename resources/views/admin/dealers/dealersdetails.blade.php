@extends('expert.master')

@section('title', 'Lab Test Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

@include('expert.sidebar')

@include('expert.topbar')

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
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-user-circle"></i><span> Dealers Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Dealers Manage List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                <a href="{{url('admin/addealer')}}" class="btn btn-warning">+add new Dealers</a>
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Dealer Code</th>
                        <th>Dealer Name</th>
                        <th>Dealer City & post code</th>
                        <th>Dealer phone</th>
                      
                        <th>Dealer Email</th>
                        <th>Dealer Address</th>
                        <th>Monthly Target</th>
                        <th>Quarterly Target</th>
                       <th>Opening Due</th>
                        
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1; @endphp
                @foreach($dealers as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->dealer_code}}</td>
                        <td>{{$row->dealer_name}}</td>  
                        <td>{{$row->dealer_city}}</td>
                        <td>{{$row->dealer_phone}}</td> 
                        <td>{{$row->dealer_email}}</td>
                        <td>{{$row->dealer_address}}</td> 
                        <td>{{$row->monthly_target}}</td>
                        <td>{{$row->quarterly_target}}</td> 
                        <td>{{$row->opening_due}}</td>
                       
                        <td>
                          
                            <a href="{{url('admin/dealerdlt/'.$row->id)}}" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-clipboard"></i> <span> 
                           Delete 
                          </span>
                          </a> 
                        
                            <a href="{{url('admin/testresprint')}}" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                            Edit
                          </span>
                          </a>
                         
                          

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