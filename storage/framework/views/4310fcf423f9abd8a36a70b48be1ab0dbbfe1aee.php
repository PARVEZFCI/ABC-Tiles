<?php $__env->startSection('title', 'Bill Add -'.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>




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

      <form id="purchase" action="<?php echo e(url('admin/billaction')); ?>" method="post">
           <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-8">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Bill Add</span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-cart-plus"></i> Bill 
              </div> 
            </div>


            <div class="card-body">

<div class="row">
<div class="col-md-11">

    <div class="form-group">
      <label for="brand">Patient</label>
      <select required="" class="form-control" id="patient_id" name="patient_id">
          <option value="">Select Patient </option>
          <?php $__currentLoopData = $patient_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            MHP-0<?php echo e($data->pat_id); ?> - <?php echo e($data->name); ?> - <?php echo e($data->phone); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

</div>

<div class="col-md-1">
    <div class="form-group">
      <label for="brand">Add</label>
        <button type="button" class="btn btn-sm btn-primary pur_item"  data-toggle="modal" data-target="#darkmodal">
          <i class="fa fa-plus"></i>
        </button>
    </div>
</div>



</div>

<div class="row">

<div class="col-md-4">
<div class="form-group">
  <label for="category_id">Visit Doctor</label>
  <input class="form-control" type="text" id="visit_dr" name="visit_dr">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
  <label for="category_id">RF Doctor</label>
  <select class="form-control" id="dr_id" name="dr_id">
      <option value="">Select Doctor </option>
          <?php $__currentLoopData = $doctor_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->dr_code); ?> - <?php echo e($data->dr_name); ?> - <?php echo e($data->mr_id); ?> - <?php echo e($data->mr_name); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
  <label for="category_id"> Bed </label>
  <select class="form-control" id="bed_id" name="bed_id">
      <option value="">Select Bed </option>
          <?php $__currentLoopData = $bed_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->bed_name); ?> - <?php echo e($data->bed_type); ?> - <?php echo e($data->floor); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
  <label for="category_id"> Hospital Charge </label>
  <select class="form-control" id="charge_id" name="charge_id">
      <option value="">Select Hospital Charge </option>
          <?php $__currentLoopData = $hospital_charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->charge_name); ?> - <?php echo e($data->amount); ?> TK
          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
  <label for="category_id"> Investigation </label>
  <select class="form-control" id="investigation_id" name="investigation_id">
      <option value="">Select Investigation </option>
          <?php $__currentLoopData = $investigation_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->code_test); ?> - <?php echo e($data->inv_name); ?> - <?php echo e($data->charge); ?> TK
          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </select>
</div>
</div>


</div>


<input type="hidden" name="bill_id" id="bill_id" value="<?php echo e($billid); ?>">

<div id="show_item_res">
<div class="row">



<input type="hidden" name="item_id" id="item_id">

<div class="col-md-5">
<div class="form-group">
  <input class="form-control" type="text" id="name" name="" readonly="" >
</div>
</div>

<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="Number" id="qty" name="qty" placeholder="Qty" readonly="">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
  <input class="form-control" type="Number" id="price" placeholder="Type Price">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<button type="button" class="btn btn-block btn-primary">
<i class="fa fa-plus"> Add </i>
</button>
</div>
</div>

</div>
</div>

<style type="text/css">
.scrollContent {
  display: block;
  height: 220px;
  overflow: auto;
  width: 100%;
}

</style>


<div id="show_add_to_cart_item">
  <table class="table table-bordered scrollContent">
          <thead>
            <tr>
              <th width="55%">Details</th>
              <th width="15%">Qty</th>
              <th width="15%">Rate</th>
              <th width="15%">Total </th>
              <th width="10%">Action</th>
            </tr>
          </thead>

            <tbody>
              <?php 
              $total = 0; 
              ?>
              
              <?php $__currentLoopData = $salesItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php
              $total += $data->qty * $data->amount;
              ?>

                <tr>
                  <td><?php echo e($data->charge_name); ?></td>
                  <td><?php echo e($data->qty); ?></td>
                  <td><?php echo e($data->amount); ?></td>
                  <td><?php echo e($data->total); ?></td>
                  <td><button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="<?php echo e($data->id); ?>"><i class="fa fa-times"></i>
          </button></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
