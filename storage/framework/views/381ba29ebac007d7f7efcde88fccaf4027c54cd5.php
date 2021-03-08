<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


  <style type="text/css">
    @media  print {
.noprint{
  display: none;
}
}
  </style>

  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="900" height="100" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="336" align="right" valign="middle"><span style="padding-top:40px;"><img src="<?php echo e(asset('/logo/'.$settingsinfo->logo)); ?>" width="100" height="70" align="texttop" /></span></td>
            <td width="15" align="left" valign="middle">&nbsp;</td>
            <td width="639" align="left" valign="middle">
        
              <p style="margin-top: 30px;"><strong style="font-size: 30px;" > <?php echo e($settingsinfo->company_name); ?></strong> <br>
                <strong><?php echo e($settingsinfo->address); ?></strong><br>
                <br>
              </p>
            </td>
          </tr>

          

        </table></td>
      </tr>
      <tr>
        <td><div align="center"><strong style="padding-left: 15px;font-size: 20px;">Customer Due Statement </strong></div></td>
      </tr>
      <tr>
        <td>
      </tr>
    </table>

 

  

  <hr>
  <p style="text-align: right;margin-right: 250px;">Print Date:<?php echo date("d/m/Y ");?> </p>
<table width="1000" style="border: 1px solid black" align="center">
  <tr>
    <th width="40" style="border-bottom: 1px solid rgb(0,0,0);text-align: left;border-right: 1px solid rgb(0,0,0); ">SL</th>
    <th width="120" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">&nbsp;&nbsp;Customer Name</th>
    <th width="70" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0);text-align: right; ">Balance/Due</th>
    <th width="91" style="border-bottom: 1px solid rgb(0,0,0);text-align: center; ">Remarks</th>
  </tr>
  <?php $i=1; ?>
  <?php $__currentLoopData = $customerstatement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
      <?php echo e($i++); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">&nbsp;&nbsp;
      <?php echo e($row->customer_name); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);text-align: right;">
       <?php echo e($row->openig_due); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0) ">
      
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <!--  <tr>
    <td style="border-right: 1px solid rgb(0,0,0); ">&nbsp;</td>
    <td style="border-right: 1px solid rgb(0,0,0); ">&nbsp;</td>
    <td style="border-right: 1px solid rgb(0,0,0); ">&nbsp;</td>
    <td style=" ">&nbsp;</td>
  </tr> -->
</table>
<br><br><br><br>

<table width="1000"  align="center">
  <tr>
    <td style="text-align: center;" class="noprint"> <a  href="<?php echo e(URL::to('admin/dashboard')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td class="noprint">

      <button onclick="window.print()"  style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">Print</button>
    </td>
    
  </tr>
</table>
</body>
</html><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/report/customerduestatement.blade.php ENDPATH**/ ?>