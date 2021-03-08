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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
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
      <td width="520" height="100" align="center" valign="middle">
      <strong>Pharmecy Medicine Bill </strong> <br>
      Patient : <strong> <?php echo e($patient_manage->name); ?> </strong> 
      , Patient ID : <strong> <?php echo e($patient_manage->pat_id); ?> </strong>
     </td>
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
           <td width="30%" align="center" valign="middle" style="border-top: 1px solid #000;border-bottom: 1px solid #000;" class="sagor"><strong>Date </strong></td>
           <td width="10%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Bed </td>
           <td width="15%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Total </td>
           <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Discount</td>
           <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">In Total  </td>
        <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Sales User </td>
       <td width="20%" align="center" valign="middle" class="style1" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">Status  </td>
         </tr>
          <?php
            $i=1;
            $total = 0;
            $discount = 0;
            $in_total = 0;

            $duetoal = 0;
            $duediscount = 0;
            $duein_total = 0;
    
          ?>

          <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td height="30" align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($i++); ?>           </td>
           <td align="left" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->bill_id); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor">
            <?php echo e($data->date_time); ?>            </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->bed); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->total); ?> TK</td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->discount); ?> TK</td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->in_total); ?> TK</td>
       <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->sales_user); ?> </td>
       <td align="center" valign="middle" style="border-bottom: 1px solid #000;" class="sagor"><?php echo e($data->status); ?> </td>
       
         </tr>
      <?php

            if($data->status == "paid"){
              $total+=$data->total;
              $discount+=$data->discount;
              $in_total+=$data->in_total;
            } else {
              $duetoal+=$data->total;
              $duediscount+=$data->discount;
              $duein_total+=$data->in_total;
            }

          ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
           <td height="30" align="center" valign="middle" class="sagor">
                      </td>
           <td align="left" valign="middle" class="sagor"> </td>
       <td align="left" valign="middle" class="sagor"> </td>
   
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor">Paid : </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($total); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($discount); ?> TK</td>
       <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($in_total); ?> TK</td>
           <td align="center" valign="middle" class="sagor"></td>
            <td height="30" align="center" valign="middle" class="sagor">
                      </td>
         </tr>

         <tr>
           <td height="30" align="center" valign="middle" class="sagor">
                      </td>
           <td align="left" valign="middle" class="sagor"> </td>
       <td align="left" valign="middle" class="sagor"> </td>
   
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor">Due : </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> <?php echo e($duetoal); ?></td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"><?php echo e($duediscount); ?> TK</td>
       <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> <?php echo e($duein_total); ?>TK</td>
           <td align="center" valign="middle" class="sagor"></td>
            <td height="30" align="center" valign="middle" class="sagor">
                      </td>
         </tr>
         
          <tr>
           <td height="30" align="center" valign="middle" class="sagor">
                      </td>
           <td align="left" valign="middle" class="sagor"> </td>
       <td align="left" valign="middle" class="sagor"> </td>
   
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor">Total : </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> <?php echo e($total + $duetoal); ?> </td>
           <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> <?php echo e($discount + $duediscount); ?>  TK</td>
       <td align="center" valign="middle" style="border-bottom: 1px solid #000;font-weight: bold;" class="sagor"> <?php echo e($in_total + $duein_total); ?>  TK</td>
           <td align="center" valign="middle" class="sagor"></td>
            <td height="30" align="center" valign="middle" class="sagor">
                      </td>
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
         <form method="post" action="<?php echo e(url('admin/phapatbillreportrespaid')); ?>">
          <?php echo csrf_field(); ?> 

          <tr>
          <td align="center" valign="middle">

            <input type="hidden" id="pat_id" value="<?php echo e($patient_manage->pat_id); ?>" name="id">
          <label>Due amount</label>
            <input style="height: 38px;border-radius: 1%" type="number" id="bill"  name="bill" value="<?php echo e($duein_total); ?>">
            <button  type="submit" class="btn btn-danger">payment</button>
              </td>
          <td colspan="2" align="center">
            
           </td>
        </tr>
         </form>
      </table> 
    


         </td>
      
  </tr>


  <tr class="noprint">
      <td height="50">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="middle">
            <a href="<?php echo e(url('admin/phapatbillreport')); ?>" style="background: #db5246; border: 1px solid #db5246; padding:15px; color: #ffffff; text-decoration: none; ">
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


<script type="text/javascript">
  /*function payment(){
    var pat_id = $('#pat_id').val();
    var bill=$('#bill').val();
    
    $.ajax({
      url:'phapatbillreportrespaid',
      type:'get',
      data:{
        pat_id:pat_id,
        bill:bill
      },
      success:function(data){
        console.log(data);
      }

    })
  }*/
  
</script>

</body>
</html>
<?php /**PATH F:\Xampp\htdocs\MODERN-HOSPITAL-PRIVATE\resources\views/admin/pharmacyreport/phapatbillreportres.blade.php ENDPATH**/ ?>