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
                 <?php if($user_role_per->add == 1): ?>
                <a href="<?php echo e(url('admin/cashmemo')); ?>" class="btn btn-dark">+add new Cashmemo</a>
                <?php endif; ?>
              </div> 

            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                      <b>
                       <th class="noprint" width="8%" class="text-center">Action</th>
                      <!--   <th width="5%">SN</th>-->
                        
                        <th>Date</th>
                        <th>Customer Name</th>
                       
                        <th>TT/Deposit</th>
                        <th>Miss. Dep.</th>
                        <th>Total</th>
                        <th>Prev. Due</th>
                        <th><b> Balance </b> </th>
                        </b>
                        
                       
                    </tr>
                </thead>
                <tbody>
            
            <?php $i=1;  $setting = DB::table('settings')
        ->first();   ?>
              <?php $__currentLoopData = $cashmemo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
             
              
                    <tr>


                      <td class="noprint">
                         
                          
                        <?php if(in_array($data->id, $editable_ids)): ?>

                         <?php if($user_role_per->edit == 1): ?>
                          
                            <a href="<?php echo e(url('admin/editCashmemo/'.$data->cash_memo_id)); ?>" class="btn btn-success btn-sm waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> <span> 
                          
                          </span>
                          </a> 

                        <?php endif; ?>

                         <?php if($user_role_per->delete == 1): ?>

                          <a href="<?php echo e(url('admin/dltcashmemo/'.$data->id)); ?>" id="delete" class="btn btn-danger btn-sm waves-effect waves-light"> 
                            <i class="fa fa-delete">X</i> <span> 
                          
                          </span>
                          </a> 

                          <?php endif; ?>
                          
                        <?php endif; ?>

                        <?php if($user_role_per->admin == 1): ?>
                        <?php if($data->sms_status==1): ?>

                         <?php else: ?>
                          <a href="<?php echo e(url('admin/otpmessage/'.$data->id)); ?>"  class="btn btn-info btn-sm waves-effect waves-light"> 
                            <i class="fa fa-envelope"></i> <span> 
                          
                          </span>
                          </a> 

                          
                          <?php endif; ?>
                        <?php endif; ?>
                          
                           
                          
                       
                        
                            <a href="<?php echo e(url('admin/billprint/'.$data->cash_memo_id)); ?>" class="btn btn-warning btn-sm waves-effect waves-light"> 
                            <i class="fa fa-print"></i> <span> 
                       
                          </span>
                          </a>
                         
                          

                        </td>
                        <!-- <td><?php echo e($i++); ?></td> -->
                      
                        <td><?php echo e(date("d-m-Y", strtotime($data->date))); ?></td>  
                        <td><?php echo e($data->customer_name); ?></td>
                     
                       
                        <td><?php echo e($data->tt_deposit_balance); ?></td>
                        <td><?php echo e($data->missig_deposit_balance); ?></td>
                        <td><?php echo e($data->total); ?></td>
                        <td>
                        <?php if($setting->cndition==0): ?>

                       <?php echo e($data->Prev_due); ?>


                       <?php else: ?>
                       <?php echo e($data->f_prev_due); ?>

                       <?php endif; ?>
                          
                            </td> 
                        <td>
                             <?php if($setting->cndition==0): ?>

                       <?php echo e($data->balance); ?>


                       <?php else: ?>
                       <?php echo e($data->f_balance); ?>

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
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AB-Ceramic-Industries\AB-Ceramic-Industries\resources\views/admin/cashmemo/cashmemo.blade.php ENDPATH**/ ?>