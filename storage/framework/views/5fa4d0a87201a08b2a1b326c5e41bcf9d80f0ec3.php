<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <meta name="csrf-token" content="siQAzC5MB0KAaw3OMNuipUFVbuRGJiPjNXzStNzI">
<title> Invoice - MHP-<?php echo e($bill_manage->bill_id); ?> - <?php echo e($settingsinfo->company_name); ?> </title>
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



</style>

</head>

<body>

<div align="center" class="sagor">
  <table width="560" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="520" height="100">&nbsp;</td>
      <td width="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="10">        </td>
      <td></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="50%" height="30" class="sagor">Bill ID : <strong><strong><?php echo e($bill_manage->bill_id); ?></strong></td>
          <td width="50%" class="sagor">Date : <strong><strong><?php echo e($bill_manage->date_time); ?></strong></td>
        </tr>
        <tr>
          <td height="30" class="sagor">Patient : <strong><?php echo e($bill_manage->name); ?> (<?php echo e($bill_manage->pat_id); ?>)</strong></td>
          <td class="sagor">Age/Sex : <strong><strong><?php echo e($bill_manage->age); ?>/<?php echo e($bill_manage->gender); ?></strong></td>
        </tr>
        <tr>
          <td height="30" class="sagor">Mobile : <strong><?php echo e($bill_manage->phone); ?></strong></td>
          <td class="sagor">Patient Type : <strong><?php echo e($bill_manage->pat_type); ?></strong></td>
        </tr>
        
        <tr>
          <td height="30" colspan="2" class="sagor">
        <?php if(!empty($bill_manage->visit_dr)): ?>
            Consultant : <strong><?php echo e($bill_manage->visit_dr); ?></strong> <strong>, <?php echo e($settingsinfo->company_name); ?></strong>
            <?php endif; ?>      </td>
          </tr>
      
      <tr>
          <td height="30" class="sagor">
         <?php if(!empty($bill_manage->bed_id)): ?>
            Bed : <strong><?php echo e($bill_manage->bed_name); ?>, <?php echo e($bill_manage->bed_type); ?> , <?php echo e($bill_manage->floor); ?></strong>
            <?php endif; ?>      </td>
          <td height="30" class="sagor">Total Bill : <strong><?php echo e($bill_manage->grand_total); ?> TK </strong></td>
      </tr>
      
       <tr>
          <td height="30">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td height="10" >

              
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
         <tr>
           <td width="5%" height="30" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>SN</strong></td>
           <td width="70%" align="left" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Charge Details </strong></td>
           <td width="25%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Total</strong></td>
          </tr>
          <?php
            $i=1;
          ?>

          <?php $__currentLoopData = $bill_add_to_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->charge_name); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($data->total); ?>  TK           </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" >&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong>Sub Total : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->total); ?>  TK </strong></td>
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" >&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong>Discount : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->discount); ?>  TK </strong></td>
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" >&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong>Grand Total : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->grand_total); ?>  TK </strong></td>
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" >&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong>Payment : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->payment); ?>  TK </strong></td>
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" >&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong>Due : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->due); ?>  TK </strong></td>
          </tr>
       </table>     </td>
       <td >&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr >
      <td height="50"><table width="100%" border="1" cellpadding="2" cellspacing="2" bordercolor="#000000">
        <tr>
          <td height="30" colspan="2">RF : <strong><?php echo e($bill_manage->dr_code); ?> <?php echo e($bill_manage->dr_name); ?> <?php echo e($bill_manage->dr_phone); ?></strong></td>
          </tr>
        <tr>
          <td width="55%" height="30">RF Hospital Charge : </td>
          <td width="45%"><?php echo e($bill_manage->hc_rf_fee); ?></td>
          </tr>
        <tr>
          <td height="30">RF Investigation Charge : </td>
          <td><?php echo e($bill_manage->inv_rf_fee); ?></td>
          </tr>
        <tr>
          <td height="30">RF Total Charge : </td>
          <td><?php echo e($bill_manage->hc_rf_fee + $bill_manage->inv_rf_fee); ?></td>
        </tr>
        <tr>
          <td height="30">RF Paid : </td>
          <td><?php echo e($bill_manage->amountrf); ?></td>
        </tr>
        <tr>
          <td height="30">RF Paid Date Time : </td>
          <td><?php echo e($bill_manage->rf_bill_date_time); ?></td>
        </tr>
        <tr>
          <td height="30">RF Bill Status : </td>
          <td><?php echo e($bill_manage->rf_bill_status); ?></td>
        </tr>
      </table></td>
      <td >&nbsp;</td>
    </tr>
  <tr class="noprint">
      <td height="50">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="middle">
            <a href="<?php echo e(url('admin/officerfbilllist')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
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
<?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/office/rfbillprint.blade.php ENDPATH**/ ?>