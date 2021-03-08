<?php $__env->startSection('title', 'Cash-memo -'.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<style type="text/css">
  input {
    text-align: center;
  }
</style>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

 <div id="wrapper" class="toggled">
<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="clearfix"></div>
    
  <div class="content-wrapper">
    <div class="container-fluid">

      <?php if (session('message')): ?>
      <div class="col-lg-12">
          <div class="alert alert-<?php echo e(session('class')); ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
            <div class="alert-message"><span><?php echo e(session('message')); ?></span></div>
          </div>
      </div>
      <?php endif; ?>

      <form id="purchase" action="<?php echo e(url('admin/cashmemomanage')); ?>" method="post">
           <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Cash Memo Add </span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-cart-plus"></i> Cash Memo  
              </div> 
            </div>
    <h4 class="text-center pt-3">Select Customer</h4><hr>

       <div class="card-body">

          <div class="row">
           <input type="hidden" name="cashmemo" id="cashmemo" value="<?php echo e($billid); ?>">
             
                <div class="col-md-6">
                  <div class="form-group">
                     
                   
                    
                  </div>
                </div>

            <div class="col-md-3"></div>
               
               <div class="col-md-3">
                  <div class="form-group">
                    <?php
                        $date = new DateTime();
                        $date->modify('-1 day');
                       
                    ?>
                    <input class="form-control" type="date" id="date" value="<?php  echo $date->format('Y-m-d'); ?>" name="date" placeholder="Date">
                  </div>
                </div>

                

        </div> <!-- end row -->
                

        <div id="show_customer">
         <div class="row">

              <div class="col-md-3">
               <div class="form-group">
                   <label>Customer Name</label>
                    <select class="form-control" id="customer_code" name="customer_code">
                      
                        <option value="">Select customer name & Code </option>
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->customer_code); ?>">
                              <?php echo e($data->customer_name); ?>-<?php echo e($data->customer_code); ?> 
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </select>
                  </div>

              </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Customer Name</label>
                    <input class="form-control" type="text" id="customer_name" name="customer_name" placeholder="Customer  Name">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label>Customer Address</label>
                    <input class="form-control" type="text" id="customer_address" name="customer_address" placeholder="Customer Address ">
                  </div>
                </div>

          
                  
                    <input class="form-control" type="hidden" id="customer_phone" name="customer_phone" placeholder="Customer Phone ">
                
               
               <div class="col-md-2">
                  <div class="form-group">
                    <label>Ship To</label>
                    <input class="form-control" type="text" id="ship_to" name="ship_to" placeholder="Ship  To ">
                  </div>
                </div>

                 <div class="col-md-2">
                  <div class="form-group">
                    <label>Truck No.</label>
                    <input class="form-control" type="text" value="0" id="truck_no" name="truck_no" placeholder="Truck No ">
                  </div>
                </div>

        </div> <!-- end row -->
     </div>
