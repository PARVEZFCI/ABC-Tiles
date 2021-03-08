<?php $__env->startSection('title', 'Settings - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style type="text/css">
  table.dataTable tbody tr td {
    word-wrap: break-word;
    word-break: break-all;
}
</style>

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-dark">
          <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-university"></i><span> Update Password</span>
            </div>

            <div class="card">

           

            <div class="card-body">

          <?php if (session('message')): ?>
                <div class="alert alert-<?php echo e(session('class')); ?> alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
                <div class="alert-message"><span><?php echo e(session('message')); ?></span></div>
                </div>
              <?php endif; ?>

  <form action="<?php echo e(url('admin/updateuserpass')); ?>" enctype="multipart/form-data" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo e($data->id); ?>">
    <?php echo csrf_field(); ?>
   
    <div class="modal-body">
        <div id="validate-error"></div>
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Enter Current Password</label>
                    <input required="" type="password" class="form-control" id="currentpass" name="currentpass" placeholder="Enter Current Password">
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mobile">Enter New Password</label>
                    <input required="" type="password" class="form-control" id="newpass" name="newpass" placeholder="Enter New Password">
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mobile">Enter New Confirm Password</label>
                    <input required="" type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Enter New Confirm Password">
                </div>
            </div>


            
            
        </div>

    <div class="modal-footer">
        
        <button type="submit" class="btn btn-dark"><i class="fa fa-check-square-o"></i> Update</button>
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

<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP-72\htdocs\ENVATO\DOCTORS-POINT\BACKEND\resources\views/admin/updateuser/userpass.blade.php ENDPATH**/ ?>