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
  font-size:15px;
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
  <table width="900px" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="520" height="100">&nbsp;</td>
      <td width="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" align="center" valign="middle"><strong>Report</strong> </td>
      <td></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="50%" height="30" class="sagor">Bill ID : <strong><strong><?php echo e($bill_manage->bill_id); ?></strong></td>
          <td width="50%" class="sagor">Report Date : <strong><strong><?php echo e($bill_manage->report_time); ?></strong></td>
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
          <td height="30" class="sagor"></td>
      </tr>
      
       <tr>
          <td height="30">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td colspan="3">
         <table class="table table-dark" style="width: 100%">
        <tr>
          <th style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;">Test Name</th>
          <th style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;">Result</th>
           <th style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;">Unit</th>
          <th style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;">Ref. Value</th>
          
        </tr>
        <tr style="text-align: center;">
          <td style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;"><?php echo e($addcart_data->charge_name); ?></td>
          <td style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;"><?=$addcart_data->report_result?> </td>
          <td style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;"><?php echo e($investigation_data->unit_test); ?></td>
          <td style="border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right: 1px solid #000;"><?php echo e($investigation_data->inv_ref_value); ?></td>
          
        </tr>
      </table>
       </td>
       
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
            <a href="<?php echo e(url('admin/testlistcomplete')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
                <i class="fa fa-check-square-o"></i> Back            </a>          </td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">
            <!-- <button onclick="window.print()" style="background: #129a5a; border: 1px solid #129a5a; padding:15px; color: #ffffff; text-decoration: none;cursor: pointer;font-size: 18px;">
                <i class="fa fa-check-square-o"></i> Print            </button>  -->         </td>
        </tr>
      </table>    </td>
      <td>&nbsp;</td>
  </tr>
  </table>


</div>


</body>
</html>
<?php /**PATH F:\Xampp\htdocs\HOSPITAL-MANAGEMENT-SYSTEM\resources\views/admin/lab/testresprint.blade.php ENDPATH**/ ?>