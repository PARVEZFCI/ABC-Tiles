@extends('expert.master')

@section('title', 'Productdetails Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

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
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-user-circle"></i><span> Product Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Product details List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                  @if($user_role_per->add == 1)
                <a href="{{url('admin/productdetailsadd')}}" class="btn btn-dark">+add new product</a>
                @endif
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Product Type</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Specification</th>
                        <th>Unit of measurement</th>
                        <th>Grade</th>
                        <th>Unit Price</th>
                        <th>Date</th>
                        
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1; @endphp
                  @foreach($details as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->product_type}}</td>
                        <td>{{$row->product_code}}</td>  
                        <td>{{$row->product_name}}</td>
                        <td>{{$row->product_specification}}</td> 
                        
                        <td>{{$row->unit_mesurement}}</td>
                        <td>{{$row->grade}}</td> 
                        <td>{{$row->unit_price}}</td>
                        <td>{{$row->date}}</td> 
                        <td>
                          
                         @if($user_role_per->edit == 1)

                            <a href="{{url('admin/productEdit/'.$row->id)}}" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                            Edit
                          </span>
                          </a>
                         @endif
                          @if($user_role_per->delete == 1)
                            <a href="{{url('admin/productdelete/'.$row->id)}}" class="btn btn-danger btn-sm waves-effect waves-light" id="delete"> 
                            <i class="fa fa-clipboard"></i> <span> 
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