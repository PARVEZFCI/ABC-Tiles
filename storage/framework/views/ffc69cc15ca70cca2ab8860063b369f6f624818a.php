<?php $__env->startSection('title', 'Medicine Purchase Bill Edit - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

        

        <div class="col-lg-6">

          

          <div class="card bg-dark">
          <div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-user-circle"></i><span> Medicine Purchase Bill Edit</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Medicine Purchase Bill Edit
              </div> 

            </div>
            <div class="card-body">
             
              <form action="<?php echo e(url('admin/phamedpureditac',$pha_sales_manage->id)); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="name">Product Category</label>
                          <input required="" type="text" class="form-control" id="product_category" name="product_category" placeholder="Enter Medicine Category Name" value="<?php echo e($pha_sales_manage->product_category); ?>">
                      </div>
                  </div>


              
                  

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-dark btn-block col-md-offset-2">
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
    $(document).ready(function() {
        dataTableLoad({
            curUrl: "<?php echo e(route('Admin.userrole.index')); ?>",
            addUrl: "<?php echo e(route('Admin.userrole.create')); ?>"
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacy/phamedpurbilledit.blade.php ENDPATH**/ ?>