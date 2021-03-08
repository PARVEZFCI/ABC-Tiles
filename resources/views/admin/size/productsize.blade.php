@extends('expert.master')

@section('title', 'Product Specification Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

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
                <i class="fa fa-user-circle"></i><span> Product Specification  Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Specification List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                <a href="{{url('admin/addproductsize')}}" class="btn btn-dark">+add new Specification</a>
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Product Type Name</th>
                        <th>Product Specification</th>
                        
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                	@php $i=1; @endphp
                   @foreach($productsize as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->product_type}}</td>
                        <td>{{$row->size}}</td>  
                        <td>

                           <a href="{{url('admin/sizeEdit/'.$row->id)}}" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> <span> 
                            Edit
                          </span>
                          </a>
                          
                            <a href="{{url('admin/sizedelete/'.$row->id)}}" class="btn btn-danger btn-sm waves-effect waves-light" id="delete"> 
                            <i class="fa fa-delete"></i> <span>X  
                           Delete 
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