</table>
</div>


            </div>
          </div>
               
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Bill </span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-user"></i> Payment
              </div> 
            </div>

            <div class="card-body">
<div id="calculat">

<div class="row">


<div class="col-md-4">
          <div class="c-card gradient-ohhappiness" style="background: #179f5d !important; padding:15px;">
            <div class="c-card-body">
              <div class="media">
              <div class="media-body text-center">
                <h6 class="text-white"><b style="font-size: 20px;" id="total">
                  <?php echo e($total); ?>

                </b></h6>
                 <input type="hidden" name="totalval" id="totalval" value="<?php echo e($total); ?>"> 
                <span class="text-white">Total</span>
              </div>
            </div>
            </div>
          </div>
        </div>

 <div class="col-md-4">
          <div class="c-card gradient-ibiza" style="background: #db5246 !important; padding:15px;">
            <div class="c-card-body">
              <div class="media">
              <div class="media-body text-center">
                <h6 class="text-white"><b style="font-size: 20px;" id="Duehtml">0</b></h6>
                <input type="hidden" name="Dueval" id="Dueval" value="0">
                <span class="text-white">Due</span>
              </div>
            </div>
            </div>
          </div>
        </div> 

 <div class="col-md-4">
          <div class="c-card gradient-ibiza" style="background: #ff9800 !important; padding:15px;">
            <div class="c-card-body">
              <div class="media">
              <div class="media-body text-center">
                <h6 class="text-white"><b style="font-size: 20px;" id="hcrf">0</b></h6>
                <span class="text-white">Hos. Charge RF</span>
              </div>
            </div>
            </div>
          </div>
        </div> 


    </div>
</div>



<br>

<div class="row">
<div class="col-md-4">
<div class="form-group">
  <label for="inDiscount">Discount</label>
  <input class="form-control" type="text" id="inDiscount" name="inDiscount" value="" required="" autocomplete="off">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
  <label for="inPayment">Payment</label>
  <input class="form-control" type="text" id="inPayment" name="inPayment" value="" required="" autocomplete="off">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
  <label for="inPayment">Ref Fee</label>
  <input class="form-control" type="text" id="reffee" name="reffee" value="" required="" autocomplete="off">
</div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label for="inPayment">Payment </label>
<div class="demo-radio-button">
              
               
               <select class="form-control" id="pay_status" name="pay_status">
                  <option value="Paid">Paid </option>
                  <option value="Due">Due </option>
                  <option value="Hold">Hold </option>
              </select>
                
            </div>
          </div>
        </div>

<div class="col-md-12">
        <div class="form-group">
          <button type="submit" class="btn btn-block btn-success">
                <i class="fa fa-check-square-o"></i> Save & Print 
            </button>
        </div>
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
   




 <!--Dark Modal -->
             
                <div class="modal fade" id="darkmodal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content border-dark">
                      <div class="modal-header bg-dark">
                        <h5 class="modal-title text-white"><i class="fa fa-star"></i> Patient Add</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                     


<form action="<?php echo e(url('admin/patientsaddac')); ?>" id="qcat" method="post">
<?php echo csrf_field(); ?>
  

    <div class="modal-body">
        <div id="validate-error"></div>
        <div class="row">
           
    

            <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Patient Type </label>
                          <select required="" type="text" class="form-control" id="pat_type" name="pat_type">
                            <option value="OPD - Out Patient">OPD - Out Patient</option>
                            <option value="IPD - In Patient">IPD - In Patient</option>
                            
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Patient Name </label>
                          <input required="" type="text" class="form-control" id="name" name="name" placeholder="Enter Patient Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Age </label>
                          <input required="" type="number" class="form-control" id="age" name="age" placeholder="Enter Patient Age">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Gender </label>
                          <select required="" type="text" class="form-control" id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>

                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Phone </label>
                          <input required="" type="number" class="form-control" id="phone" name="phone" placeholder="Enter Patient Phone">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Address </label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Patient Address">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Guardian Name </label>
                          <input type="text" class="form-control" id="gur_name" name="gur_name" placeholder="Enter Guardian Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Remarks </label>
                          <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks">
                      </div>
                  </div>
            
            
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-inverse-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" class="btn btn-dark"><i class="fa fa-check-square-o"></i> Save</button>
    </div>
