<?php $__env->startSection('title', 'Cashmemo Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
            <div class="alert alert-<?php echo e(session('class')); ?> alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span><?php echo e(session('message')); ?></span></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-lg-10">

          <div class="card bg-dark">
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-list"></i><span>  Cashmemo details </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Cashmemo  
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/customerstore')); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Type </label>
                          <input type="text" name="customer_code" class="form-control" placeholder="Customer Code">
                          
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Irregular Company</label>
                          <input required="" type="text" class="form-control"  name="irregular_company" placeholder="Enter irregular_company">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Memo No.</label>
                          <input required="" type="text" class="form-control"  name="memo_no" placeholder="Enter Memo No">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date</label>
                          <input type="date" name="date" class="form-control" placeholder="Entr date">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"></label>
                          <input required="" type="text" class="form-control"  name="customer_fax" placeholder="customer fax">
                      </div>
                  </div>
                  <br>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> customer Code </label>
                           <select name="customer_code" class="form-control">
                             <option>select customer code</option>
                             <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option><?php echo e($row->customer_code); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> customer Name </label>
                          <input required="" type="text" class="form-control"  name="customer_name" placeholder="customer_name ">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Customer Address</label>
                          <input required="" type="text" class="form-control"  name="customer_address" placeholder="Entr customer address">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Ship To</label>
                          <input required="" type="text" class="form-control"  name="ship_to" placeholder="Entr ship to">
                      </div>
                  </div>



                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Truck No. </label>
                          <input type="text" name="truck_no" class="form-control" placeholder="truck no ">
                          
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Due 1</label>
                          <input required="" type="number" class="form-control"  name="due_one" placeholder="Enter transport_allowance_wh">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Due 2</label>
                          <input required="" type="number" class="form-control"  name="due_two" placeholder="Enter Due Two">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Total Due</label>
                          <input type="number" name="total_due" class="form-control" placeholder="Total due">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Total Amount</label>
                          <input required="" type="number" class="form-control"  name="total_amount" placeholder="Total Amount">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Tot.Cartoon</label>
                          <input required="" type="number" class="form-control"  name="total_cartoon" placeholder="Total Cartoon">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Tot.Comission</label>
                          <input required="" type="number" class="form-control"  name="total_comission" placeholder="Total comission">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Tot. Quantity </label>
                          <input required="" type="number" class="form-control"  name="tot_quantity" placeholder="Entr Total Quantity ">
                      </div>
                  </div>
                  
                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Tot. Price </label>
                          <input required="" type="number" class="form-control"  name="tot_price" placeholder="Entr Total Price ">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Commision</label>
                          <input required="" type="text" class="form-control"  name="comminsion" placeholder="Entr Commision">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Breakage</label>
                          <input required="" type="text" class="form-control"  name="breakage" placeholder="Entr Breakage">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Previous Adjust</label>
                          <input required="" type="text" class="form-control"  name="prev.adj" placeholder="Previous Adjust">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Bank  </label>
                          <input required="" type="text" class="form-control"  name="bank" placeholder="Entr bank">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Branch </label>
                          <input type="text" name="branch" class="form-control" placeholder="Entr Branch">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Cq.No</label>
                          <input required="" type="text" class="form-control"  name="cq_no" placeholder="Entr CQ . No">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date</label>
                          <input required="" type="date" class="form-control"  name="data" placeholder="Entr Data">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Cash </label>
                          <input required="" type="text" class="form-control"  name="cash" placeholder="Entr Cash">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Incentires </label>
                          <input required="" type="text" class="form-control"  name="incentires" placeholder="Entr Incentires">
                      </div>
                  </div> 


                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Chequs </label>
                          <input required="" type="text" class="form-control"  name="chequs" placeholder="Entr Chequs">
                      </div>
                  </div> 

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Special Discount </label>
                          <input required="" type="text" class="form-control"  name="special_discount" placeholder="Entr Special Discount">
                      </div>
                  </div>   

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> II/Depozil </label>
                          <input required="" type="text" class="form-control"  name="ii_depozil" placeholder="Entr II/Depozil">
                      </div>
                  </div> 

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Other  </label>
                          <input required="" type="text" class="form-control"  name="other" placeholder="Entr Other">
                      </div>
                  </div> 

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Balance  </label>
                          <input required="" type="text" class="form-control"  name="balance" placeholder="Entr Balance">
                      </div>
                  </div> 

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Date  </label>
                          <input required="" type="date" class="form-control"  name="date" placeholder="Entr Date">
                      </div>
                  </div> 


                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/cashmemo')); ?>" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark btn-block col-md-offset-2">
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
   

  <?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>
    <script>
    

</script>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/cashmemo/cashmemoadd.blade.php ENDPATH**/ ?>