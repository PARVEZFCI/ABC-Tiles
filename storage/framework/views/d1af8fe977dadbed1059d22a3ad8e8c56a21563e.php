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
font-family:Verdana, Arial, Helvetica, sans-serif;
}

.sagor{
  font-size:10px;
  }

@media  print {
  
.noprint{
  display: none;
}

#sidebar-wrapper,.pb-2,.footer,.no-print {visibility: hidden;}
.content-wrapper,.card-body {margin-left: 0px;}
/*.content-wrapper {margin-top: 45px;}*/
html, body {
  background: #fff;
  font-family: 'Poppins', sans-serif;
  color: #636363;
  letter-spacing: 1px;
  position: relative;
  margin: 0px auto; 
  font-size: 10px !important;
  width: 300px !important;
}

}



</style>

</head>

<body>

<div align="center" class="sagor">
  <table width="300" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="280" height="50" align="center" valign="middle" style="font-size:16px; font-weight:bold;">Modern Hospital Private</td>
      <td width="20">&nbsp;</td>
    </tr>
    <tr>
      <td height="10">        </td>
      <td></td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="50" colspan="2" align="center" valign="middle" class="sagor" style="font-size:16px; font-weight:bold;">Medicine Purchase Bill </strong></td>
          </tr>
        <tr>
          <td width="50%" height="30" class="sagor">Bill ID : <strong><strong><?php echo e($bill_manage->bill_id); ?></strong></td>
          <td width="50%" class="sagor">Date : <strong><strong><?php echo e($bill_manage->date); ?></strong></td>
        </tr>
        <tr>
          <td height="30" class="sagor">Supplier : <strong><?php echo e($bill_manage->supplier_name); ?></strong></td>
          <td class="sagor">Phone : <strong><strong><?php echo e($bill_manage->supplier_phone); ?></strong></td>
        </tr>
        <tr>
          <td height="30" class="sagor">Product Category : <strong><?php echo e($bill_manage->product_category); ?></strong></td>
          <td class="sagor">Medicine Company : <strong><?php echo e($bill_manage->company_name); ?></strong></td>
        </tr>
        
        
      <tr>
          <td height="30" class="sagor"></td>
          <td height="30" class="sagor">Total Amount : <strong><?php echo e($bill_manage->total); ?> TK </strong></td>
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
           <td width="5%" height="30" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>#</strong></td>
           <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Serial</strong></td>
           <td width="40%" align="left" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Medicine   </strong></td>
       <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>QTY</strong></td>
           <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Buy Price</strong></td>
           <td width="15%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Buy Total Amount</strong></td>
           <td width="10%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Buy Sell Price</strong></td>
          </tr>
          <?php
            $i=1;

          ?>

          <?php $__currentLoopData = $pha_pur_add_to_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->serial_number); ?> </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->medicine_name); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->qty); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->buy_price); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->totay_buy_price); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->sell_price); ?> </td>
           
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
          
          <tr>
           <td height="30" align="center" valign="middle" colspan="4">&nbsp;</td>
           <td align="right" valign="middle" class="sagor">
             <strong> Total : </strong>           </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><strong> <?php echo e($bill_manage->total); ?>  TK </strong></td>
       <td height="30" align="center" valign="middle" >&nbsp;</td>
          </tr>
          
       </table>     
     </td>
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
            <a href="<?php echo e(url('admin/phamedpur')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
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
<?php /**PATH N:\XAMPP-72\htdocs\SOFTWARE-NEW\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacy/phamedpurbill.blade.php ENDPATH**/ ?>