</form>


                    
                    </div>
                  </div>
                </div><!--End Modal -->

  <?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>



<script type="text/javascript">
$("#sl_no").focus();

$(document).ready(function() {
    $("#patient_id").select2();
    $("#dr_id").select2();
    $("#bed_id").select2();        
    $("#charge_id").select2();
    $("#investigation_id").select2();
});

$("#purchase").on('change','select[name="charge_id"]', function (){
    //alert($(this).val());
    $.ajax({
      url: "<?php echo e(url('admin/charge_show')); ?>",
      data: {charge_id: $(this).val()},
      success: function(data){
    $("#purchase").find("#show_item_res").html(data);
      
      }
    });
  });

$("#purchase").on('change','select[name="investigation_id"]', function (){
    //alert($(this).val());
    $.ajax({
      url: "<?php echo e(url('admin/investigation_show')); ?>",
      data: {investigation_id: $(this).val()},
      success: function(data){
    $("#purchase").find("#show_item_res").html(data);
      
      }
    });
  });



function add_item_to_cart(){
    var bill_id = document.getElementById("bill_id").value;
    var charge_name = document.getElementById("charge_name").value;
    var qty = document.getElementById("qty").value;
    var amount = document.getElementById("amount").value;
    var c_type = document.getElementById("c_type").value;
    var in_id = document.getElementById("in_id").value;

    //alert(amount);

    $.ajax({
            url: "<?php echo e(url('admin/add_item_to_cart')); ?>",
            data:{
                  bill_id: bill_id,
                  charge_name: charge_name,
                  qty: qty,
                  amount: amount,
                  c_type: c_type,
                  in_id: in_id
            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              calculat();
              hcrefcalcualte();
            }
    });

};



function deletefn(ele) {
var data= $(ele).data("id");
var bill_id = document.getElementById("bill_id").value;
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
                  url: "<?php echo e(url('admin/delete_from_cart')); ?>",
                  data: {data,bill_id},
                  success: function(data){
                    $("#purchase").find("#show_add_to_cart_item").html(data);
                    calculat();
                    hcrefcalcualte();
                  }
              });
          }
      });
  }



function  calculat(){
  var bill_id = document.getElementById("bill_id").value;
   $.ajax({
        url: "<?php echo e(url('admin/calculate_total')); ?>",
        data: {bill_id:bill_id},
        success: function(data){
        $("#total").html(data);
        $("#totalval").val(data);

        document.getElementById("inDiscount").value="";
        document.getElementById("inPayment").value="";

        }
      });
}

function  hcrefcalcualte(){
  var bill_id = document.getElementById("bill_id").value;
   $.ajax({
        url: "<?php echo e(url('admin/hc_rf_calculate_total')); ?>",
        data: {bill_id:bill_id},
        success: function(data){
        $("#hcrf").html(data);

        document.getElementById("reffee").value="";

        }
      });
}


$("#inDiscount").on('input',function(){

var totalval = $("#totalval").val();
var inDiscount = $("#inDiscount").val();
var inPayment = $("#inPayment").val();

var totalc = (+totalval - +inDiscount);

  $('#total').html(totalc);
  $('#Duehtml').html(totalc);

});

$("#inPayment").on('input',function(){

var totalval = $("#totalval").val();
var inDiscount = $("#inDiscount").val();
var inPayment = $("#inPayment").val();

var totalc = (+totalval - +inDiscount);
var duetotal = totalc - inPayment;
  $('#Duehtml').html(duetotal);
  //$('#Duehtml').html(duetotal);

});



</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamppp\htdocs\hospital_management\modern_hospital_private\resources\views/admin/bill/billadd.blade.php ENDPATH**/ ?>