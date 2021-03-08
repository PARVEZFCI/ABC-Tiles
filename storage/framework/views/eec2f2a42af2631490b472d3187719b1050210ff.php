<?php $__env->startSection('title', 'Sell Medicine -'.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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

      <form id="purchase" action="<?php echo e(url('admin/phamedsalesaction')); ?>" method="post">
           <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Sell Medicine Add</span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-cart-plus"></i> Sell Medicine 
              </div> 
            </div>


            <div class="card-body">

<div class="row">

<div class="col-md-12">
<div class="form-group">
  <label for="category_id">Select Medicine </label>
  <select class="form-control" id="medicine_id" name="medicine_id">
      <option value="">Select Medicine </option>
          <?php $__currentLoopData = $pha_pur_add_to_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->product_category); ?> - <?php echo e($data->medicine_name); ?> - <?php echo e($data->sell_price); ?> TK
          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </select>
</div>
</div>



</div>


<div id="show_medicine_select">
<div class="row">


<div class="col-md-6">
<div class="form-group">
  <input class="form-control" type="text" id="medicine_name" name="medicine_name" placeholder="Medicine Name">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="Number" id="qty" name="qty" placeholder="Qty" >
</div>
</div>


<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="Number" id="sell_price" name="sell_price" placeholder="Type Sell Price">
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
  height: 350px;
  overflow: auto;
  width: 100%;
}

</style>


<div id="show_add_to_cart_item">
  <table class="table table-bordered scrollContent">
          <thead>
            <tr>
             
              <th style="width: 40%">Medicine</th>
              <th style="width: 10%">Qty</th>
              <th style="width: 15%">Price </th>
               <th style="width: 25%">Total</th>
              <th style="width: 10%">Action</th>
            </tr>
          </thead>

          <tbody>
           
              
              <?php $__currentLoopData = $salesItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             

                <tr>
                  <td><?php echo e($data->med_name); ?></td>
                  <td><?php echo e($data->qty); ?></td>
                  <td><?php echo e($data->price); ?></td>
                  <td><?php echo e($data->total); ?></td>
                  <td><button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="<?php echo e($data->id); ?>"><i class="fa fa-times"></i>
          </button></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
</table>
</div>



<div class="row" style="margin-top: 15px;">

<div class="col-md-3">

    <div class="form-group">
      <label for="brand">Patient</label>
      <input class="form-control" type="text" id="patient_id" name="patient_id" placeholder="Type Patient Name">
    </div>

</div>

<div class="col-md-3">

    <div class="form-group">
      <label for="brand">Bed</label>
      <select class="form-control" id="bed" name="bed">
          <option value="">Select Bed </option>
          <?php $__currentLoopData = $bed_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->bed_name); ?>">
            <?php echo e($data->bed_name); ?> - <?php echo e($data->bed_type); ?> - <?php echo e($data->floor); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

</div>


<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Patient ID</label>
      <select class="form-control" id="pat_id" name="pat_id">
          <option value="">Select Patient ID </option>
          <?php $__currentLoopData = $patient_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>">
            <?php echo e($data->pat_id); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Discount</label>
      <input class="form-control" type="number" id="discount" name="discount" placeholder="Type Discount">
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Status</label>
      <select required="" class="form-control" id="status" name="status">
          <option value="Paid">
            Paid
          </option>
          <option value="Due">
            Due
          </option>
      </select>
    </div>

</div>


</div>

<div class="col-md-12">
<div class="form-group">
<button type="submit" class="btn btn-block btn-success">
<i class="fa fa-plus"> Save & Print </i>
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
   



  <?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>



<script type="text/javascript">
$("#serial_number").focus();

$(document).ready(function() {
    $("#medicine_id").select2();
    $("#bed").select2();
    $("#status").select2();
    $("#pat_id").select2();
    
});

$("#purchase").on('change','select[name="medicine_id"]', function (){
    //alert($(this).val());
    $.ajax({
      url: "<?php echo e(url('admin/medicinesellshow')); ?>",
      data: {medicine_id: $(this).val()},
      success: function(data){
    $("#purchase").find("#show_medicine_select").html(data);
      
      }
    });
  });


function add_item_to_carts(){
    var medicine_name = document.getElementById("medicine_name").value;
    var qty = document.getElementById("qty").value;
    var sell_price = document.getElementById("sell_price").value;
    //alert(amount);

    $.ajax({
            url: "<?php echo e(url('admin/med_sales_add_item_to_cart')); ?>",
            data:{
                  medicine_name: medicine_name,
                  qty: qty,
                  sell_price: sell_price
            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              clearfiled();
            }
    });

};

function clearfiled(){
    var medicine_name = document.getElementById("medicine_name").value = '';
    var qty = document.getElementById("qty").value = '';
    var sell_price = document.getElementById("sell_price").value = '';
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
                  }
              });
          }
      });
  }


</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamppp\htdocs\hospital_management\modern_hospital_private\resources\views/admin/pharmacysell/phamedsell.blade.php ENDPATH**/ ?>