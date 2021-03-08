<!-- Start wrapper -->

 <div id="wrapper">

  <!--Start sidebar-wrapper -->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-secondary-light">
     <div class="brand-logo bg-blue" style="background: #3399ff;"><!-- bg-danger shadow-danger -->
      <a href="<?php echo e(url('/')); ?>">
     <img src="<?php echo e(asset('/logo/'.$settingsinfo->logo)); ?>"/>
     <!--   <h5 class="logo-text"> CA Expert Acc</h5>  -->
     </a>
   </div>

   <ul class="sidebar-menu do-nicescrol">
  
      <!-- Accounts -->
      <li class="sidebar-header">Modules</li>
      
      <li>
        <a href="<?php echo e(url('admin/dashboard')); ?>" class="waves-effect">
          <i class="icon-home"></i><span> Dashboard</span>
        </a>
      </li>
      
      <?php if($user_role_per->reception == 1): ?>
      <li class="sidebar-header">Receiption</li>


      
      <li>
        <a href="<?php echo e(url('admin/patientsadd')); ?>" class="waves-effect">
          <i class="fa fa-users"></i> <span> Patients </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->reception == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/opd')); ?>" class="waves-effect">
          <i class="fa fa-stethoscope"></i> <span> OPD - Out Patient </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->reception == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/ipd')); ?>" class="waves-effect">
          <i class="fa fa-bed"></i> <span> IPD - In Patient </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->reception == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/billadd')); ?>" class="waves-effect">
          <i class="fa fa-cart-plus"></i> <span> Bill </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->reception == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/bill')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Bill List </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/officerfbilllist')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Receiption RF Bill</span>
        </a>
      </li>
      <?php endif; ?>

      <?php if($user_role_per->pharmacy == 1): ?>
      <li class="sidebar-header">Pharmacy</li>
      <li>
        <a href="<?php echo e(url('admin/phaproductcategory')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Medicine Category </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedicinecompany')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Medicine Company </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedpur')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Purchase Medicine </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedpurlist')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Purchase Medicine List </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedsell')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Medicine Sell </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedselllist')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Sell List</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/medicinereturn')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Medicine Return</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/medicinereturnbypatient')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Medicine Return By Pt</span>
        </a>
      </li>

      <li class="sidebar-header">Pharmacy Report</li>
      <li>
        <a href="<?php echo e(url('admin/phapatbillreport')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Patient Bill Report </span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/phamedstock')); ?>" class="waves-effect">
          <i class="fa fa-list"></i> <span> Report Stock & Sell </span>
        </a>
      </li>

      <?php endif; ?>

      <?php if($user_role_per->lab == 1): ?>
      <li class="sidebar-header">Lab</li>
      <li>
        <a href="<?php echo e(url('admin/testlist')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Test List (Pending)</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/testlistcomplete')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Test List (Complete)</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(url('admin/testlistprint')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Test Result (Print)</span>
        </a>
      </li>
     
      <?php endif; ?>

      <?php if($user_role_per->office == 1): ?>
      <li class="sidebar-header">Office (Accounts)</li>
      <li>
        <a href="<?php echo e(url('admin/officebilllist')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Office Bill List</span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(url('admin/officerfbilllist')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Office RF Bill</span>
        </a>
      </li>
      <?php endif; ?>

      <?php if($user_role_per->admin == 1): ?>
      <li class="sidebar-header">Admin</li>
      <li>
        <a href="<?php echo e(url('admin/refmanage')); ?>" class="waves-effect">
          <i class="fa fa-user-secret"></i> <span> Ref. Manage </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>

      <li>
        <a href="<?php echo e(url('admin/doctors')); ?>" class="waves-effect">
          <i class="fa fa-user-md"></i> <span> Ref. Doctors </span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/hospitalcharge')); ?>" class="waves-effect">
          <i class="fa fa-credit-card-alt"></i> <span> Hospital Charge</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/investigations')); ?>" class="waves-effect">
          <i class="fa fa-file-text"></i> <span> Investigations</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/bedmanage')); ?>" class="waves-effect">
          <i class="fa fa-bed"></i> <span> Bed Manage</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <!-- <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-th-list"></i><span>User</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">

          <li>
            <a href="#"><i class="fa fa-th-list"></i> User 1  </a>
          </li>
        
        </ul>
      </li> -->


      <!-- Admin 
      <li class="sidebar-header">ADMIN</li>-->



     <!--  <li>
        <a href="<?php echo e(url('admin/userrole')); ?>" class="waves-effect">
          <i class="fa fa-user-circle"></i><span>Designation </span>
        </a>
      </li> -->
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/usermanage')); ?>" class="waves-effect">
          <i class="fa fa-users"></i><span>User Manage</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <!-- <li>
        <a href="<?php echo e(url('admin/currency')); ?>">
            <i class="fa fa-usd"></i> Currency 
        </a>
      </li> -->

      <?php endif; ?>
      <?php if($user_role_per->admin == 1): ?>
      <li>
        <a href="<?php echo e(url('admin/settings')); ?>">
            <i class="fa fa-cogs"></i> Settings 
        </a>
      </li>

      <!-- <li>
        <a href="<?php echo e(url('admin/systemlogs')); ?>">
            <i class="fa fa-list"></i> Logs 
          </a>
      </li>


      <li>
        <a href="<?php echo e(url('admin/backup')); ?>">
            <i class="fa fa-database"></i> Backup 
        </a>
      </li> -->

      <?php endif; ?>

     

    </ul>

   </div>

<!-- End sidebar-wrapper
<?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/expert/sidebar.blade.php ENDPATH**/ ?>