

<?php $__env->startSection('title', 'Medicine Stock List Phaymacy - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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

        <div class="col-lg-12">

      

          <div class="card bg-dark">
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-user-circle"></i><span>Medicine Stock List Report</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Medicine Stock List
              </div> 

             

            </div>
            <div class="card-body">
              <form action="<?php echo e(url('admin/phamedstockrep_med_wise')); ?>" method="post">
              <?php echo csrf_field(); ?>


              <div class="row">

                <div class="col-md-6">         
                  <div class="form-group" style="margin-bottom: 0rem;">
                    
                    <select type="text" class="form-control" id="medicine" name="medicine" required="">
                        <option value="">Select Report Type</option>
                        <option value="all"> All Medicine</option>
                        <option value="">---</option>
                        <?php $__currentLoopData = $current_stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($data->medicine_name); ?>"><?php echo e($data->medicine_name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    
                  </div>
                </div>


                <div class="col-md-6">         
                  <div class="form-group pull-right" style="margin-bottom: 0rem;">
             
                    <button type="submit" class="btn btn-gradient-orange waves-effect waves-light m-1" style="margin-top: 0px !important;">
                      View Medicine Stock Report
                    </button>
                  </div>
                </div>

              </form>

              
            </div>

            <div class="card-body">
              <form action="<?php echo e(url('admin/phamedsales_all')); ?>" method="post">
              <?php echo csrf_field(); ?>


              <div class="row">

                <div class="col-md-3">         
                  <div class="form-group" style="margin-bottom: 0rem;">
                    
                    <select type="text" class="form-control" id="sales_user" name="sales_user" required="">
                        <option value="">Select Report Type</option>
                        <option value="all"> All Sales</option>
                        <option value="">---</option>
                        <?php $__currentLoopData = $phy_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($data->username); ?>"><?php echo e($data->username); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    
                  </div>
                </div>

               
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


                <div class="col-md-3">         
                  <div class="form-group pull-right" style="margin-bottom: 0rem;">
             
                    <button type="submit" class="btn btn-gradient-orange waves-effect waves-light m-1" style="margin-top: 0px !important;">
                      View Medicine Sales Report
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

    $(document).ready(function() {
      $("#medicine").select2();
      $("#sales_user").select2();
    });

    </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/modernhospital/public_html/resources/views/admin/pharmacyreport/phamedstock.blade.php ENDPATH**/ ?>