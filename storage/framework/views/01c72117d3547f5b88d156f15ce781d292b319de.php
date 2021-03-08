<?php $__env->startSection('title', 'Office Bill Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
                <i class="fa fa-user-circle"></i><span>Office Bill Manage</span>
            </div>


            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>Query 
              </div> 

            </div>
            <div class="card-body">
              <form action="<?php echo e(url('admin/officebilllistquery')); ?>" method="post">
              <?php echo csrf_field(); ?>


              <div class="row">

                <div class="col-md-6">          
                  <div class="form-group" style="margin-bottom: 0rem;">
                    <div id="dateragne-picker">
                      <div class="input-daterange input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">From Date</span>
                        </div>
                      <input type="date" class="form-control" name="from_date"
                       required="" autocomplete="off">
                        <div class="input-group-prepend">
                        <span class="input-group-text">To Date</span>
                        </div>
                      <input  type="date" class="form-control" name="to_date" 
                      required="" autocomplete="off">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">         
                  <div class="form-group pull-right" style="margin-bottom: 0rem;">
             
                    <button type="submit" class="btn btn-gradient-orange waves-effect waves-light m-1" style="margin-top: 0px !important;">
                      View
                    </button>
                  </div>
                </div>

              </form>
            </div>
          </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i>Office Bill List
              </div> 

             

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th>Bill ID</th>
                        <th>Date</th>
                        <th>G. Total</th>
                        <th>Payment</th>
                        <th>Due</th>
                        <th>Status</th>
                        <th width="8%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php $__currentLoopData = $bill_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($data->bill_id); ?></td>
                        <td><?php echo e($data->date_time); ?></td>
                        <td><?php echo e($data->grand_total); ?> TK </td>
                        <td><?php echo e($data->payment); ?> TK </td>
                        <td><?php echo e($data->due); ?> TK </td>
                        <td><?php echo e($data->status); ?></td>
                        <td>

                          <!-- <button type="button" class="btn btn-warning btn-sm waves-effect waves-light edit" data="<?php echo e($data->id); ?>"> <i class="fa fa-edit"></i> <span></span></button> --> 
                          <?php if($data->status == "Due"): ?>
                          <a href="<?php echo e(url('admin/billpayment',$data->bill_id)); ?>" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-credit-card"></i> <span> Payment </span>
                          </a>
                          <?php endif; ?>

                          <a href="<?php echo e(url('admin/billprint',$data->bill_id)); ?>" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> Print Bill</span>
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\MODERN-HOSPITAL-PRIVATE\resources\views/admin/office/officebilllist.blade.php ENDPATH**/ ?>