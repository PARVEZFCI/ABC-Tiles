<?php $__env->startSection('title', 'Customer Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
      		<div class="card-header border-0 text-white" style="background-color: #FF002A;">
                <i class="fa fa-list"></i><span>  Customer details </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Customer  
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/customerUpdate',$customer->id)); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">


                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Customer Name</label>
                          <input required="" value="<?php echo e($customer->customer_name); ?>" type="text" class="form-control"  name="customer_name" placeholder="Enter customer_name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> customer Address </label>
                          <input required="" value="<?php echo e($customer->customer_address); ?>" type="text" class="form-control"  name="customer_address" placeholder="customer_address ">
                      </div>
                  </div>


                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">customer Phone</label>
                          <input type="number" value="<?php echo e($customer->customer_phone); ?>" name="customer_phone" class="form-control" placeholder="customer phone">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">customer city & Post Code</label>
                          <input required="" value="<?php echo e($customer->customer_city); ?>" type="text" class="form-control"  name="customer_city" placeholder="Enter customer city & Post Code">
                      </div>
                  </div>

                  
                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> customer Email </label>
                          <input value="<?php echo e($customer->customer_email); ?>" type="text" class="form-control"  name="customer_email" placeholder="customer Email">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                        <label for="name"> openig due</label>
                           
                           <?php
                              $ck = DB::table('cart_manage')->where('customer_code',$customer->customer_code)->get();
                           ?>

                           <?php if(count($ck)!=0): ?>

                           <?php else: ?>
                          <input required="" value="<?php echo e($customer->opening_due_no); ?>" type="text" class="form-control"  name="openig_due" placeholder="openig_due">

                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Contact Person Name</label>
                          <input required="" value="<?php echo e($customer->contact_person_name); ?>" type="text" class="form-control"  name="contact_person_name" placeholder="Entr contact_person_name">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">contact Person Designation</label>
                          <input required="" value="<?php echo e($customer->contact_person_designation); ?>" type="text" class="form-control"  name="contact_person_designation" placeholder="Entr contact Person Designation">
                      </div>
                  </div>



                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">transport allowance factory  </label>
                          <input type="text" value="<?php echo e($customer->transport_allowance_factory); ?>" name="transport_allowance_factory" class="form-control" placeholder="transport_allowance_factory ">
                          
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">transport allowance wh</label>
                          <input required="" value="<?php echo e($customer->transport_allowance_wh); ?>" type="text" class="form-control"  name="transport_allowance_wh" placeholder="Enter transport_allowance_wh">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> monthly target</label>
                          <input required=""  value="<?php echo e($customer->monthly_target); ?>" type="text" class="form-control"  name="monthly_target" placeholder="Entr monthly_target">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">quarterly target</label>
                          <input required="" value="<?php echo e($customer->quarterly_target); ?>" type="text" class="form-control"  name="quarterly_target" placeholder="Entr quarterly_target">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date</label>
                          <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" />
                      </div>
                  </div>


                  


                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/customerdetails')); ?>" class="btn btn-danger btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Update
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AB-Ceramic-Industries (3)\AB-Ceramic-Industries\resources\views/admin/customer/customeredit.blade.php ENDPATH**/ ?>