<hr>

 <h4 class="text-center">Select Product</h4><hr>
     <div class="row">

            <div class="col-md-12">
                  <div class="form-group">
                    <label for="category_id">Product Code </label>
                    <select class="form-control" id="product_code" name="product_code">
                        <option value="">Select Product Code </option>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>">
                              <?php echo e($data->product_code); ?> / <?php echo e($data->grade); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </select>
                  </div>
            </div>

     </div> <!-- end row -->

 
           <div id="show_medicine_select">
             <div class="row">

             <input type="hidden" name="id" id="id">           
                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Type </label>
                    <input class="form-control" type="text" id="product_type" name="product_type" placeholder="produt  type">
                  </div>
                </div>
                
                 <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Name </label>
                    <input class="form-control" type="text" id="product_name" name="product_name" placeholder="produt  Name">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Code </label>
                    <input class="form-control" type="text" id="product_codes" name="product_codes" placeholder="produt  type">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Grade </label>
                     <input class="form-control" type="text" id="grade" name="grade" placeholder="Grade ">
                    <!-- <select name="grade" class="form-control">

                      <option>Select grade</option>
                    </select> -->
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product specification </label>
                    <input class="form-control" type="text" id="product_specification" name="product_specification" placeholder="product_specification" >
                  </div>
                </div>

                 <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Ctn./Pcs.</label>
                    <input class="form-control" type="number" id="qty" name="quantity" placeholder="quantity">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Qty./Ctn</label>
                    <input class="form-control" type="number" id="quantity_percartoon" name="quantity_percartoon" placeholder="Quantity Per Cartoon">
                  </div>
                </div>


                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Rate </label>
                    <input class="form-control" type="text" id="unit_price" name="unit_price" placeholder="Unit Price">
                  </div>
                </div>
                

                <div class="col-md-2">
                    <div class="form-group">

                      <label>Comission</label>
                      <input type="text" name="comission" id="comission" class="form-control" placeholder="Entr Comission">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">

                      <label>Quantity/SQF</label>
                      <input type="text" name="quantity_per_sqf" value="0" id="quantity_per_sqf" class="form-control" placeholder="Entr Comission">
                    </div>
                </div>

                <button type="button" id="store" onclick="add_item_to_carts()" class="btn btn-block btn-dark">
                      <i class="fa fa-plus"> Add </i>
                      </button>
                <button type="button" id="Update" onclick="Updatecart()" class="btn btn-block btn-dark">
                      <i class="fa fa-plus"> Update </i>
                      </button>
                      <br>
                      <br>

           </div><!-- end row -->
           <br>

        </div>

                <style type="text/css">


                  .table-responsive {
                      white-space: normal;
                  }
                  .dataTables_length{
                      display: none;
                  }
 

                .scrollContent {
                  display: block;
                  height: 350px;
                  overflow: auto;
                  width: 100%;
                }

                </style>


            <div id="show_add_to_cart_item">
              <table width="1000" class="table table-bordered scrollContent">
                      <thead>
                        <tr>
                         
                          <th style="width: 2px">id </th>
                          <th style="width: 3px"> Type</th>
                          <th style="width: 10%">Code</th>
                          <th style="width: 5%"> Grade</th>
                          <th style="width: 10%">Specification</th>
                          <th style="width: 5%">Ctn./Pcs. </th>
                          <th style="width: 10%">Qty./Ctn.</th>
                          <th style="width: 10%">Quantity</th>
                          <th style="width: 15%">U.Price </th>
                          <th style="width: 15%">Subtotal Price </th>
                         
                          
                          <th style="width: 10%"> Qty.Per.SQFT </th>

                          <th style="width: 15%"> Total Price </th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php  $i=1;  ?>
                        <?php $__currentLoopData = $salesItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($data->id); ?></td>
                           
                           <td><?php echo e($data->product_type); ?></td>
                           <td><?php echo e($data->product_code); ?></td>
                           <td><?php echo e($data->grade); ?></td>
                           <td><?php echo e($data->product_specification); ?></td>
                           <td><?php echo e($data->ctn_pcs); ?></td>
                           <td><?php echo e($data->qty_ctn); ?></td>
                           <td><?php echo e($data->qty); ?></td>
                          
                           <td><?php echo e($data->amount); ?></td>
                           <td><?php echo e($data->t_amount); ?> </td>
                           <td><?php echo e($data->quantity_per_sqf); ?>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                           <td><?php echo e($data->total_price); ?></td>
                          

                              <td>
                                <button type="button" class="btn btn-sm btn-info" id="edit"><i class="fa fa-edit"></i></button>

                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="<?php echo e($data->id); ?>"><i class="fa fa-times"></i>
                             </button>
                               
                               <!-- <a class="btn btn-sm btn-info" href="#" id="edit">Edit</a> -->
                               
                           </td>
                           </tr>

                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      
                      </tbody>
                </table>
              </div>


