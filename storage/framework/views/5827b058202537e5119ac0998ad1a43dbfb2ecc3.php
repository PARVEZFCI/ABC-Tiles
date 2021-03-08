<!-- Start wrapper -->

 <div id="wrapper">

  <!--Start sidebar-wrapper -->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-secondary-light">
     <div class="brand-logo bg-blue"><!-- bg-danger shadow-danger -->
      <a href="<?php echo e(url('/')); ?>">
     <img src="<?php echo e(asset('/logo/'.$settingsinfo->logo)); ?>"/>
     <!--   <h5 class="logo-text"> CA Expert Acc</h5>  -->
     </a>
   </div>

   <ul class="sidebar-menu do-nicescrol">
      
      <?php if($user_role_per->accounts == 1): ?>

      <!-- Accounts -->
      <li class="sidebar-header">Modules</li>
      <li>
        <a href="<?php echo e(url('admin/dashboard')); ?>" class="waves-effect">
          <i class="icon-home"></i><span> Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-th-list"></i><span>User</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">

          <li>
            <a href="#"><i class="fa fa-th-list"></i> User 1  </a>
          </li>
        
        </ul>
      </li>

    

      <?php endif; ?>

      <?php if($user_role_per->admin == 1): ?>
      <!-- Admin -->
      <li class="sidebar-header">ADMIN</li>

      <li>
        <a href="<?php echo e(url('admin/userrole')); ?>" class="waves-effect">
          <i class="fa fa-user-circle"></i><span>Designation </span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/usermanage')); ?>" class="waves-effect">
          <i class="fa fa-users"></i><span>User Manage</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/currency')); ?>">
            <i class="fa fa-usd"></i> Currency 
        </a>
      </li>

      
      <li>
        <a href="<?php echo e(url('admin/settings')); ?>">
            <i class="fa fa-cogs"></i> Settings 
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/systemlogs')); ?>">
            <i class="fa fa-list"></i> Logs 
          </a>
      </li>


      <li>
        <a href="<?php echo e(url('admin/backup')); ?>">
            <i class="fa fa-database"></i> Backup 
        </a>
      </li>

      <?php endif; ?>

     

    </ul>

   </div>

<!-- End sidebar-wrapper
<?php /**PATH N:\XAMPP-72\htdocs\ENVATO\DOCTORS-POINT\BACKEND\resources\views/expert/sidebar.blade.php ENDPATH**/ ?>