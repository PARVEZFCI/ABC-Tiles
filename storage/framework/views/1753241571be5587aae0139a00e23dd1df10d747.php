
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
                <strong><?php echo e($settingsinfo->address); ?></strong><br><br>
                <strong style="padding-left: 30px;">Telephone:<?php echo e($settingsinfo->phone); ?></strong>
                <br>
              </p>
            </td>
          </tr>

          

        </table></td>
      </tr>
      <tr>
        <td><div align="center"><strong style="padding-left: 15px;font-size: 20px;"></strong></div></td>
      </tr>
      <tr>
        <td>
      </tr>
    </table>

  

  <hr>

<table width="1000"  align="center">
        <tr>
          <td>
            <input type="checkbox" name=""> Customer Copy <br>
            <input type="checkbox" name=""> Office Copy <br>
            <input type="checkbox" name=""> Accounts Copy
            
          </td>
          <td style="float: right;">
            <table>
              <table style="border: 1px solid rgb(0,0,0);width: 200px;">
              <tr >
                <th style="border-bottom: 1px solid rgb(0,0,0);" colspan="2"><h3> Invoice </h3> </th>
              </tr>
              <tr style="border-bottom: 1px solid rgb(0,0,0);" >
                <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0);">Date</td>
                <td style="border-bottom: 1px solid rgb(0,0,0);">Invoice</td>
              </tr>

              <tr>
                <td style="border-right: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->date); ?></td>
                <td><?php echo e($cart_manage->cash_memo_id); ?></td>
              </tr>

            </table>
            </table>
          </td>
        </tr>
       
        

      
  <?php $i=1;  ?>

 

  
</table>

  <table width="1000"  align="center">
    <tr>
      <td>
        <h3>Delivery:</h3>
      </td>
      <td></td>
    </tr>
     <tr>
       <td>
        <table style="border: 1px solid rgb(0,0,0);width: 250px">
          <tr>
            <th style="border-bottom: 1px solid rgb(0,0,0);text-align: left;" colspan="3">Bill To</th>
          </tr>
          <tr>
              <td colspan="3">
                Name :&nbsp;&nbsp;&nbsp; <?php echo e($cart_manage->customer_name); ?>

                <br>
                Address: &nbsp;<?php echo e($cart_manage->customer_address); ?> <br>
               Mobile: &nbsp;&nbsp; <?php echo e($cart_manage->customer_phone); ?>

              </td>
          </tr>
      </table>
       </td>
       <td style="text-align: left;">
         <table style="border: 1px solid rgb(0,0,0);width: 200px;"  align="right">
        <tr >
          <th style="border-bottom: 1px solid rgb(0,0,0)">Ship To</th>
        </tr>
        <tr >
          <td ><?php echo e($cart_manage->ship_to); ?></td>
        </tr>
      </table>

       </td>
     </tr>
  </table>

<br><br>
     <table  width="1000"  align="center" style="border: 1px solid rgb(0,0,0);text-align: center;">
       <tr>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: center;">SL #</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">Product Name</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">Product Code</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)" >Grade</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)" >Specification </th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">Ctn./Pcs.</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">Qty./Ctn</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">Quantity</th>
        <th style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)" >Product  Rate</th>
        
        <th style="border-bottom: 1px solid rgb(0,0,0);text-align: center;">Total Price</th>
        
      </tr>
      <?php $i=1; ?>
      <?php $__currentLoopData = $cash_memo_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        
        <td style="border-right: 1px solid rgb(0,0,0);text-align: center;border-bottom: 1px solid rgb(0,0,0)"><?php echo e($i++); ?></td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->product_name); ?></td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->product_code); ?></td>
        
        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: center;"><?php echo e($data->grade); ?></td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: center;"><?php echo e($data->product_specification); ?></td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->ctn_pcs); ?></td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->qty_ctn); ?></td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->qty); ?></td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)"><?php echo e($data->amount); ?></td>

        

        <td style="border-bottom: 1px solid rgb(0,0,0);text-align: right;"><?php echo e($data->total_price); ?></td>
      
        

      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <tr>

        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <th style="border-right: 1px solid rgb(0,0,0)">Total </th>
        <td style="border-right: 1px solid rgb(0,0,0)"><b> <?php echo e($total_ctnpcs); ?> </b> </td>
        <th style="border-right: 1px solid rgb(0,0,0)"></th>
        <td style="border-right: 1px solid rgb(0,0,0)"><b> <?php echo e($total_quantity); ?> </b> </td>
       
        <th style="border-right: 1px solid rgb(0,0,0)"></th>
        <td style="text-align: right;"> <b> <?php echo e($total_price); ?> </b> </td>
      
        

      </tr>
     </table>

<br><br><br><br>
      <table   width="1000"  align="center">
            <tr>
              <td> 
                 <h4>Bank/Check Particular (if any )</h4>
                
                 <h4>Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</h4>
                 <h4>Branch  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</h4> 
                 <h4>Check No &nbsp;&nbsp;:</h4> 
                 <h4> Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>  
                   
                
              </td>
           <td>
             <table   align="right" style="border: 1px solid rgb(0,0,0);width: 500px;">
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Sub Total</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><b><?php echo e($cart_manage->total); ?> </b> </td>
                    </tr>
                    <tr>
                      <th style="border-right: 1px solid rgb(0,0,0);text-align: left;border-bottom: 1px solid rgb(0,0,0);">Previous Due/Advance</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->Prev_due); ?></td>
                    </tr>
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> Total</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"> <b><?php echo e($cart_manage->total_due); ?> </b> </td>
                    </tr>


                     <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> TT/Deposit</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->tt_deposit_balance); ?></td>
                    </tr>
                    
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> Missing Deposit</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->missig_deposit_balance); ?></td>
                    </tr>


                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">  Comission </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->comission_balance); ?></td>
                    </tr>


                     <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Incentives</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->incentives); ?></td>
                    </tr>
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Special Discount</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->discount); ?></td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">carriage</th>
                                
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->carriage); ?></td>
                    </tr>
                   
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Other</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->other); ?></td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Cash</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><?php echo e($cart_manage->cash); ?></td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-right: 1px solid rgb(0,0,0)">Balance</th>
                    
                      <td style="text-align: right;"><b> <?php echo e($cart_manage->balance); ?> </b> </td>
                    </tr>

            </table>
              </td>
          </tr>
      </table>

<br><br><br><br>

<br><br>
<table width="1000"  align="center">
  <tr>

     <td>
       <hr style="width: 200px;">
        <p style="text-align: center;"> Prepared By</p>
     </td>
    <td style="text-align: center;">

       <hr style="width: 200px;">
       <p style="text-align: center;"> Authorized Signature</p> 

    </td>

    <td>

     <hr style="width: 200px;">
     <p style="text-align: center;"> Checked By</p>

    </td>
    
  </tr>
</table>

<br><br><br>
<table width="1000"  align="center">
  <tr>
    <td class="noprint" style="text-align: center;"> <a href="<?php echo e(URL::to('admin/allcashmemo')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td class="noprint" style="text-align: center;">
            
        <button style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; " onclick="window.print()">Print</button>   
     
    </td>
    
  </tr>
</table>

<script type="text/javascript">
  //window.print();
</script>
</body>
</html><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/cashmemo/cashmemoinvoice.blade.php ENDPATH**/ ?>