<?php $__env->startSection('title', 'cashmemo Manage - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style type="text/css">
   @media  print {
.noprint{
  display: none;
}
}
</style>

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
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-user-circle"></i><span> Cashmemo Manage</span>
            </div>

            <div class="card">
            <div class="card-header">

              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-table"></i> Cashmemo List
              </div> 

              <div style="display:inline-block;float: right; padding-top:5px;">
                <a href="<?php echo e(url('admin/cashmemo')); ?>" class="btn btn-dark">+add new Cashmemo</a>
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                      <b>
                       <th class="noprint" width="8%" class="text-center">Action</th>
                       <!--  <th width="5%">SN</th>
                        <th width="5%">Cashmemo Id</th> -->
                        <th>Date</th>
                        <th>Customer Name</th>
                        <th>Ship To</th>
                        <th>TT/Deposit</th>
                        <th>Miss. Dep.</th>
                        <th>Total</th>
                        <th>Prev. Due</th>
                        <th><b> Balance </b> </th>
                        </b>
                        
                       
                    </tr>
                </thead>
                <tbody>
                	<?php $i=1; ?>
              <?php $__currentLoopData = $cashmemo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>


                      <td class="noprint">
                          
                            <a href="<?php echo e(url('admin/customerdlt/')); ?>" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> <span> 
                          
                          </span>
                          </a> 

                          <a href="<?php echo e(url('admin/dltcashmemo/'.$data->id)); ?>" id="delete" class="btn btn-danger btn-sm waves-effect waves-light"> 
                            <i class="fa fa-delete">X</i> <span> 
                          
                          </span>
                          </a> 
                        
                            <a href="<?php echo e(url('admin/billprint/'.$data->cash_memo_id)); ?>" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                       
                          </span>
                          </a>
                         
                          

                        </td>
                        <!-- <td><?php echo e($i++); ?></td>
                        <td><?php echo e($data->cash_memo_id); ?></td> -->
                        <td><?php echo e(date("d-m-Y", strtotime($data->date))); ?></td>  
                        <td><?php echo e($data->customer_name); ?></td>
                     
                        <td><?php echo e($data->ship_to); ?></td> 
                        <td><?php echo e($data->tt_deposit_balance); ?></td>
                        <td><?php echo e($data->missig_deposit_balance); ?></td>
                        <td><?php echo e($data->total); ?></td>
                        <td><?php echo e($data->Prev_due); ?></td> 
                        <td><?php echo e($data->balance); ?></td>
                      
                        
                        
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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/cashmemo/cashmemo.blade.php ENDPATH**/ ?>