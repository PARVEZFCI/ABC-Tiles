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
        <td><div align="center"><strong style="padding-left: 15px;font-size: 20px;">Yearly Sales Statement </strong></div></td>
      </tr>
      <tr>
        <td>
      </tr>
    </table>

  

 
  <hr>
  <br>

<table width="1000"  align="center">
  <tr>
    <td style=""> 
      Year  : <?php echo e($year); ?> 
    </td>

    <td style="text-align: right;">
        
        
     
    </td>
    
  </tr>
</table>

<table width="1000" style="border: 1px solid black" align="center">
  <tr>
    <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>
    <th width="170" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Customer Name</th>
    <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">January </th>
    <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">February</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">March</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">April </th>
    <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">May</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">June</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">July </th>
    <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">August</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">September</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">October </th>
    <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">November</th>
     <th width="93" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">December</th>
    <th width="91" style="border-bottom: 1px solid rgb(0,0,0) ">Total Sale</th>
  </tr>
  <?php $i=1;  ?>

  <tr>

    <?php $__currentLoopData = $cart_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php 
           
           $january_fr  ="$year-01-01";
           $january_to  = "$year-01-31";

           $february_fr  ="$year-02-01";
           $february_to  = "$year-02-28";

           $mar_fr  ="$year-03-1";
           $mar_to  = "$year-03-31";

           $april_fr ="$year-04-1";
           $april_to  = "$year-04-30";

           $may_fr  =  "$year-05-1" ;
           $may_to  = "$year-05-31";

           $june_fr  ="$year-06-1";
           $june_to  = "$year-06-30";

           $july_fr  ="$year-07-1";
           $july_to  = "$year-07-31";

           $august_fr  ="$year-08-1";
           $august_to  = "$year-08-31";

           $september_fr ="$year-09-1";
           $september_to  = "$year-09-30";

           $october_fr  ="$year-10-1";
           $october_to  = "$year-10-31";


           $november_fr  ="$year-11-1";
           $november_to  = "$year-11-30";

           $december_fr  ="$year-12-1";
           $december_to  = "$year-12-31";


           $january =  DB::table('cart_manage')
        ->whereBetween('date', [$january_fr, $january_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $february =  DB::table('cart_manage')
        ->whereBetween('date', [$february_fr, $february_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $march =  DB::table('cart_manage')
        ->whereBetween('date', [$mar_fr, $mar_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $april =  DB::table('cart_manage')
        ->whereBetween('date', [$april_fr, $april_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $may =  DB::table('cart_manage')
        ->whereBetween('date', [$may_fr, $may_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $june =  DB::table('cart_manage')
        ->whereBetween('date', [$june_fr, $june_fr])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $july =  DB::table('cart_manage')
        ->whereBetween('date', [$july_fr, $july_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $august =  DB::table('cart_manage')
        ->whereBetween('date', [$august_fr, $august_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $september =  DB::table('cart_manage')
        ->whereBetween('date', [$september_fr, $september_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $october =  DB::table('cart_manage')
        ->whereBetween('date', [$october_fr, $october_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $november =  DB::table('cart_manage')
        ->whereBetween('date', [$november_fr, $november_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

        $december =  DB::table('cart_manage')
        ->whereBetween('date', [$december_fr, $december_to])
        ->where('customer_name', $row->customer_name)
        ->sum('total');

    ?>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
      <?php echo e($i++); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
          <?php echo e($row->customer_name); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
       <?php echo e($january); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
       <?php echo e($february); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
     <?php echo e($march); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
   <?php echo e($april); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
     <?php echo e($may); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
   <?php echo e($june); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
       <?php echo e($july); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
     <?php echo e($august); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
     <?php echo e($september); ?>

    </td>
    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
     <?php echo e($october); ?>

    </td>
     <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
     <?php echo e($november); ?>

    </td>

    <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
      <?php echo e($december); ?>

    </td>
    <td style="border-bottom: 1px solid rgb(0,0,0) ">
      <?=  $january + $february + $march + $april + $may + $june + $july + $august + $september + $october + $november + $december  ?>
    </td>
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>
<br><br><br><br>

<table width="1000"  align="center">
  <tr class="noprint">
    <td style="text-align: center;"> <a href="<?php echo e(URL::to('admin/dashboard')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td>

      <button onclick="window.print()"  style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">Print</button>
    </td>
    
  </tr>
</table>
</body>
</html><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/report/yearlysalesstatement.blade.php ENDPATH**/ ?>