<br><br>
        <div class="calculat">

          <div class="row">

             <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6">

                   <div class="form-group">
                     <label for="brand">Prev. Due/Advance</label>
                     <input class="form-control" readonly=""  type="text" id="openig_due" name="openig_due" placeholder="due">
                   </div>

                 </div>
                 <div class="col-md-4">
                   
                   
                 </div>
                 

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="brand">Cash Info</label>
                      <input type="text" name="cash_info" value="0" id="cash_info" class="form-control" placeholder="Entr cash Info">
                      
                   </div>
                   
                 </div>

                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="brand">Cash Balance</label>
                      <input type="text" name="cash" value="0" id="cash" class="form-control" placeholder="Entr cash balance">
                      
                   </div>
                   
                 </div>
                 <div class="col-md-2"></div>


                  <div class="col-md-6">

                     <div class="form-group">
                      <label for="brand">Carriage info</label>
                      <input class="form-control" value="0"  type="text" id="carriage_info" name="carriage_info" placeholder="Entr carriage info">
                    </div>
                    
                  </div>

                 <div class="col-md-4">

                    <div class="form-group">
                      <label for="brand">Carriage Balance</label>
                      <input class="form-control" value="0"  type="text" id="carriage" name="carriage" placeholder="Entr carriage">
                    </div>

                </div>
                <div class="col-md-2"></div>


                <div class="col-md-6">

                     <div class="form-group">
                      <label for="brand">Breakage info</label>
                      <input class="form-control" value="0"  type="text" id="breakage_info" name="breakage_info" placeholder="Entr breakage info">
                    </div>
                    
                  </div>

                 <div class="col-md-4">

                    <div class="form-group">
                      <label for="brand">Breakage Balance</label>
                      <input class="form-control" value="0"  type="text" id="breakage" name="breakage" placeholder="Entr breakage">
                    </div>

                </div>
                <div class="col-md-2"></div>

                <div class="col-md-6">
                     <div class="form-group">
                      <label for="brand">Incentives Info</label>
                      <input class="form-control" value="0" type="text" id="incentives_info" name="incentives_info" placeholder="incentives Info">
                    </div>
                   
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label for="brand">Incentives Balance</label>
                      <input class="form-control" value="0" type="text" id="incentives" name="incentives" placeholder="incentives">
                    </div>
                   
                 </div>
                 <div class="col-md-2"></div>

                <div class="col-md-6">

                     <div class="form-group">
                      <label for="brand">Comission info</label>
                      <input class="form-control" value="0"  type="text" id="comission_info" name="comission_info" placeholder="Entr comission info">
                    </div>
                    
                  </div>

                 <div class="col-md-4">

                    <div class="form-group">
                      <label for="brand">Comission Balance</label>
                      <input class="form-control" value="0" type="text" id="comission_balance" name="comission_balance" placeholder="Entr comission balance">
                    </div>

                </div>
                <div class="col-md-2"></div>


                 





               </div>
             </div>
             <div class="col-md-6">
               <div  class="row">
                
                  
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="brand">Ctn./Pcs Total</label>
                        <input class="form-control"  value="<?php echo e($total_quantity); ?>" readonly=""  type="text" id="ctn_pcs_t" name="ctn_pcs_t" placeholder="" >
                      </div>
                      
                    </div>
                    <div class="col-md-3">

                       <div class="form-group">
                        <label for="brand">Tot. Comission</label>
                        <input class="form-control" readonly="" value="<?php echo e($comission); ?>"  type="text" id="tot_comission" name="tot_comission" placeholder="" >
                      </div>
                      
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
                        <label for="brand">Tot. Quantity</label>
                         <input class="form-control" readonly="" value="<?php echo e($total_quantity); ?>"  type="text" id="tot_quantity" name="tot_quantity" placeholder="" > 
                      </div>
                      
                    </div>
                    <div class="col-md-3">
                           <div class="form-group">
                          <label for="total Price">Total Price </label>
                          <input class="form-control" value="<?php echo e($total_taka); ?>"  readonly="" type="number" id="total_taka" name="total_taka" placeholder="total taka">
                        </div>
                    </div>

                  
                   <div class="col-md-6">
                      <div class="form-group">
                        <label for="brand">Special Discount Info</label>
                        <input class="form-control" value="0"  type="text" id="special_discount_info" name="special_discount_info" placeholder="Entr special discount Info" >
                      </div>
                   
                   </div>

                 <div class="col-md-4">
                      <div class="form-group">
                        <label for="brand">Special Discount </label>
                        <input class="form-control" value="0"  type="text" id="special_discount" name="special_discount" placeholder="Entr special discount" >
                      </div>
                 </div>
                 <div class="col-md-2"></div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="brand">TT/Deposit  Info</label>
                        <input class="form-control" value="0"  type="text" id="tt_deposit_info" name="tt_deposit_info" placeholder="Entr TT/Deposit info" >
                      </div>
                   
                   </div>

                 <div class="col-md-4">
                      <div class="form-group">
                        <label for="brand">TT/Deposit  Balance</label>
                        <input class="form-control" value="0"  type="text" id="tt_deposit_balance" name="tt_deposit_balance" placeholder="TT/Deposit balance" >
                      </div>
                 </div>
                 <div class="col-md-2"></div>


                 <div class="col-md-6">
                      <div class="form-group">
                        <label for="brand">Missing Deposit  Info</label>
                        <input class="form-control" value="0"  type="text" id="missig_deposit_info" name="missig_deposit_info" placeholder="Entr TT/Deposit info" >
                      </div>
                   
                   </div>

                 <div class="col-md-4">
                      <div class="form-group">
                        <label for="brand">Missing Deposit  Balance</label>
                        <input class="form-control" value="0"  type="text" id="missig_deposit_balance" name="missig_deposit_balance" placeholder="Missing Deposit  Balance" >
                      </div>
                 </div>
                 <div class="col-md-2"></div>

                 <div class="col-md-6">
                      <div class="form-group">
                        <label for="brand">Other Info </label>
                        <input type="text" name="other_info" value="0" class="form-control" id="other_info" placeholder="Entr Other Info">
                      
                      </div>
                   
                   </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label for="brand">Other  </label>
                      <input type="text" name="other" value="0" class="form-control" id="other" placeholder="Entr Other">
                      
                    </div>
                 </div>
                 <div class="col-md-2"></div>


                 <div class="col-md-6">
                       <br>
                  <!--   <p class="text-center"><b> Balance </b> </p> -->
                    
                  </div>

                 <div class="col-md-4">

                     <div class="form-group">
                        <label for="brand">Due/Balance  </label>
                        <input type="text" name="due_bal" class="form-control" id="due_bal" placeholder="Entr Other">
                            
                     </div>

                </div>
                <div class="col-md-2"></div>

               </div>
             </div>
            
          </div>


     
        </div>
    <div class="row" style="margin-top: 15px;">

        


     </div>  <!-- end row -->


      <div class="row" style="margin-top: 15px;">

        <div class="col-md-6">

           <div class="form-group">
                       
              <input type="checkbox" id="condition" name="condition" value="yes">
               <label for="condition">Terms and Conditions</label><br>
                    
                
    
           </div>
          
        </div>

         <div class="col-md-6">

          
        </div>
      </div>


              <div class="col-md-12">
                  <div class="form-group">
                      <button type="submit" class="btn btn-block btn-dark">
                      <i class="fa fa-plus"> Save  </i>
                      </button>
                  </div>
              </div>


            </div>
          </div>
               
          </div>
        </div>




      </div><!--End Row-->
    </form>
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->




