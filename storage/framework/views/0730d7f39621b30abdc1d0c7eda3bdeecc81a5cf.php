<?php $__env->startSection('title', 'Dashboard - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<body onload="info_noti()">

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="clearfix"></div>
    
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="card " style="margin-bottom: 0px; background: #febe10;">

           <div class="card-header bg-transparent text-white">
              Welcome, Modern Hospital Private 
           </div>
             
          </div>
        </div>
      </div><!--End Row-->

      <!-- <div class="row mt-4">

        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-purple shadow-purple">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                    500
                  </h6>
                  <span class="text-white">Cash in Hand</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-info shadow-info">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                   500
                </h6>
                  <span class="text-white">Bank</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-danger shadow-danger">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                     500
                  </h6>
                  <span class="text-white">Receivable</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <a href="#">
          <div class="card bg-success shadow-success">
            <div class="card-body">
              <div class="media">
                <div class="media-body text-left">
                  <h6 class="text-white">
                     500
                 </h6>
                  <span class="text-white">Payable</span>
                </div>
                <div class="align-self-center" style="color: #ffffff;">
                  <i class="fa fa-list-ul fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>

      </div>  -->

     
  </div>
</div>  

  <?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>
  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>