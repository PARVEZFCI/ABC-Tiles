

<?php $__env->startSection('title', 'Return Sell Medicine -'.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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

      <form id="purchase" action="<?php echo e(url('admin/return_adjust')); ?>" method="post">
           <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Return Sell Medicine Add</span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-cart-plus"></i> Return Sell Medicine 
              </div> 
            </div>


            <div class="card-body">



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
                  <td>
              <input type="hidden" name="med_id[]" id="med_id" value="<?php echo e($data->id); ?>">
              <input type="hidden" name="bill_id" id="bill_id" value="<?php echo e($bill_id); ?>">
                    <?php echo e($data->med_name); ?></td>
                  <td>
                    <input type="number" class="form-control" id="qty" name="qty[]" value="<?php echo e($data->qty); ?>">
                    </td>
                  <td><?php echo e($data->price); ?></td>
                  <td><?php echo e($data->total); ?></td>
                  <td><button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn()"><i class="fa fa-times"></i>
          </button></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
</table>
</div>



<div class="row" style="margin-top: 15px;">

<div class="col-md-4">

    <div class="form-group">
      <label for="brand">Patient</label>
      <select class="form-control" id="patient_id" name="patient_id">
          <option value="<?php echo e($pha_sales_manage->patient); ?>">
            <?php echo e($pha_sales_manage->patient); ?>

          </option>
      </select>
    </div>

</div>

<div class="col-md-4">

    <div class="form-group">
      <label for="brand">Bed</label>
      <select class="form-control" id="bed" name="bed">
          <option value="<?php echo e($pha_sales_manage->bed); ?>">
            <?php echo e($pha_sales_manage->bed); ?>

          </option>
      </select>
    </div>

</div>

<div class="col-md-4">

    <div class="form-group">
      <label for="brand">Status</label>
      <select required="" class="form-control" id="status" name="status">
          <option value="<?php echo e($pha_sales_manage->status); ?>">
            <?php echo e($pha_sales_manage->status); ?>

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
    $("#patient_id").select2();
    $("#bed").select2();
    $("#status").select2();
});


function return_adjust(med_id){
    //var med_id = document.getElementById("med_id").value;
    var bill_id = document.getElementById("bill_id").value;
    var qty = document.getElementById("qty").value;
    var med_id_pro = med_id;
    alert(med_id_pro);
    // $.ajax({
    //         url: "<?php echo e(url('admin/return_adjust')); ?>",
    //         data:{
    //               med_id_pro: med_id_pro,
    //               bill_id: bill_id,
    //               qty: qty
    //         },
    //         success: function(data){
    //           $("#purchase").find("#show_add_to_cart_item").html(data);
    //           clearfiled();
    //         }
    // });

};



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

function deletefn(){
    var bill_id = document.getElementById("bill_id").value;
    var med_id = document.getElementById("med_id").value;

    $.ajax({
            url: "<?php echo e(url('admin/med_sales_return_delete_from_cart')); ?>",
            data:{
                  bill_id: bill_id,
                  med_id: med_id
            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              clearfiled();
            }
    });

};


</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/modernhospital/public_html/resources/views/admin/pharmacysell/phamedsellreturn.blade.php ENDPATH**/ ?>