<?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>

<script type="text/javascript">

   var store=$('#store');
   var update=$('#Update');
   update.hide();

  $("#serial_number").focus();

  $(document).ready(function() {
      $("#customer_code").select2();
      $("#product_code").select2();
    /*  $("#status").select2();
      $("#pat_id").select2();*/
      
  });


   $(document).ready(function() {
         $('select[name="product_code"]').on('change', function(){
             var product_code = $(this).val();
            console.log(product_code);

             
             if(product_code) {
                 $.ajax({
                     url: "<?php echo e(url('admin/product_code/')); ?>/"+product_code,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {

                     // var d =$('select[name="grade"]').empty();

                           $('#product_name').val(data.product_name);
                           $('#product_type').val(data.product_type);
                           $('#grade').val(data.grade);
                           $('#product_specification').val(data.product_specification);
                           $('#unit_price').val(data.unit_price);
                           $('#comission').val(data.comission);
                           $('#product_codes').val(data.product_code);
                           $('#quantity_percartoon').val(data.unit_mesurement);
                       
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

 /* $(document).ready(function() {
         $('select[name="product_code"]').on('change', function(){
             var product_code = $(this).val();
            console.log(product_code);

             
             if(product_code) {
                 $.ajax({
                     url: "<?php echo e(url('admin/productcode/')); ?>/"+product_code,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {

                      var d =$('select[name="grade"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="grade"]').append(
                              
                                '<option value="'+ value.grade +'">' + value.grade + '</option>'
                                );
                             });*/
                        //var d =$('input[name="product_name"]').empty();
                            
                          /* $('#product_name').val(data.product_name);
                           $('#product_type').val(data.product_type);*/
                           /*$('#grade').val(data.grade);
                           $('#product_specification').val(data.product_specification);*/
                          /* $('#unit_price').val(data.unit_price);
                           $('#comission').val(data.comission);
                           $('#product_codes').val(data.product_code);
                           $('#quantity_percartoon').val(data.unit_mesurement);*/
                          // console.log(data.product_name);
  
                    /* },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });*/


  /*$(document).ready(function() {
         $('select[name="grade"]').on('change', function(){
             var grade = $(this).val();
             var product_code = $('#product_code').val();
            //console.log(grade);

             
             if(grade) {
                 $.ajax({
                     url: "<?php echo e(url('admin/gradewisedata')); ?>",
                     type:"GET",
                     data: {
                      grade: grade ,
                      product_code: product_code

                     },
                     dataType:"json",
                     success:function(data) {
                            
                            $('#product_name').val(data.product_name);
                           $('#product_type').val(data.product_type);
                           $('#grade').val(data.grade);
                           $('#product_specification').val(data.product_specification);
                           $('#unit_price').val(data.unit_price);
                           $('#comission').val(data.comission);
                           $('#product_codes').val(data.product_code);
                           $('#quantity_percartoon').val(data.unit_mesurement);
                           


                        
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });*/



/*$("#inDiscount").on('input',function(){

var totalval = $("#totalval").val();
var inDiscount = $("#inDiscount").val();
var inPayment = $("#inPayment").val();

var totalc = (+totalval - +inDiscount);

  $('#total').html(totalc);
  $('#Duehtml').html(totalc);

});*/



function  calculat(){
  var cashmemoid = document.getElementById("cashmemo").value;
  
/*alert(cashmemoid);*/
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total')); ?>",
        data: {cashmemoid:cashmemoid},
        success: function(data){
        $("#total_taka").html(data);
        $("#total_taka").val(data);

       /* document.getElementById("inDiscount").value="";
        document.getElementById("inPayment").value="";*/

        }
      });
}

function  calculatcartoon(){
  var cashmemoid = document.getElementById("cashmemo").value;
  
/*alert(cashmemoid);*/
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total_cartoon')); ?>",
        data: {cashmemoid:cashmemoid},
        success: function(data){
        $("#tot_cartoon").html(data);
        $("#tot_cartoon").val(data);

       /* document.getElementById("inDiscount").value="";
        document.getElementById("inPayment").value="";*/

        }
      });
}

function  calculatcomission(){
  var cashmemoid = document.getElementById("cashmemo").value;
  
/*alert(cashmemoid);*/
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total_comission')); ?>",
        data: {cashmemoid:cashmemoid},
        success: function(data){
        $("#tot_comission").html(data);
        $("#tot_comission").val(data);

       /* document.getElementById("inDiscount").value="";
        document.getElementById("inPayment").value="";*/

        }
      });
}


function  calculatquantity(){
  var cashmemoid = document.getElementById("cashmemo").value;
  
/*alert(cashmemoid);*/
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total_quantity')); ?>",
        data: {cashmemoid:cashmemoid},
        success: function(data){
        $("#tot_quantity").html(data);
        $("#tot_quantity").val(data);

      

        }
      });
}
 
 function  calculatectnpcs(){
  var cashmemoid = document.getElementById("cashmemo").value;
  
/*alert(cashmemoid);*/
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total_ctn_pcs')); ?>",
        data: {cashmemoid:cashmemoid},
        success: function(data){
        $("#ctn_pcs_t").html(data);
        $("#ctn_pcs_t").val(data);

      

        }
      });
}




