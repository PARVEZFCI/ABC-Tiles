
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

 body{
    background-image: url("{{ asset('/logo/129671727_223081455862771_4694047989133496120_n.png')}}");
    background-repeat: no-repeat;
    background-position: center;
    background-size: middle;
    background-size: 300px 300px;


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
        <td><div align="center"><strong style="padding-left: 15px;font-size: 20px;"></strong></div></td>
      </tr>
      <tr>
        <td>
      </tr>
    </table>

  

  <hr style="height: 2px;
  background-color: black;">





<div style="min-height: 700px">
  <br>
 
 <table width="1000" align="center">
    <tr>
      <td width="10">

         <span>Delivery:</span>
        
         
      </td>
      <td width="100">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" name=""><span>Customer Copy</span>
        

        
      </td>
      <td width="100">
       
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name=""><span>Office Copy </span>
      </td>
      <td width="100">
        
        <input type="checkbox" name=""><span>Accounts Copy</span>
      </td>
    </tr>
 </table>
 <br>

  <table width="1000"  align="center">
    <br>
    
     <tr>
       <td>
        
        <table style="border: 1px solid rgb(0,0,0);width: 360px;padding-bottom:27px">
          <tr>
            <th style="border-bottom: 1px solid rgb(0,0,0);text-align: left;" colspan="3">Bill To</th>
          </tr>
          <tr>
              <td colspan="3" style="font-size: 20px;">
                <b>Name :</b>  {{$cart_manage->customer_name}}
                <br>
               <b> Address: </b>{{$cart_manage->customer_address}} <br>
              <b> Mobile: </b> &nbsp;&nbsp; {{ $cart_manage->customer_phone }}
              </td>
          </tr>
      </table>
       </td>
     <td style="padding-left: 30px">
       
       <table style="border: 1px solid rgb(0,0,0);width: 360px;padding-bottom:50px"  align="right">
        <tr >
          <th style="border-bottom: 1px solid rgb(0,0,0)">Ship To</th>
        </tr>
        <tr >
          <td style="font-size: 20px;"><b> Name:</b> {{$cart_manage->ship_to}}<br>

             <b> Address: </b> &nbsp;{{$cart_manage->customer_address}} <br>

          </td>
        </tr>
      </table>
     
     </td>
       <td  style="text-align: left;padding-left: 30px;">
       
        <table  style="border: 1px solid rgb(0,0,0);width: 210px;">
              <tr style="font-size: 20px;">
                <th style="border-bottom: 1px solid rgb(0,0,0);font-size: 20px;text-align: center;" colspan="2"><h3> Invoice </h3> </th>
              </tr>
              <tr style="border-bottom: 1px solid rgb(0,0,0);" >
                <td width="198" style="border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0);">Date</td>
                <td width="279" style="border-bottom: 1px solid rgb(0,0,0);text-align: center;">Invoice</td>
              </tr>

              <tr>
                <td style="border-right: 1px solid rgb(0,0,0);">{{ date("d-m-Y", strtotime($cart_manage->date)) }}</td>
                <td style="text-align: center;">{{$cart_manage->cash_memo_id}}</td>
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
      @php $i=1;
          
           $setting = DB::table('settings')
        ->first();
        
        

       @endphp
      @foreach($cash_memo_cart as $row => $data)
      <tr>
        
        <td style="border-right: 1px solid rgb(0,0,0);text-align: center;border-bottom: 1px solid rgb(0,0,0)">{{$i++}}</td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: left;">{{$data->product_name}}</td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">{{$data->product_code}}</td>
        
        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: center;">{{$data->grade}}</td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);text-align: center;">{{$data->product_specification}}</td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">{{$data->ctn_pcs}}</td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">{{$data->qty_ctn}}</td>

        <td style="text-align: center;border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">{{$data->qty}}</td>

        <td style="border-right: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0)">{{$data->amount}}</td>

        

        <td style="border-bottom: 1px solid rgb(0,0,0);text-align: right;">{{$data->total_price}}</td>
      
        

      </tr>
     @endforeach
     <tr>

        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <td style="border-right: 1px solid rgb(0,0,0)"></td>
        <th style="border-right: 1px solid rgb(0,0,0)">Total </th>
        <td style="border-right: 1px solid rgb(0,0,0)"><b> {{$total_ctnpcs}} </b> </td>
        <th style="border-right: 1px solid rgb(0,0,0)"></th>
        <td style="border-right: 1px solid rgb(0,0,0)"><b> {{$total_quantity}} </b> </td>
       
        <th style="border-right: 1px solid rgb(0,0,0)"></th>
        <td style="text-align: right;"> <b> {{$total_price}} </b> </td>
      
        

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
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"><b>{{$cart_manage->total}} </b> </td>
                    </tr>
                    <tr>
                      <th style="border-right: 1px solid rgb(0,0,0);text-align: left;border-bottom: 1px solid rgb(0,0,0);">Previous Due/Advance</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">
                         @if($setting->cndition==0)

                       {{$cart_manage->Prev_due}}

                       @else
                       {{$cart_manage->f_prev_due}}
                       @endif
                        
                      </td>
                    </tr>
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> Total</th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);"> <b>
                        @if($setting->cndition==0)

                       {{$cart_manage->total_due}}

                       @else
                       <?= $cart_manage->f_prev_due + $cart_manage->total ?>                       @endif

                         

                      </b> </td>
                    </tr>


                     <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> TT/Deposit  &nbsp;&nbsp;&nbsp;
                        @if($cart_manage->tt_deposit_info != "0")
                            - &nbsp;&nbsp;&nbsp; 
                            {{$cart_manage->tt_deposit_info}}
                        @else

                        

                        @endif
                          </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->tt_deposit_balance}}</td>
                    </tr>
                    
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)"> Missing Deposit &nbsp;&nbsp;&nbsp;
                         
                         @if($cart_manage->missig_deposit_info != "0")

                         - &nbsp;&nbsp;&nbsp; {{$cart_manage->missig_deposit_info}}

                         @else

                        

                        @endif

                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->missig_deposit_balance}}</td>
                    </tr>


                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">  Comission  &nbsp;&nbsp;&nbsp;

                        @if($cart_manage->comission_info != "0")
                        
                         - &nbsp;&nbsp;&nbsp;
                        {{$cart_manage->comission_info}}

                         
                         @else
                        

                        @endif

                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->comission_balance}}</td>
                    </tr>


                     <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Incentives &nbsp;&nbsp;&nbsp;


                        @if($cart_manage->incentives_info != "0")
                        
                         - &nbsp;&nbsp;&nbsp;
                        {{$cart_manage->incentives_info}}

                         
                         @else
                        

                        @endif

                       


                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->incentives}}</td>
                    </tr>
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Special Discount &nbsp;&nbsp;&nbsp;
                        
                        @if($cart_manage->special_discount_info != "0")

                         - &nbsp;&nbsp;&nbsp;

                        {{$cart_manage->special_discount_info}}

                        @else
                        

                        @endif

                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->discount}}</td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">carriage &nbsp;&nbsp;&nbsp;

                        @if($cart_manage->carriage_info != "0")

                         - &nbsp;&nbsp;&nbsp; {{$cart_manage->carriage_info}}

                        @else

                       

                        @endif

                      </th>
                                
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->carriage}}</td>
                    </tr>
                   
                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Other &nbsp;&nbsp;&nbsp;

                        @if($cart_manage->other_info != "0")

                         - &nbsp;&nbsp;&nbsp; {{$cart_manage->other_info}}

                        @else

                       

                        @endif

                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->other}}</td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-bottom: 1px solid rgb(0,0,0);border-right: 1px solid rgb(0,0,0)">Cash &nbsp;&nbsp;&nbsp;

                        @if($cart_manage->cash_info != "0")

                         - &nbsp;&nbsp;&nbsp; {{$cart_manage->cash_info}}

                        @else

                        

                        @endif

                      </th>
                      
                      <td style="text-align: right;border-bottom: 1px solid rgb(0,0,0);">{{$cart_manage->cash}}</td>
                    </tr>

                    <tr>
                      <th style="text-align: left;border-right: 1px solid rgb(0,0,0)">Balance</th>
                    
                      <td style="text-align: right;"><b>
                        @if($setting->cndition==0)

                       {{$cart_manage->balance}}

                       @else
                       {{$cart_manage->f_balance}}
                       @endif
                        </b> </td>
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
    <td class="noprint" style="text-align: center;"> <a href="{{URL::to('admin/allcashmemo')}}" style="background: #db5246; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; ">back</a></td>

    <td class="noprint" style="text-align: center;">
            
        <button style="background: green; border: 1px solid #db5246; padding:20px; color: #ffffff; text-decoration: none; " onclick="window.print()">Print</button>   
     
    </td>
    
  </tr>
</table>

<script type="text/javascript">
  //window.print();
</script>
</body>
</html>