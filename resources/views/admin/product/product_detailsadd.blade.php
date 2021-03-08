@extends('expert.master')

@section('title', 'Product details Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

@include('expert.sidebar')

@include('expert.topbar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">

.table-responsive {
    white-space: normal;
}
.dataTables_length{
  display: none;
}
</style>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">

        <?php if (session('message')): ?>
        <div class="col-lg-12">
            <div class="alert alert-{{session('class')}} alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span>{{session('message')}}</span></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-lg-8">

          <div class="card bg-dark">
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-list"></i><span>  Product Details </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Product  
              </div> 
            </div>
            
            <div class="card-body">

              <form action="{{url('admin/storeproductadd')}}" id="qcat" method="post">
              @csrf

              <div class="row">

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Product type name </label>
                          <select class="form-control" id="product_type" name="product_type">
                          	<option>select Product type</option>
                          @foreach($type as $row) 
                          <option value="{{$row->product_type_name}}">{{$row->product_type_name}}</option>
                          @endforeach
                          	
                          </select>
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Produt  Code </label>
                          <input required="" type="text" class="form-control"  name="product_code" placeholder="Enter product  code">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Produt  Name </label>
                          <input required="" type="text" class="form-control"  name="product_name" placeholder="Enter product  name">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Product Specification </label>
                          
                            <select name="product_specification" id="product_specification" class="form-control">
                              <option value="">Select Product Specification </option>

                            </select>
                         
                      </div>
                  </div>

          
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Unit of Mesurement </label>
                          <input value="0" type="text" class="form-control"  name="unit_mesurement" placeholder="Entr unit mesurement">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Grade </label>
                          <select id="grade" class="form-control" name="grade">
                          	<option value="">Select Grade</option>
                          	<option>A</option>
                          	<option>B</option>
                          	
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Unit Price </label>
                          <input type="text" required="" name="unit_price" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Comission /SQFT </label>
                          <input type="text" value="0" name="comission" class="form-control" placeholder=" ENTR Comission ">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Bonus </label>
                          <input type="text" value="0" name="bonus" name="bonus" class="form-control" placeholder="Enter Bonus">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Bonus Option </label>
                          <select name="bonus_option" class="form-control">
                            <option value="0">Select Bonus Option </option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date </label>
                          <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date" class="form-control" placeholder=" ENTR bonus  ">
                      </div>
                  </div>




                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="{{url('admin/productdetails')}}" class="btn btn-danger btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>

              </div>

            </form>

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
    

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script type="text/javascript">

  $(document).ready(function() {

    $("#product_type").select2();
    $("#product_specification").select2();
    $("#grade").select2();
   
});

  
  $(document).ready(function() {
         $('select[name="product_type"]').on('change', function(){
             var product_type = $(this).val();
            console.log(product_type);
             
             if(product_type) {
                 $.ajax({
                     url: "{{  url('admin/producttypesize/') }}/"+product_type,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        
                        var d =$('select[name="product_specification"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="product_specification"]').append('<option value="'+ value.size +'">' + value.size + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });
</script>

  @endsection