$("#cash").on('input',function(){


var prevDue= $("#openig_due").val();
var total_taka = $("#total_taka").val();
var totalval = +prevDue + +total_taka;


var cash = $("#cash").val();

var totalc = (+totalval - +cash);
//var duetotal = totalc - inPayment;
  $('#due_bal').html(totalc);
  $('#due_bal').val(totalc);
 // $('#Duehtml').html(duetotal);

});

$("#carriage").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   
   var to_sub = +cash + +carriage;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);

})
$("#breakage").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   
   var to_sub = +cash + +carriage + +breakage;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);

})

$("#incentives").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   var incentives = $('#incentives').val();
   
   var to_sub = +cash + +carriage + +breakage + +incentives;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);


})

$("#comission_balance").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   var incentives = $('#incentives').val();
   var comission_balance = $("#comission_balance").val();
   
   var to_sub = +cash + +carriage + +breakage + +incentives + +comission_balance;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);


})




$("#special_discount").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   var incentives = $('#incentives').val();
   var special_discount = $('#special_discount').val();
   var comission_balance = $("#comission_balance").val();
   
   var to_sub = +cash + +carriage + +breakage + +incentives + +comission_balance + +special_discount;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);


})

$("#tt_deposit_balance").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   var incentives = $('#incentives').val();
   var special_discount = $('#special_discount').val();
  var comission_balance = $("#comission_balance").val();
   var tt_deposit_balance = $("#tt_deposit_balance").val();

   
   var to_sub = +cash + +carriage + +breakage + +incentives + +special_discount +  +tt_deposit_balance + +comission_balance;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);


})


