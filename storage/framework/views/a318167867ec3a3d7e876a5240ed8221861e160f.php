<?php $__env->startSection('title', 'Hospital Charge Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-list"></i><span>  Dealers details </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Dealers  
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/dealerstore')); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Dealer Code </label>
                          <input type="text" name="dealer_code" class="form-control" placeholder="Dealer Code">
                          
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Dealer Name</label>
                          <input required="" type="text" class="form-control"  name="dealer_name" placeholder="Enter Dealer Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Dealer city & Post Code</label>
                          <input required="" type="text" class="form-control"  name="dealer_city" placeholder="Enter customer city & Post Code">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Dealer Phone</label>
                          <input type="number" name="dealer_phone" class="form-control" placeholder="Dealer phone">
                      </div>
                  </div>

                  

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Dealer Email </label>
                          <input required="" type="email" class="form-control"  name="dealer_email" placeholder="Dealer Email">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> customer Address </label>
                          <input required="" type="text" class="form-control"  name="dealer_address" placeholder="dealer_address ">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Monthly Target</label>
                          <input required="" type="text" class="form-control"  name="monthly_target" placeholder="Entr monthly_target">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">quarterly_target</label>
                          <input required="" type="text" class="form-control"  name="quarterly_target" placeholder="Entr quarterly_target">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">monthly_bonous</label>
                          <input required="" type="text" class="form-control"  name="monthly_bonus" placeholder="Enter monthly_bonus">
                      </div>
                  </div>

                 
                 

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> openig_due</label>
                          <input required="" type="text" class="form-control"  name="opening_due" placeholder="opening_due">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> current_due </label>
                          <input required="" type="number" class="form-control"  name="current_due" placeholder="current_due">
                      </div>
                  </div>

                 
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date</label>
                          <input required="" type="date" class="form-control"  name="date" placeholder="Entr date">
                      </div>
                  </div>


                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/producttype')); ?>" class="btn btn-dark btn-block col-md-offset-2">
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/dealers/addealer.blade.php ENDPATH**/ ?>