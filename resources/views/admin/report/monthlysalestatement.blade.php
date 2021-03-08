<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<style type="text/css">
    @media print {
.noprint{
  display: none;
}
}
td{
  font-size: 15px;
}
  </style>

  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="900" height="100" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="336" align="right" valign="middle"><span style="padding-top:40px;"><img src="{{ asset('/logo/'.$settingsinfo->logo)}}" width="100" height="70" align="texttop" /></span></td>
            <td width="15" align="left" valign="middle">&nbsp;</td>
            <td width="639" align="left" valign="middle">
        
              <p style="margin-top: 30px;"><strong style="font-size: 40px;" > {{$settingsinfo->company_name}}</strong> <br>
                <!--<strong>{{$settingsinfo->address}}</strong><br><br>-->
                <strong style="padding-left: 20px;text-align: center;">Telephone:{{$settingsinfo->phone}}</strong>
                <br>
              </p>
              
            </td>
          </tr>

          

        </table></td>
      </tr>
      <tr>
        <td><div align="center"><strong style="padding-left: 15px;font-size: 20px;">Monthly Sales Statement</strong></div></td>
      </tr>
      <tr>
        <td>
      </tr>
    </table>

  


  <hr style="height: 2px;
  background-color: black;">
  <div style="min-height: 500px">
  <br>
 <table width="1100"  align="center">
  <tr>
    <td style=""> 
      From Date: {{$from_date_new}}
    </td>

    <td style="text-align: right;">

      To Date : {{$to_date_new}}
    </td>
    
  </tr>
</table>
<table width="1100" style="border: 1px solid black" align="center">
   <tr>
    <th width="30" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">SL</th>


               <th width="120" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Customer Name</th>
               <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "> A </th>
                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "> B</th>

                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">A & B</th>
                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); "> Price</th>

                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">TT/Deposit</th>
               <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Miss.Diposit</th>

                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">M.Comm.</th>
                
                 <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Incentives</th>

                <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Spc.Dis.</th>
               <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Carriage</th>
               
               
                
              <th width="50" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">Other</th>

              <!--<th width="60" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">prev.Due/Adv.</th>-->
              
              <th width="60" style="border-bottom: 1px solid rgb(0,0,0) ">Bal/Due</th>
  </tr>


 @php 
 $i=1; $to_a_q=0; $to_b_q=0;$ab_q=0;$ab=0;$pre_d=0;$bal=0; $bal_f=0;

  $tt = 0 ; $missig=0 ; $comission=0;
      
       $incen = 0;$dis=0;$carr=0;$ot=0;
       
       $setting = DB::table('settings')
        ->first();
        
      

  @endphp
       @foreach($cart_manage as $row)
       @php
        if($setting->cndition==0){
        $public = DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->get();
      }else{

      $public = DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->get();

    }
        @endphp
       @if(count($public)!=0)

       <tr style="text-align: center;">

        @php 



         
        
        if($setting->cndition==0){


        $key_bal =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->first();

        $key =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('grade_a');

        $key_b =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('grade_b');

        $total =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('total');

        $tt_deposit_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('tt_deposit_balance');

        $missig_deposit_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('missig_deposit_balance');

        $comission_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('comission_balance');

        $incentives =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('incentives');

         $discount =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('discount');

         $carriage =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('carriage');

         $other =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('other');

         $Prev_due =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->sum('Prev_due');

         $balance =  DB::table('customer')
       
        ->where('id', $row->id)
        ->first();
        
        }
        else{

        $key_bal =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->first();
        
        $key =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('grade_a');

        $key_b =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('grade_b');

        $total =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('total');

        $tt_deposit_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('tt_deposit_balance');

        $missig_deposit_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('missig_deposit_balance');

        $comission_balance =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('comission_balance');

        $incentives =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_name', $row->customer_name)
        ->where('condition','yes')
        ->sum('incentives');

         $discount =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('discount');

         $carriage =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('carriage');

         $other =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('other');

         $Prev_due =  DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $row->id)
        ->where('condition','yes')
        ->sum('Prev_due');

        $balance =  DB::table('customer')
       
        ->where('id', $row->id)
        ->first();
        
        
        
        }

        $to_a_q +=$key;

        $to_b_q  += $key_b;
        $ab_q += $key_b + $key;
        $ab  += $total;
        
        $tt += $tt_deposit_balance;
        $missig += $missig_deposit_balance;
        $comission += $comission_balance;
        $incen += $incentives;
        $dis += $discount;
        $carr += $carriage;
        $ot += $other;

        $pre_d += $Prev_due;
        $bal += $balance->openig_due;

        $bal_f +=$row->f_openig_due;


        @endphp


            <td style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
              {{$i++}}
            </td>
        
            
            <td style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0); ">
             {{$row->customer_name}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
               {{$key}}
            </td>

            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
               {{$key_b}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              <?= $key +  $key_b ?>
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
            {{$total}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
             {{$tt_deposit_balance}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
             {{$missig_deposit_balance}}
            </td>
            
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              {{$comission_balance}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
             {{$incentives}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
             {{$discount}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              {{$carriage}}
            </td>
            <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
             {{$other}}
            </td>
           <!-- <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              {{$Prev_due}}
            </td>-->
           <!--  <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              
            </td> -->

   <!--  -->


    <td style="border-bottom: 1px solid rgb(0,0,0) ">
      @if($setting->cndition==0)
     {{$row->openig_due}}
     @else
     {{$row->f_openig_due}}
     @endif
      
    </td>
      
  </tr>

  @endif
  @endforeach


  <tr>
   
            <td style="border-right: 1px solid rgb(0,0,0); ">
              
            </td>

            
            <th style="border-right: 1px solid rgb(0,0,0); ">
                Total :
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
                {{$to_a_q}}
            </th>

            <th style="border-right: 1px solid rgb(0,0,0); ">
             {{$to_b_q}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$ab_q}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$ab}}
            </th>
            <th
             style="border-right: 1px solid rgb(0,0,0); ">
               {{$tt}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$missig}}
            </th>
            
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$comission}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$incen}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$dis}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$carr}}
            </th>
            <th style="border-right: 1px solid rgb(0,0,0); ">
              {{$ot}}
            </th>
           <!-- <th style="border-right: 1px solid rgb(0,0,0); ">
              
            </th>-->
            
           <!--  <td style="border-right: 1px solid rgb(0,0,0); border-bottom: 1px solid rgb(0,0,0);">
              
            </td> -->

   <!--  -->


    <th style="">
      <!-- @if($setting->cndition==0)
     {{$bal}}
     @else
     {{$bal_f}}
     @endif-->
    </th>
  </tr>


</table>

</div>

<br><br><br>

<table width="1200"  align="center">
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



<br><br><br><br>

<table width="1000"  align="center">
  <tr class="noprint">
    <td style="text-align: center;"> <a href="{{URL::to('admin/monthlysalestatementdateselect')}}" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td>

      <button onclick="window.print()"  style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">Print</button>
    </td>
    
  </tr>
</table>
</body>
</html>