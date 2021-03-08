<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
<meta name="csrf-token" content="siQAzC5MB0KAaw3OMNuipUFVbuRGJiPjNXzStNzI">
<title>Medicine Stock Report - <?php echo e($settingsinfo->company_name); ?> </title>
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
      <td width="520" height="100" align="center" valign="middle"><strong>Pharmecy Stock Report <?php if(!empty($med_type)): ?> - <?php echo e(@$med_type); ?> <?php endif; ?></strong></td>
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
           <td width="10%" align="left" valign="middle" class="sagor" style="border-top: 1px solid #000;border-bottom: 1px solid #000;"><strong>Serial</strong></td>
           <td width="30%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Medicine Name </strong></td>
           <td width="10%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">QTY</td>
           <td width="15%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Buy Price </td>
           <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Total Buy Price </td>
           <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Sell Price </td>
         </tr>
          <?php
            $i=1;
      $totq = 0;
      $totbp = 0;
          ?>

          <?php $__currentLoopData = $current_stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->serial_number); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($data->medicine_name); ?>  TK           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->qty); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->buy_price); ?> TK</td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->totay_buy_price); ?> TK</td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->sell_price); ?> TK</td>
         </tr>
      <?php
            $totq+=$data->qty;
      $totbp+=$data->totay_buy_price;
          ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
                      </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor">Total Qty : </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($totq); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor">Total Buy Price : </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($totbp); ?> TK</td>
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
<?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacyreport/phamedstockresult.blade.php ENDPATH**/ ?>