$("#other").on('input', function(){
 
   var prevDue= $("#openig_due").val();
   var total_taka = $("#total_taka").val();
   var cash = $("#cash").val();
   var carriage = $("#carriage").val();
   var breakage = $('#breakage').val();
   var incentives = $('#incentives').val();
   var special_discount = $('#special_discount').val();
  var comission_balance = $("#comission_balance").val();
   var tt_deposit_balance = $("#tt_deposit_balance").val();
   var other = $("#other").val();

   
   var to_sub = +cash + +carriage + +breakage + +incentives + +special_discount +  +tt_deposit_balance + +comission_balance + +other;
   var totalval = +prevDue + +total_taka;

   var totalc = (+totalval - +to_sub);

   $('#due_bal').html(totalc); 
   $('#due_bal').val(totalc);


})





$('table').on('click','#edit',function(){
  //alert(0);
   event.preventDefault();
  store.hide();
  update.show();
    var id = $(this).parent().parent().find('td').eq(0).text();
    var producttype= $(this).parent().parent().find('td').eq(1).text();
    var product_codes= $(this).parent().parent().find('td').eq(2).text();
    var grade = $(this).parent().parent().find('td').eq(3).text();
    var product_specification = $(this).parent().parent().find('td').eq(4).text();
    var quantity = $(this).parent().parent().find('td').eq(5).text();
    var quantity_percartoon = $(this).parent().parent().find('td').eq(6).text();
    var unit_price = $(this).parent().parent().find('td').eq(7).text();
    var comission = $(this).parent().parent().find('td').eq(9).text();
    var quantity_per_sqf = $(this).parent().parent().find('td').eq(11).text();
    
     
    $('input[name="id"]').val(id);
    $('input[name="product_type"]').val(producttype);
    $('input[name="product_codes"]').val(product_codes);
    $('input[name="grade"]').val(grade);
    $('input[name="product_specification"]').val(product_specification);
    $('input[name="quantity"]').val(quantity);
    $('input[name="quantity_percartoon"]').val(quantity_percartoon);
    $('input[name="unit_price"]').val(unit_price);
    $('input[name="comission"]').val(comission);
    $('input[name="quantity_per_sqf"]').val(quantity_per_sqf);

   
   });



  $(document).ready(function() {
         $('select[name="customer_code"]').on('change', function(){
             var customer_code = $(this).val();
            console.log(customer_code);
             
             if(customer_code) {
                 $.ajax({
                     url: "<?php echo e(url('admin/customercode/')); ?>/"+customer_code,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        //var d =$('input[name="product_name"]').empty();
                            
                           $('#customer_name').val(data.customer_name);
                           $('#customer_address').val(data.customer_address);
                           $('#openig_due').val(data.openig_due);
                           $('#ship_to').val(data.customer_name);
                           $('#customer_phone').val(data.customer_phone);
                         
                           
                          // console.log(data.product_name);
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

function Updatecart(){
          
        var id = document.getElementById("id").value;
        var product_code = document.getElementById("product_codes").value;
        var qty = document.getElementById("qty").value;
        var amount = document.getElementById("unit_price").value;
        var cashmemo=document.getElementById("cashmemo").value;
        var grade=document.getElementById("grade").value;
        var comission=document.getElementById("comission").value;
        var product_type=document.getElementById("product_type").value;
        var quantity_percartoon=document.getElementById("quantity_percartoon").value;
        var product_specification=document.getElementById("product_specification").value;
        var quantity_per_sqf=document.getElementById("quantity_per_sqf").value;

         $.ajax({
            url: "<?php echo e(url('admin/update')); ?>",
            data:{
                  id:id,
                  product_code: product_code,
                  qty: qty,
                  amount: amount,
                  cashmemo: cashmemo,
                  grade:grade,
                  comission:comission,
                  product_type:product_type,
                  quantity_percartoon:quantity_percartoon,
                  product_specification:product_specification,
                  quantity_per_sqf:quantity_per_sqf

            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              
              clearfiled();
              update.hide();
              store.show();
              calculat();
              calculatcartoon();
              calculatcomission();
              calculatquantity();
              calculatectnpcs();
            }
    });

}



function add_item_to_carts(){
    var product_code = document.getElementById("product_codes").value;
    var product_name = document.getElementById("product_name").value;
    var qty = document.getElementById("qty").value;
    var amount = document.getElementById("unit_price").value;
    var cashmemo=document.getElementById("cashmemo").value;
    var grade=document.getElementById("grade").value;
    var comission=document.getElementById("comission").value;
    var product_type=document.getElementById("product_type").value;
    var quantity_percartoon=document.getElementById("quantity_percartoon").value;
    var product_specification=document.getElementById("product_specification").value;
    var quantity_per_sqf=document.getElementById("quantity_per_sqf").value;
    //alert(amount);
    //console.log(cashmemo);

    $.ajax({
            url: "<?php echo e(url('admin/add_item_to_carts')); ?>",
            data:{
                  product_code: product_code,
                  product_name:product_name,
                  qty: qty,
                  amount: amount,
                  cashmemo: cashmemo,
                  grade:grade,
                  comission:comission,
                  product_type:product_type,
                  quantity_percartoon:quantity_percartoon,
                  product_specification:product_specification,
                  quantity_per_sqf:quantity_per_sqf

            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              calculat();
              calculatcartoon();
              calculatcomission();
              calculatquantity();
              clearfiled();
              calculatectnpcs();
            }
    });
};

function clearfiled(){
    var product_name = document.getElementById("product_name").value='';
    var product_code = document.getElementById("product_code").value = '';
    var qty = document.getElementById("qty").value = '';
    var amount = document.getElementById("unit_price").value = '';
    var grade = document.getElementById("grade").value = '';
    var product_codes = document.getElementById("product_codes").value='';
    var product_specification = document.getElementById("product_specification").value="";
    var comission = document.getElementById("comission").value = '';
    var product_type = document.getElementById("product_type").value = '';
    var quantity_percartoon = document.getElementById("quantity_percartoon").value = '';

}


function deletefn(ele) {
var data= $(ele).data("id");
//alert(bill_id);
swal({
          title: "Are you sure?",
          text: "Once deleted",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
          if (willDelete) {
              $.ajax({
                  url: "<?php echo e(url('admin/med_sales_delete_from_cart')); ?>",
                  data: {data},
                  success: function(data){
                    $("#purchase").find("#show_add_to_cart_item").html(data);

                    calculat();
                    calculatcartoon();
                    calculatcomission();
                    calculatquantity();
                    calculatectnpcs();
                  }
              });
          }
      });
  }


</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/cashmemo/cashmemonw.blade.php ENDPATH**/ ?>