<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <meta name="csrf-token" content="siQAzC5MB0KAaw3OMNuipUFVbuRGJiPjNXzStNzI">
<title> Medicine Purchase Invoice - <?php echo e($bill_manage->bill_id); ?> - <?php echo e($settingsinfo->company_name); ?> </title>
  <!--favicon-->
  <link rel="icon" type="image/png" href="<?php echo e(asset('/logo/158116565711.png')); ?>" />
  
<style>
body{
font-family: 'Linux Libertine','Georgia','Times',serif;
}

.sagor{
  font-size:14px;
  font-family: 'Linux Libertine','Georgia','Times',serif;
  font-weight: bold;
}

@media  print {
  
.noprint{
  display: none;
}

/*#sidebar-wrapper,.pb-2,.footer,.no-print {visibility: hidden;}
.content-wrapper,.card-body {margin-left: 0px;}
.content-wrapper {margin-top: 45px;}
html, body {
  background: #fff;
  font-family: sans-serif;
  color: #636363;
  letter-spacing: 1px;
  position: relative;
  margin: 0px auto; 
  font-size: 12px !important;
  width: 300px !important;
}*/

}



</style>

</head>

<body>

<div align="center" class="sagor">
  <table width="300" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="280" height="50" align="center" valign="middle" style="font-size:16px; font-weight:bold;">Modern Hospital Private</td>
    </tr>
    <tr>
      <td height="10">        </td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="50" align="center" valign="middle" class="sagor" style="font-size:16px; font-weight:bold;">Medicine Sales Bill </strong></td>
          </tr>
        <tr>
          <td width="50%" height="30" class="sagor">Bill ID : <strong><strong><?php echo e($bill_manage->bill_id); ?></strong></td>
          </tr>

<tr>
          <td height="30" class="sagor">Date : <strong><?php echo e($bill_manage->date_time); ?></strong></td>
          </tr>

        <tr>
          <td height="30" class="sagor">Patient : <strong><?php echo e($bill_manage->patient); ?></strong></td>
          </tr>
    <tr>

      <tr>
          <td height="30" class="sagor">Patient ID : <strong><?php echo e($bill_manage->pat_id); ?></strong></td>
          </tr>
    <tr>

<tr>
          <td height="30" class="sagor">Bed : <strong><?php echo e($bill_manage->bed); ?></strong></td>
          </tr>
    <tr>

          <td height="30" class="sagor">Status : <strong><?php echo e($bill_manage->status); ?></strong></td>
          </tr>
        
<tr>
          <td height="30" class="sagor">Sales User : <strong><strong><?php echo e(@$bill_manage->sales_user); ?></strong></td>
          </tr>    
      
      
       <tr>
          <td height="30" class="sagor">Total Amount : <strong><?php echo e($bill_manage->in_total); ?> TK</strong></td>
          </tr>
      </table></td>
    </tr>
    <tr>
       <td height="10" >

              
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
         <tr>
           <td width="5%" height="30" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>#</strong></td>
      
           <td width="40%" align="left" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Medicine   </strong></td>
       <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>QTY</strong></td>
          
           <td width="15%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong> Price</strong></td>
            <td width="15%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong> Total</strong></td>
          </tr>
          <?php
            $i=1;

          ?>

          <?php $__currentLoopData = $pha_sales_add_to_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->med_name); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->qty); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->price); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->total); ?> </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
           <td height="30" align="center" valign="middle" colspan="3">&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong> Sub Total : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->total); ?>  TK </strong></td>
     
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" colspan="3">&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong> Discount : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->discount); ?>  TK </strong></td>
     
          </tr>
          <tr>
           <td height="30" align="center" valign="middle" colspan="3">&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong> Total : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->in_total); ?>  TK </strong></td>
     
          </tr>
       </table>     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr >
      <td height="50">&nbsp;</td>
    </tr>
  <tr class="noprint">
      <td height="50">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="middle">
            <a href="<?php echo e(url('admin/phamedselllist')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
                <i class="fa fa-check-square-o"></i> Back            </a>          </td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">
            <button onClick="window.print()" style="background: #129a5a; border: 1px solid #129a5a; padding:15px; color: #ffffff; text-decoration: none;cursor: pointer;font-size: 18px;">
                <i class="fa fa-check-square-o"></i> Print            </button>          </td>
        </tr>
      </table>    </td>
    </tr>
  </table>
</div>


</body>
</html>
<?php /**PATH G:\xamppp\htdocs\hospital_management\modern_hospital_private\resources\views/admin/pharmacysell/phamedsalesbill.blade.php ENDPATH**/ ?>