<?php $__env->startSection('title', 'Purchase Medicine -'.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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

      <form id="purchase" action="<?php echo e(url('admin/phamedpuraction')); ?>" method="post">
           <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-dark">
            <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Purchase Medicine Add</span>
            </div>

            <div class="card">

            <div class="card-header">
              <div style="">
                <i class="fa fa-cart-plus"></i> Purchase Medicine 
              </div> 
            </div>


            <div class="card-body">


<div id="show_item_res">
<div class="row">


<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="text" id="serial_number" name="serial_number" placeholder="SN">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
  <input class="form-control" type="text" id="medicine_name" name="medicine_name" placeholder="Medicine Name">
</div>
</div>

<div class="col-md-1">
<div class="form-group">
  <input class="form-control" type="Number" id="qty" name="qty" placeholder="Qty" >
</div>
</div>

<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="Number" id="buy_price" name="buy_price" placeholder="Type Purchase Price">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
  <input class="form-control" type="Number" id="sell_price" name="sell_price" placeholder="Type Sell Price">
</div>
</div>

<div class="col-md-1">
<div class="form-group">
<button type="button" class="btn btn-block btn-primary" onclick="add_item_to_cart();">
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
              <th style="width: 25%">Serial</th>
              <th style="width: 40%">Medicine</th>
              <th style="width: 10%">Qty</th>
              <th style="width: 15%">Buy Price</th>
              <th style="width: 15%">Total Buy </th>
              <th style="width: 15%">Sell Price </th>
              <th style="width: 10%">Action</th>
            </tr>
          </thead>

          <tbody>
           
              
              <?php $__currentLoopData = $salesItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             

                <tr>
                  <td><?php echo e($data->serial_number); ?></td>
                  <td><?php echo e($data->medicine_name); ?></td>
                  <td><?php echo e($data->qty); ?></td>
                  <td><?php echo e($data->buy_price); ?></td>
                  <td><?php echo e($data->totay_buy_price); ?></td>
                  <td><?php echo e($data->sell_price); ?></td>
                  <td><button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="<?php echo e($data->id); ?>"><i class="fa fa-times"></i>
          </button></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
</table>
</div>



<div class="row" style="margin-top: 15px;">

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Invoice No</label>
      <input type="text" class="form-control" name="inv_num" placeholder="Invoice No" required="">
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Date</label>
      <input type="date" class="form-control" name="date" placeholder="Select Invoice Date" required="">
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Supplier Name</label>
      <input type="text" class="form-control" name="supplier_name" placeholder="Supplier Name" required="">
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Supplier Number</label>
      <input type="number" class="form-control" name="supplier_phone" placeholder="Supplier Number">
    </div>

</div>

<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Category</label>
      <select required="" class="form-control" id="category_name" name="category_name">
          <option value="">Select Category </option>
          <?php $__currentLoopData = $pha_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->category_name); ?>">
            <?php echo e($data->category_name); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

</div>


<div class="col-md-2">

    <div class="form-group">
      <label for="brand">Company</label>
      <select required="" class="form-control" id="company_name" name="company_name">
          <option value="">Select Company </option>
          <?php $__currentLoopData = $pha_medicine_comapany; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->company_name); ?>">
            <?php echo e($data->company_name); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    $("#category_name").select2();
    $("#company_name").select2();
});




function add_item_to_cart(){
    var serial_number = document.getElementById("serial_number").value;
    var medicine_name = document.getElementById("medicine_name").value;
    var qty = document.getElementById("qty").value;
    var buy_price = document.getElementById("buy_price").value;
    var sell_price = document.getElementById("sell_price").value;

    //alert(amount);

    $.ajax({
            url: "<?php echo e(url('admin/pha_pur_med_add_item_to_cart')); ?>",
            data:{
                  serial_number: serial_number,
                  medicine_name: medicine_name,
                  qty: qty,
                  buy_price: buy_price,
                  sell_price: sell_price
            },
            success: function(data){
              $("#purchase").find("#show_add_to_cart_item").html(data);
              clearfiled();
            }
    });

};

function clearfiled(){
    var serial_number = document.getElementById("serial_number").value = '';
    var medicine_name = document.getElementById("medicine_name").value = '';
    var qty = document.getElementById("qty").value = '';
    var buy_price = document.getElementById("buy_price").value = '';
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
                  url: "<?php echo e(url('admin/pha_pur_med_delete_from_cart')); ?>",
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



<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacy/phamedpur.blade.php ENDPATH**/ ?>