<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
<meta name="csrf-token" content="siQAzC5MB0KAaw3OMNuipUFVbuRGJiPjNXzStNzI">
<title>Medicine Sales Report - <?php echo e($settingsinfo->company_name); ?> </title>
  <!--favicon-->
  <link rel="icon" type="image/png" href="<?php echo e(asset('/logo/158116565711.png')); ?>" />
  
<style>
body{
font-family:Verdana, Arial, Helvetica, sans-serif;
}

.sagor{
  font-size:10px;
  }

@media  print {
.noprint{
  display: none;
}
}



.style1 {font-size: 10px; font-weight: bold; }
</style>

</head>

<body>

<div align="center" class="sagor">
  <table width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="520" height="100" align="center" valign="middle"><strong>Pharmecy Sales Report <?php if(!empty($sales_user)): ?> - <?php echo e(@$sales_user); ?> <?php endif; ?> - From <?php echo e(@$formnewDate); ?> to <?php echo e(@$tonewDate); ?></strong></td>
      <td width="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="10">        </td>
      <td></td>
    </tr>
    
    <tr>
       <td height="10" >

              
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
         <tr>
           <td width="5%" height="30" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>#</strong></td>
           <td width="10%" align="left" valign="middle" class="sagor" style="border-top: 1px solid #000;border-bottom: 1px solid #000;"><strong>Bill ID</strong></td>
           <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Date </strong></td>
           <td width="10%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Patient</td>
           <td width="15%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Bed </td>
           <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Sales User </td>
		    <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Amount </td>
		   <td width="10%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Status </td>
         </tr>
          <?php
            $i=1;
      $totals = 0;
          ?>

          <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->bill_id); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($data->date_time); ?>  </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->patient); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->bed); ?> </td>
           
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->sales_user); ?> </td>
		   <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->total); ?> TK</td>
		   <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->status); ?> </td>
         </tr>
      <?php
            $totals+=$data->total;
          ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
                      </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> </td>
          
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">Total : </td>
		    <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($totals); ?> TK</td>
		   <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"></td>
         </tr>
       </table>     </td>
       <td >&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr >
      <td height="50">&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
  <tr class="noprint">
      <td height="50">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="middle">
            <a href="<?php echo e(url('admin/phamedstock')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
                <i class="fa fa-check-square-o"></i> Back            </a>          </td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">
            <button onClick="window.print()" style="background: #129a5a; border: 1px solid #129a5a; padding:15px; color: #ffffff; text-decoration: none;cursor: pointer;font-size: 18px;">
                <i class="fa fa-check-square-o"></i> Print            </button>          </td>
        </tr>
      </table>    </td>
      <td>&nbsp;</td>
  </tr>
  </table>
</div>


</body>
</html>
<?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacyreport/phamedsales_all.blade.php ENDPATH**/ ?>