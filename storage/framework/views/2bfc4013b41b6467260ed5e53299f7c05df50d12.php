<?php $__env->startSection('title', 'Investigation Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          <?php if (session('message')): ?>
              <div class="alert alert-<?php echo e(session('class')); ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
                <div class="alert-message"><span><?php echo e(session('message')); ?></span></div>
              </div>
        <?php endif; ?>

          <div class="card bg-dark">
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-user-circle"></i><span> Investigation Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Investigation List
              </div> 

              <a href="<?php echo e(url('admin/investigationsadd')); ?>" class="btn btn-dark btn-sm waves-effect waves-light pull-right"> 
                <i class="fa fa-plus"></i> <span>Add New</span>
              </a>

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Code</th>
                        <th>Investigation Name</th>
                        <th>Unit </th>
                        <th>Normal Value </th>
                        <th>Report File Name</th>
                        <th>Report Days</th>
                        <th>Charge</th>
                        <th>Discount</th>
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php $__currentLoopData = $investigation_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($data->code_test); ?></td>
                        <td><?php echo e($data->inv_name); ?></td>
                        <td><?php echo e($data->unit_test); ?></td>
                        <td><?php echo $data->inv_ref_value; ?></td>
                        <td><?php echo e($data->report_file_name); ?></td>
                        <td><?php echo e($data->report_days); ?></td>
                        <td><?php echo e($data->charge); ?> TK </td>
                        <td><?php echo e($data->discount); ?> % </td>
                        <td>

                          <a href="<?php echo e(url('admin/invedit',$data->id)); ?>" class="btn btn-warning btn-sm waves-effect waves-light" data="<?php echo e($data->id); ?>"> <i class="fa fa-edit"></i> <span></span></a> 

                          <a href="<?php echo e(url('admin/investigationsdelete',$data->id)); ?>" class="btn btn-danger btn-sm waves-effect waves-light"> 
                            <i class="fa fa-times"></i> <span></span>
                          </a>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/investigations/investigations.blade.php ENDPATH**/ ?>