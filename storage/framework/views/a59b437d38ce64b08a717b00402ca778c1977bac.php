<?php $__env->startSection('title', 'Test Result Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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

        <div class="col-lg-8">

          <div class="card bg-dark">
          <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-list"></i><span>  Test ID : <?php echo e($data->id); ?> | Inv. Name : <?php echo e($data->charge_name); ?> </span>
            </div>

            <div class="card">
            <div class="card-header">
             Patient : <?php echo e($data->name); ?> (<?php echo e($data->pat_id); ?>)
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/testressubac',$data->id)); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="name">Test Result  </label>
                          <textarea class="form-control" id="report_result" name="report_result"></textarea>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"><u> Unit test </u> </label>

                          <br>
                          <?php echo e($investigation_data->unit_test); ?>

                          
                          
                          
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"><u> inv reference value </u> </label>
                         <?php echo $investigation_data->inv_ref_value; ?>
                      </div>
                  </div>

                

                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/testlist')); ?>" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save Result
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

<script src="<?php echo e(asset('/expert/assets/plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>
<script>
$('#report_result').summernote({
  height: 200,   
    codemirror: {
    theme: 'monokai'
  }
});
</script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\HOSPITAL-MANAGEMENT-SYSTEM\resources\views/admin/lab/testlistressub.blade.php ENDPATH**/ ?>