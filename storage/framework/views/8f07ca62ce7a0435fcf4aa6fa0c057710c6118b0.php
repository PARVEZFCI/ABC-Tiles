<?php $__env->startSection('title', 'Lab Test Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
                <i class="fa fa-user-circle"></i><span> Lab Test Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Lab Test List
              </div> 

              

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">Test ID</th>
                        <th>Bill ID</th>
                        <th>Patient</th>
                        <th>Test Name</th>
                        <th>Qty</th>
                        <th>Report Date Time</th>
                        <th>Status</th>
                        
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php $__currentLoopData = $testlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->bill_id); ?></td>
                        <td><?php echo e($data->pat_type); ?> - <?php echo e($data->name); ?> - <?php echo e($data->pat_id); ?></td>
                        <td><?php echo e($data->charge_name); ?></td>
                        <td><?php echo e($data->qty); ?></td>
                        <td><?php echo e($data->report_time); ?></td>
                        <td>
                          <?php if(empty($data->report_status)): ?>
                          Pending 
                          <?php else: ?>
                          <?php echo e($data->report_status); ?>

                          <?php endif; ?>
                        </td>
                        
                        <td>
                          <?php if(empty($data->report_status)): ?>
                            <a href="<?php echo e(url('admin/testressub',$data->id)); ?>" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-clipboard"></i> <span> 
                            Submit Report 
                          </span>
                          </a> 
                          <?php else: ?>
                            <a href="<?php echo e(url('admin/testresprint',$data->id)); ?>" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                            view Report 
                          </span>
                          </a>
                          <?php endif; ?>
                          

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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\MODERN-HOSPITAL-PRIVATE\resources\views/admin/lab/testlist.blade.php ENDPATH**/ ?>