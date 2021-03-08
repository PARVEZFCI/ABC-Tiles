<?php $__env->startSection('title', 'Monthly Target Statement - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
                <i class="fa fa-list"></i><span> Monthly Target Statement </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Select Month 
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/monthlytargetstatement')); ?>" id="qcat" method="post">
             <?php echo csrf_field(); ?>

              <div class="row">

                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="name"> From Date  </label>
                          <input type="date" name="from_date" class="form-control">
                          
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="name">To Date </label>
                          <input required="" type="date" class="form-control" name="to_date" >
                      </div>
                  </div>
                  <div class="col-md-3">
                  	<div class="form-group">
                  		<br>
                  	
                       <button type="submit"class="btn btn-dark btn-block col-md-offset-2"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> View Result 
                      
                        </button>
                   
                    </div>
                 </div>


                  

                  <div class="col-md-12">
                  </div>
                  
                 <!--  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/productsize')); ?>" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>
 -->
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/report/monthlytargetstatementselectdate.blade.php ENDPATH**/ ?>