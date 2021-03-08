<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class cashmemoController extends Controller
{

  public function otpMessage($id){

     $cashmemo = DB::table('cart_manage')->where('id',$id)->first();

     $settings = DB::table('settings')->orderBy('id','DESC')->first();

     $updt = $settings->Total_message - 1;

     $data_set = [
      'Total_message'=>$updt

     ];
       
      DB::table('settings')->where('id',1)->update($data_set);

     $data=[

       'sms_status' => 1

     ];
     DB::table('cart_manage')->where('id',$id)->update($data);


      //all deposit balance for message 
        $deposit = $cashmemo->cash+$cashmemo->discount+$cashmemo->carriage+$cashmemo->breakage+$cashmemo->incentives+$cashmemo->other + $cashmemo->tt_deposit_balance + $cashmemo->comission_balance + $cashmemo->missig_deposit_balance;
       //end deposit
       
     
        //////0tp----------------------------------------!>
        ///
$smstext = urlencode("Dear Customer, Your Deposit Tk. $deposit  & your purchase value Tk. $cashmemo->total on $cashmemo->date. Current Balance Tk. $cashmemo->balance Thanks for transaction with ABC Tiles.");        

$url = "http://sms.tense.com.bd/api-sendsms?user=mrcourier&password=01716110032&campaign=ECSOURIER&number=".$cashmemo->customer_phone."&text=".$smstext;

           
            $ch = curl_init();
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            $contents = curl_exec($ch);

            if (curl_errno($ch)) {
                echo curl_error($ch);
                echo "\n<br />";
                $contents = '';
            } else {
                curl_close($ch);
            }

            if (!is_string($contents) || !strlen($contents)) {
                echo "Failed to get contents.";
                $contents = '';
            }
        
        ///newotp

   /* $six_digit_random_number = mt_rand(100000, 999999);
session(['otpreg'=>$six_digit_random_number]);      

$to = "{$cashmemo->customer_phone}";
$token = "345d60d5aa6a545e697143e344959f61";

$url = "http://api.greenweb.com.bd/api.php?json"; 

$message = "Dear Customer, Your Deposit Tk. $deposit  & your purchase value Tk. $cashmemo->total on $cashmemo->date. Current Balance Tk. $cashmemo->balance Thanks for transaction with ABC Tiles.";    


$data  = array(
    'to'      =>"$to",
    'message' =>"$message",
    'token'   =>"$token"
    ); // Add parameters in key value

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
*/


//-------------------otpend-------------------->
       
       
  $notification=array(
               'messege'=>'Messege Send successfully!',
               'alert-type'=>'success'
                   );

       return redirect()->back()->with($notification);




  }



   public function allcashmemo(){

    /*$data['cashmemo']=DB::table('cart_manage')
    ->orderBy('id','DESC')
    ->get();*/
    
      $setting = DB::table('settings')
        ->first();

    if ($setting->cndition==0){


    $data['cashmemo'] = $cashmemo = DB::table('cart_manage')
    ->orderBy('id','DESC')
    ->get();

    
    
    $data['editable_ids'] = collect(DB::table('cart_manage')
        ->select(DB::raw('MAX(id) as maxID'))
        ->groupBy('customer_code')
        ->get())->pluck('maxID')->all();
  }else{

    $data['cashmemo'] = DB::table('cart_manage')
    ->orderBy('id','DESC')
    ->where('condition',"yes")
    ->get();
    
    $data['editable_ids'] = collect(DB::table('cart_manage')
        ->select(DB::raw('MAX(id) as maxID'))
        ->groupBy('customer_code')
        ->where('condition',"yes")
        ->get())->pluck('maxID')->all();

  }
  
  return view('admin.cashmemo.cashmemo',$data);

   }


   public function editCashmemo($id){

     $bill_manage = $data["cart_manage"] = DB::table('cart_manage')
        ->orderBy('id','desc')
        ->first();

            if(empty($bill_manage)) {
            $billno = 0;
            $data['billid'] = Auth::guard('user')->user()->id+$billno+1;
            $nextno = Auth::guard('user')->user()->id+$billno+1;
            }else{
            $data['billid'] = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            $nextno = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            }


             $data['total_price'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $id)
            ->sum('total_price');

            $data['total_quantity'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $id)
            ->sum('qty');

            $data['total_cartoon'] = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $id)
          
          ->sum('ctn_pcs');

            $data['comission'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('comission');

            $salesItem = $data['salesItem'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $id)
            ->orderBy('id', 'asc')
            ->get();

       $data['total_taka'] = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $nextno)
          ->orderBy('id', 'asc')
          ->sum('total_price');

        $data['customer']=DB::table('customer')
        ->where('customer_status',1)
        ->orderBy('id','DESC')->get();
      $data['product']=DB::table('productdetails')->orderBy('id','DESC')->get();

    $data['bill_edit'] = DB::table('cart_manage')->where('cash_memo_id',$id)->first();

    $data['customer']=DB::table('customer')
        ->where('customer_code',$bill_manage->customer_code)
        ->orderBy('id','DESC')->first();

    return view('admin.cashmemo.cashmemoedit',$data);


   }


    public function cashmemo(){

       

        $bill_manage = $data["cart_manage"] = DB::table('cart_manage')
        ->orderBy('id','desc')
        ->first();

            if(empty($bill_manage)) {
            $billno = 0;
            $data['billid'] = Auth::guard('user')->user()->id+$billno+1;
            $nextno = Auth::guard('user')->user()->id+$billno+1;
            }else{
            $data['billid'] = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            $nextno = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            }


             $data['total_price'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('total_price');

            $data['total_quantity'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('qty');

            $data['total_cartoon'] = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $nextno)
          ->orderBy('id', 'asc')
          ->sum('ctn_pcs');

            $data['comission'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('comission');

            $salesItem = $data['salesItem'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->orderBy('id', 'asc')
            ->get();

       $data['total_taka'] = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $nextno)
          ->orderBy('id', 'asc')
          ->sum('total_price');

        $data['customer']=DB::table('customer')
        ->where('customer_status',1)
        ->orderBy('id','DESC')->get();
    	$data['product']=DB::table('productdetails')->orderBy('id','ASC')->get();

    	return view('admin.cashmemo.cashmemonw',$data);
    }

     public function add_item_to_carts(Request $request){


        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");
        $total_quantity = ( $request->qty * $request->quantity_percartoon ) ; 
        $total_price=($total_quantity * $request->amount)-($request->comission * $total_quantity);


        $inputData = [
            'cash_memo_id' => $request->cashmemo,
            'product_code' => $request->product_code,
            'product_type'  =>$request->product_type,
            'product_name'  => $request->product_name,
            'qty' => $total_quantity,
            'ctn_pcs' => $request->qty,

            'qty_ctn'=>$request->quantity_percartoon,
            'amount' => $request->amount,
            't_amount' => $total_quantity * $request->amount,
            'grade' => $request->grade,
            'product_specification'=>$request->product_specification,
            'comission'  => $request->comission * $total_quantity,
            'total_price'=>$total_price,
            'quantity_per_sqf'=>$request->quantity_per_sqf,
            'date' => $date,
            'date_time' => $date_time
        ];
        
        
         $datafortruck = [
          'cashmemo_id' => $request->cashmemo,
          'truck' => 1
        ]; 

        $check = DB::table('truck_count')->where('cashmemo_id',$request->cashmemo)->get();
        

        $query = DB::table('cash_memo_cart')
        ->where('cash_memo_id',$request->cashmemo)
        ->where('product_code' , $request->product_code)
        ->where('grade',$request->grade)
        ->get();
        if (count($query)==0) {
            
            
        if (count($check)==0) {

            DB::table('truck_count')->insert($datafortruck);
            
          }

              DB::table('cash_memo_cart')
            ->insert($inputData);


             $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->orderBy('id', 'asc')
            ->get();



        $html = '<table width="1200" class="table table-bordered scrollContent">
          <thead>
            <tr>
                <th style="width: 2px">id </th>
                          <th style="width: 3px"> Type</th>
                          <th style="width: 10%">Code</th>
                          <th style="width: 5%"> Grade</th>
                          <th style="width: 10%">Specification</th>
                          <th style="width: 5%">Ctn./Pcs. </th>
                          <th style="width: 10%">Qty./Ctn.</th>
                          <th style="width: 10%">Quantity</th>
                          <th style="width: 15%">U.Price </th>
                          <th style="width: 15%">Subtotal Price </th>
                         
                          
                          <th style="width: 10%"> Qty.Per.SQFT </th>

                          <th style="width: 15%"> Total Price </th>
                          <th style="width: 10%">Action</th>
            </tr>
          </thead> <tbody>';
          $total = 0;
          $i=1;
          $qty=0;
          foreach ($salesItem as $key => $data) {
           $html.= '<tr>
                   <td>'.$data->id.'</td>
                   <td>'.$data->product_type.'</td>
                  <td>'.$data->product_code.'</td> 
                  <td>'.$data->grade.'</td>
                  <td>'.$data->product_specification.'</td>
                  <td>'.$data->ctn_pcs.'</td>
                  <td>'.$data->qty_ctn.'</td>
                  <td>'.$data->qty.'</td>
                  
                  <td>'.$data->amount.'</td>
                  <td>'.$data->t_amount.' </td>
                  <td>'.$data->quantity_per_sqf.' </td>
                  <td>'.$data->total_price.' </td>
                  <td>
                  <button type="button" onclick="editcart(this)" class="btn btn-sm btn-info" id="edit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="'.$data->id.'"><i class="fa fa-times"></i>
          </button></td>
                </tr>';
                $total += $data->total_price;
                $qty += $data->qty;
            }
            

           $html.= '</tbody>
</table>';

return $html;  

              

        }else {
             
             $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->orderBy('id', 'asc')
            ->get();



        $html = '
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span>Product already Added</span></div>
            </div>
        </div>
        <table width="1200" class="table table-bordered scrollContent">
          <thead>
            <tr>
               <th style="width: 2px">id </th>
                          <th style="width: 3px"> Type</th>
                          <th style="width: 10%">Code</th>
                          <th style="width: 5%"> Grade</th>
                          <th style="width: 10%">Specification</th>
                          <th style="width: 5%">Ctn./Pcs. </th>
                          <th style="width: 10%">Qty./Ctn.</th>
                          <th style="width: 10%">Quantity</th>
                          <th style="width: 15%">U.Price </th>
                          <th style="width: 15%">Subtotal Price </th>
                         
                          
                          <th style="width: 10%"> Qty.Per.SQFT </th>

                          <th style="width: 15%"> Total Price </th>
                          <th style="width: 10%">Action</th>
            </tr>
          </thead> <tbody>';
          $total = 0;
          $i=1;
          $qty=0;
          foreach ($salesItem as $key => $data) {
           $html.= '<tr>
                   <td>'.$data->id.'</td>
                   <td>'.$data->product_type.'</td>
                  <td>'.$data->product_code.'</td> 
                  <td>'.$data->grade.'</td>
                  <td>'.$data->product_specification.'</td>
                  <td>'.$data->ctn_pcs.'</td>
                  <td>'.$data->qty_ctn.'</td>
                  <td>'.$data->qty.'</td>
                  
                  <td>'.$data->amount.'</td>
                  <td>'.$data->t_amount.' </td>
                  <td>'.$data->quantity_per_sqf.' </td>
                  <td>'.$data->total_price.' </td>
                  <td>
                  <button type="button" onclick="editcart(this)" class="btn btn-sm btn-info" id="edit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="'.$data->id.'"><i class="fa fa-times"></i>
          </button></td>
                </tr>';
                $total += $data->total_price;
                $qty += $data->qty;
            }
             

           $html.= '</tbody>
</table>';

return $html; 

    




        }

        

                }


  public function checkcustomer(Request $request){
      $customer_code = $request->customer_code;
      $date = $request->date;

      $last_invoice= DB::table('cart_manage')->where('customer_code', $customer_code)
      ->where('date',$date)->orderBy('id','DESC')->first();



      $ck = DB::table('cart_manage')->where('customer_code', $customer_code)
      ->where('date',$date)->get();

      if (count($ck)!=0) {


          /*$(document).on("click", "#check_cash", function(e){
             e.preventDefault();*/
         $html = '<script>

         
             var link = $(this).attr("href");
                swal({
                  title: "This customer Already take product today!",
                  text: "Last Invoice Number :  ' .$last_invoice->cash_memo_id.'",
                  html: true,
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,

                })
               
            

         </script>';
        return $html;
      }else {
        /*$html = '<div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
                      <div class="alert-message"><span>Product already Added</span></div>
                    </div>
                </div>';
        return $html;*/
      }


  }



public function update(Request $request){


         date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");
        $total_quantity = ( $request->qty * $request->quantity_percartoon ) ; 
        $total_price=($total_quantity * $request->amount)-($request->comission * $total_quantity);


        $inputData = [
            'cash_memo_id' => $request->cashmemo,
            'product_code' => $request->product_code,
            'product_type'  =>$request->product_type,
            'product_name'  => $request->product_name,
            'qty' => $total_quantity,
            'ctn_pcs' => $request->qty,

            'qty_ctn'=>$request->quantity_percartoon,
            'amount' => $request->amount,
            't_amount' => $total_quantity * $request->amount,
            'grade' => $request->grade,
            'product_specification'=>$request->product_specification,
            'comission'  => $request->comission * $total_quantity,
            'total_price'=>$total_price,
            'quantity_per_sqf'=>$request->quantity_per_sqf,
            'date' => $date,
            'date_time' => $date_time
        ];
       $id=$request->input('id');

        DB::table('cash_memo_cart')
        ->where('id',$id)
        ->update($inputData);

            $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->orderBy('id', 'asc')
            ->get();



        $html = '<table class="table table-bordered scrollContent">
          <thead>
            <tr>
              <th style="width: 2px">id </th>
              <th style="width: 3px">Product Type</th>
              <th style="width: 10%">Product Code</th>
              <th style="width: 5%">Product Grade</th>
              <th style="width: 10%">Product Specification</th>
              <th style="width: 5%">Ctn./Pcs. </th>
              <th style="width: 10%">Qty./Ctn.</th>
              <th style="width: 10%">Quantity</th>
              <th style="width: 15%">Unit Price </th>
              <th style="width: 15%">Subtotal Price </th>           
              <th style="width: 10%"> Quantity Per SQFT </th>
              <th style="width: 15%"> Total Price </th>
              <th style="width: 10%">Action</th>
            </tr>
          </thead> <tbody>';
          $total = 0;
          $i=1;
          $qty=0;
          foreach ($salesItem as $key => $data) {
           $html.= '<tr>
                   <td>'.$data->id.'</td>
                   <td>'.$data->product_type.'</td>
                  <td>'.$data->product_code.'</td> 
                  <td>'.$data->grade.'</td>
                  <td>'.$data->product_specification.'</td>
                  <td>'.$data->ctn_pcs.'</td>
                  <td>'.$data->qty_ctn.'</td>
                  <td>'.$data->qty.'</td>
                  
                  <td>'.$data->amount.'</td>
                  <td>'.$data->t_amount.' </td>
                  <td>'.$data->quantity_per_sqf.' </td>
                  <td>'.$data->total_price.' </td>
                  
                  <td>
                   <button type="button" onclick="editcart(this)" class="btn btn-sm btn-info" id="edit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="'.$data->id.'"><i class="fa fa-times"></i>
          </button></td>
                </tr>';
                $total += $data->total_price;
                $qty += $data->qty;
            }
             

           $html.= '</tbody>
</table>';

return $html;  
     }

     public function dltcashmemo($id){
      
      $lastbal=  DB::table('cart_manage')->where('id',$id)->first();
      $customer = DB::table('customer')->where('customer_code',$lastbal->customer_code)->first();
      
      
      $checked = DB::table('cash_memo_cart')->where('cash_memo_id',$lastbal->cash_memo_id)->get();

           foreach ($checked as $key ) {

            DB::table('cash_memo_cart')->where('id',$key->id)->delete();
            
           }

           DB::table('truck_count')->where('cashmemo_id',$lastbal->cash_memo_id)->delete();

      $dltbal=($customer->openig_due - $lastbal->total)+($lastbal->cash+$lastbal->discount+$lastbal->carriage+$lastbal->breakage+$lastbal->incentives+$lastbal->other + $lastbal->tt_deposit_balance + $lastbal->comission_balance);


      
      $inputData=[
        'openig_due' => $dltbal

      ];

      DB::table('customer')->where('customer_code',$lastbal->customer_code)->update($inputData);

       $dltfod=($customer->f_openig_due - $lastbal->total)+($lastbal->cash+$lastbal->discount+$lastbal->carriage+$lastbal->breakage+$lastbal->incentives+$lastbal->other + $lastbal->tt_deposit_balance + $lastbal->comission_balance);
       
        $inputDataf=[
        'f_openig_due' => $dltfod

      ];


     if ($lastbal->condition=="yes") {
          
          DB::table('customer')->where('customer_code',$lastbal->customer_code)->update($inputDataf);
     }


      DB::table('cart_manage')->where('id',$id)->delete();

      $flashdata = ['class'=>'danger', 'message'=>"delete Successfull "];

          return redirect()->back()->with($flashdata);

     }

  public function calculate_total(Request $request){

      $cashmemoid = $request->cashmemoid;
    

          $total = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $cashmemoid)
          ->orderBy('id', 'asc')
          ->sum('total_price');

          $html = $total;
            
          return $html;  

     }

    public function  calculate_total_ctn_pcs(Request $request){

       $cashmemoid = $request->cashmemoid;
    

          $total = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $cashmemoid)
          ->orderBy('id', 'asc')
          ->sum('ctn_pcs');

          $html = $total;
            
          return $html;

    }

     public function calculate_total_cartoon(Request $request){

      $cashmemoid = $request->cashmemoid;
    

          $total = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $cashmemoid)
          ->orderBy('id', 'asc')
          ->sum('qty_ctn');

          $html = $total;
            
          return $html;  

     }

     public function calculate_total_comission(Request $request){

      $cashmemoid = $request->cashmemoid;
    

          $total = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $cashmemoid)
          ->orderBy('id', 'asc')
          ->sum('comission');

          $html = $total;
            
          return $html; 


     }

     public function calculate_total_quantity(Request $request){

       $cashmemoid = $request->cashmemoid;
    

          $total = DB::table('cash_memo_cart')
          ->where('cash_memo_id', $cashmemoid)
          ->orderBy('id', 'asc')
          ->sum('qty');

          $html = $total;
            
          return $html; 

     }



     public function cashmemomanage(Request $request){
         
         $for_due=DB::table('customer')
         ->where('customer_code',$request->customer_code)
         ->first();

        // $due = $for_due->openig_due;

        $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('total_price');


          $qty = DB::table('cash_memo_cart')
            ->where('cash_memo_id',$request->cashmemo)
            ->sum('qty');

            $comission = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('comission');

            $grade_a = DB::table('cash_memo_cart')
            ->where('grade','A')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('qty');

            $grade_b = DB::table('cash_memo_cart')
            ->where('grade','B')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('qty');

            

        $nextno=$request->cashmemo;



        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");

        $du_price=$request->openig_due+$salesItem;

        $balance= ($request->openig_due+$salesItem)-($request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->comission_balance + $request->missig_deposit_balance);

        $f_balance= ($request->f_prev_due+$salesItem)-($request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->missig_deposit_balance + $request->comission_balance);

        //all deposit balance for message 
        $deposit = $request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->comission_balance + $request->missig_deposit_balance;
       
       //end deposit
        
        
        $ck = DB::table('truck_count')->where('cashmemo_id',$request->cashmemo)->get();

        $truck = 0;

        if (count($ck)!=0) {
              $truck = 1;
        }

        $inputData = [
            'cash_memo_id' => $request->cashmemo,
            'date_time' => $date_time,
            'date'     => $request->date,
            'customer_name' => $request->customer_name,
            'customer_code' => $request->customer_code,
            'customer_address' => $request->customer_address,
            'customer_phone' => $request->customer_phone,
            'ship_to' => $request->ship_to,
            'truck_no' => $truck,
            'total' => $salesItem,
            'total_due'=>$du_price,
            'type'=>$request->type,
            'prev_due'=>$request->openig_due,
            'f_prev_due'=>$request->f_prev_due,
            'total_cartoon'=>$request->total_cartoon,
            'total_comission'=>$comission,
            't_qty' => $qty,
            'discount'=>$request->special_discount,
            'cash'=>$request->cash,
            'carriage'=>$request->carriage,
            'breakage'=>$request->breakage,
            'incentives'=>$request->incentives,
            'other'=>$request->other,
            'balance'=>$balance,
            'f_balance' => $f_balance,
            'carriage_info'=>$request->carriage_info,
            'breakage_info'=>$request->breakage_info,
            'comission_info'=>$request->comission_info,
            'comission_balance' =>$request->comission_balance,
            'cash_info' => $request->cash_info,
            'incentives_info' => $request->incentives_info,
            'special_discount_info'=> $request->special_discount_info,
            'tt_deposit_info' => $request->tt_deposit_info,
            'tt_deposit_balance' => $request->tt_deposit_balance,
            'missig_deposit_info'=>$request->missig_deposit_info,
            'missig_deposit_balance' =>$request->missig_deposit_balance,
            'other_info' => $request->other_info,
            'condition' => $request->condition,
            'grade_a'  => $grade_a,
            'grade_b' => $grade_b,
           


        ];
      DB::table('cart_manage')->insert($inputData);

       $input_f_du = [

        'f_openig_due' => $f_balance

      ];

     

          

          $inputDatac = [
                'openig_due' => $balance,
                
            ];


         if ($request->condition=='yes') {

        DB::table('customer')
        ->where("customer_code", $request->customer_code)
        ->update($input_f_du);
  
      }

        DB::table('customer')
        ->where("customer_code", $request->customer_code)
        ->update($inputDatac);

       

     /* return \Redirect::route('Admin.billprint', $nextno);*/

    


         $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

          return redirect()->back()->with($flashdata);
       

     }

     public function  updatecashmemo(Request $request){


       $for_due=DB::table('customer')
         ->where('customer_code',$request->customer_code)
         ->first();

        // $due = $for_due->openig_due;

        $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('total_price');


          $qty = DB::table('cash_memo_cart')
            ->where('cash_memo_id',$request->cashmemo)
            ->sum('qty');

            $comission = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('comission');

            $grade_a = DB::table('cash_memo_cart')
            ->where('grade','A')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('qty');

            $grade_b = DB::table('cash_memo_cart')
            ->where('grade','B')
            ->where('cash_memo_id', $request->cashmemo)
            ->sum('qty');
            
            
        $cashmemo_ck = DB::table('cart_manage')->where('cash_memo_id',$request->cashmemo)->first();

            

        $nextno=$request->cashmemo;



        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");

        $du_price=$request->openig_due+$salesItem;

        $balance= ($request->openig_due+$salesItem)-($request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->comission_balance+$request->missig_deposit_balance);


        $f_balance= ($request->f_prev_due+$salesItem)-($request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->missig_deposit_balance + $request->comission_balance);

         //all deposit balance for message 
        $deposit = $request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->comission_balance + $request->missig_deposit_balance;
       
       //end deposit
        
        
         $ck = DB::table('truck_count')->where('cashmemo_id',$request->cashmemo)->get();

         $truck = 0;

        if (count($ck)!=0) {
              $truck = 1;
        }



        $inputData = [
            'cash_memo_id' => $request->cashmemo,
            'date_time' => $date_time,
            'date'     => $request->date,
            'customer_name' => $request->customer_name,
            'customer_code' => $request->customer_code,
            'customer_address' => $request->customer_address,
            'customer_phone' => $request->customer_phone,
            'ship_to' => $request->ship_to,
            'truck_no' => $truck,
            'total' => $salesItem,
            'total_due'=>$du_price,
            'type'=>$request->type,
            'prev_due'=>$request->openig_due,
            'total_cartoon'=>$request->total_cartoon,
            'total_comission'=>$comission,
            't_qty' => $qty,
            'discount'=>$request->special_discount,
            'cash'=>$request->cash,
            'carriage'=>$request->carriage,
            'breakage'=>$request->breakage,
            'incentives'=>$request->incentives,
            'other'=>$request->other,
            'balance'=>$balance,
            'carriage_info'=>$request->carriage_info,
            'breakage_info'=>$request->breakage_info,
            'comission_info'=>$request->comission_info,
            'comission_balance' =>$request->comission_balance,
            'cash_info' => $request->cash_info,
            'incentives_info' => $request->incentives_info,
            'special_discount_info'=> $request->special_discount_info,
            'tt_deposit_info' => $request->tt_deposit_info,
            'tt_deposit_balance' => $request->tt_deposit_balance,
            'missig_deposit_info'=>$request->missig_deposit_info,
            'missig_deposit_balance' =>$request->missig_deposit_balance,
            'other_info' => $request->other_info,
            'condition' => $request->condition,
            'grade_a'  => $grade_a,
            'grade_b' => $grade_b,
           


        ];
      DB::table('cart_manage')->where('cash_memo_id',$request->cashmemo)->update($inputData);

       $input_f_du = [

        'f_openig_due' => $f_balance

      ];

        $f_balance_f= ($request->f_prev_due_edit-$salesItem)+($request->cash+$request->special_discount+$request->carriage+$request->breakage+$request->incentives+$request->other + $request->tt_deposit_balance + $request->missig_deposit_balance + $request->comission_balance);





         $input_f_du_f = [

        'f_openig_due' => $f_balance_f

      ];


          $inputDatac = [
                'openig_due' => $balance,
                
            ];



       if ($request->condition=="yes") {

        DB::table('customer')
        ->where("customer_code", $request->customer_code)
        ->update($input_f_du);

   
      }elseif($cashmemo_ck->condition=="yes"){

        DB::table('customer')
        ->where("customer_code", $request->customer_code)
        ->update($input_f_du_f);

        



      }



        DB::table('customer')
        ->where("customer_code", $request->customer_code)
        ->update($inputDatac);

       

     /* return \Redirect::route('Admin.billprint', $nextno);*/



     //////0tp----------------------------------------!>

    /*$six_digit_random_number = mt_rand(100000, 999999);
session(['otpreg'=>$six_digit_random_number]);      

$to = "{$request->customer_phone}";
$token = "345d60d5aa6a545e697143e344959f61";

$url = "http://api.greenweb.com.bd/api.php?json"; 

$message = "Dear Customer,Your transaction update, Your Deposit Tk. $deposit  & your purchase value Tk. $salesItem on 1st-Feb-21. Current Balance Tk. $balance Thanks for transaction with ABC Tiles.";    


$data  = array(
    'to'      =>"$to",
    'message' =>"$message",
    'token'   =>"$token"
    ); // Add parameters in key value

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);*/



//-------------------otpend-------------------->


         $flashdata = ['class'=>'success', 'message'=>"Update  Successfull "];

          return redirect('admin/allcashmemo')->with($flashdata);

     }

     public function cashmemoprint($id){

      $data['cashmemoprint']=DB::table('cart_manage')
      ->where('id',$id)->get();
      return view();

     }


    public function  addcashmemo(){


        
        $data['customer']=DB::table('customer')->orderBy('id','DESC')->get();

    	return view('admin.cashmemo.cashmemoadd',$data);
    }


    public function productcode($product_code){
      
      $subcat=DB::table('productdetails')->where('id',$product_code)->first();
      return json_encode($subcat);

    }

    public function product_code($product_code){
      $product_code= DB::table('productdetails')->where('id',$product_code)
      ->orderBy('id','ASC')
      ->first();
      return json_encode($product_code);
    }

    public function gradewisedata(Request $request){

      $grade = $request->grade;
      $product_code = $request->product_code;

      $subcat=DB::table('productdetails')
      ->where('product_code',$product_code)
      ->orderBy('id','ASC')
      ->where('grade',$grade)
      ->first();
      return json_encode($subcat);

    }

    public function customercode($customer_code){

        $customer=DB::table('customer')

        ->where('customer_code',$customer_code)->first();
        return json_encode($customer);

    }

    public function med_sales_delete_from_cart(Request $request)
    {
        $id = $request->data;

        $cash_memo_id = $request->cashmemo;

        $bill_manage = $data["cart_manage"] = DB::table('cart_manage')
        ->orderBy('id','desc')
        ->first();

            if(empty($bill_manage)) {
            $billno = 0;
            $data['billid'] = Auth::guard('user')->user()->id+$billno+1;
            $nextno = Auth::guard('user')->user()->id+$billno+1;
            }else{
            $data['billid'] = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            $nextno = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            }

        DB::table('cash_memo_cart')
        ->where('id', $id)
        ->where('cash_memo_id', $cash_memo_id)
        ->delete();

        $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $cash_memo_id)
            ->orderBy('id', 'asc')
            ->get();


        $html = '<table class="table table-bordered scrollContent">
          <thead>
            <tr>
                           <th style="width: 2px">id </th>
                          <th style="width: 3px"> Type</th>
                          <th style="width: 10%">Code</th>
                          <th style="width: 5%"> Grade</th>
                          <th style="width: 10%">Specification</th>
                          <th style="width: 5%">Ctn./Pcs. </th>
                          <th style="width: 10%">Qty./Ctn.</th>
                          <th style="width: 10%">Quantity</th>
                          <th style="width: 10%"> Qty.Per.SQFT </th>
                          <th style="width: 15%">U.Price </th>
                          <th style="width: 15%">Subtotal Price </th>
                         
                          
                          

                          <th style="width: 15%"> Total Price </th>
                          <th style="width: 10%">Action</th>
            </tr>
          </thead> <tbody>';
          $total = 0;
          $qty=0;
          $i=1;
          foreach ($salesItem as $key => $data) {
           $html.= '<tr>
                  <td>'.$data->id.'</td>
                  <td>'.$data->product_type.'</td>
                  <td>'.$data->product_code.'</td>
                  <td>'.$data->grade.'</td>
                  <td>'.$data->product_specification.'</td>
                  <td>'.$data->ctn_pcs.'</td>
                  <td>'.$data->qty_ctn.'</td>
                  <td>'.$data->qty.'</td>
                  <td>'.$data->quantity_per_sqf.' </td>
                  <td>'.$data->amount.'</td>
                  <td>'.$data->t_amount.' </td>
                  <td>'.$data->total_price.' </td>
                  
                  <td>

                   <button type="button" onclick="editcart(this)" class="btn btn-sm btn-info" id="edit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="'.$data->id.'"><i class="fa fa-times"></i>
              </button></td>
                </tr>';
                $total += $data->total_price;
                $qty += $data->qty;
            }
             

           $html.= '</tbody>
</table>';

return $html;  




    }
    
    
    public function  med_sales_delete_from_cart_add_page(Request $request){


      $id = $request->data;

      

        $bill_manage = $data["cart_manage"] = DB::table('cart_manage')
        ->orderBy('id','desc')
        ->first();

            if(empty($bill_manage)) {
            $billno = 0;
            $data['billid'] = Auth::guard('user')->user()->id+$billno+1;
            $nextno = Auth::guard('user')->user()->id+$billno+1;
            }else{
            $data['billid'] = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            $nextno = Auth::guard('user')->user()->id+$bill_manage->id+1;    
            }

        DB::table('cash_memo_cart')
        ->where('id', $id)
        ->where('cash_memo_id', $nextno)
        ->delete();

        $salesItem = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->orderBy('id', 'asc')
            ->get();


        $html = '<table class="table table-bordered scrollContent">
          <thead>
            <tr>
                           <th style="width: 2px">id </th>
                          <th style="width: 3px"> Type</th>
                          <th style="width: 10%">Code</th>
                          <th style="width: 5%"> Grade</th>
                          <th style="width: 10%">Specification</th>
                          <th style="width: 5%">Ctn./Pcs. </th>
                          <th style="width: 10%">Qty./Ctn.</th>
                          <th style="width: 10%">Quantity</th>
                          <th style="width: 10%"> Qty.Per.SQFT </th>
                          <th style="width: 15%">U.Price </th>
                          <th style="width: 15%">Subtotal Price </th>
                         
                          
                          

                          <th style="width: 15%"> Total Price </th>
                          <th style="width: 10%">Action</th>
            </tr>
          </thead> <tbody>';
          $total = 0;
          $qty=0;
          $i=1;
          foreach ($salesItem as $key => $data) {
           $html.= '<tr>
                  <td>'.$data->id.'</td>
                  <td>'.$data->product_type.'</td>
                  <td>'.$data->product_code.'</td>
                  <td>'.$data->grade.'</td>
                  <td>'.$data->product_specification.'</td>
                  <td>'.$data->ctn_pcs.'</td>
                  <td>'.$data->qty_ctn.'</td>
                  <td>'.$data->qty.'</td>
                  <td>'.$data->quantity_per_sqf.' TK</td>
                  <td>'.$data->amount.'</td>
                  <td>'.$data->t_amount.'</td>
                  <td>'.$data->total_price.' </td>
                  
                  <td>

                   <button type="button" onclick="editcart(this)" class="btn btn-sm btn-info" id="edit" data-id="'.$data->id.'"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletefn(this)" data-id="'.$data->id.'"><i class="fa fa-times"></i>
              </button></td>
                </tr>';
                $total += $data->total_price;
                $qty += $data->qty;
            }
             

           $html.= '</tbody>
</table>';

return $html;  

    }


  


  public function invoicecashmemo($nextno){

     $data['cash_memo_cart'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->orderBy('id', 'asc')
            ->get();

      $data['total_price'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('total_price');

      $data['total_quantity'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('qty');

      $data['total_ctnpcs'] = DB::table('cash_memo_cart')
            ->where('cash_memo_id', $nextno)
            ->sum('ctn_pcs');


     $data['cart_manage'] = $cart = DB::table('cart_manage')
            ->where('cash_memo_id', $nextno)
            ->first();
    $data['customer']=DB::table('customer')
    ->where('customer_code',$cart->customer_code)->first();

    return view('admin.cashmemo.cashmemoinvoice',$data);
  }


public function editcartwith(Request $request){

$values =  DB::table('cash_memo_cart')->where('id',$request->data)->first();

   $html = '
      <div class="row">
   <input type="hidden" value="'.$values->id.'" name="id" id="id">           
                  <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Type </label>
                    <input class="form-control" value="'.$values->product_type.'" type="text" id="product_type" name="product_type" placeholder="produt  type">
                  </div>
                </div>
                
                 <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Name </label>
                    <input class="form-control" type="text" value="'.$values->product_name.'" id="product_name" name="product_name" placeholder="produt  Name">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Code </label>
                    <input class="form-control" type="text" value="'.$values->product_code.'" id="product_codes" name="product_codes" placeholder="produt  type">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product Grade </label>
                     <input class="form-control" value="'.$values->grade.'" type="text" id="grade" name="grade" placeholder="Grade ">
                    <!-- <select name="grade" class="form-control">

                      <option>Select grade</option>
                    </select> -->
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Product specification </label>
                    <input value="'.$values->product_specification.'" class="form-control" type="text" id="product_specification" name="product_specification" placeholder="product_specification" >
                  </div>
                </div>

                 <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Ctn./Pcs.</label>
                    <input value="'.$values->ctn_pcs.'" class="form-control" type="number" id="qty" name="quantity" placeholder="quantity">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Qty./Ctn</label>
                    <input value="'.$values->qty_ctn.'" class="form-control" type="number" id="quantity_percartoon" name="quantity_percartoon" placeholder="Quantity Per Cartoon">
                  </div>
                </div>


                <div class="col-md-2">
                  <div class="form-group">
                    <label for="category_id">Rate </label>
                    <input value="'.$values->amount.'" class="form-control" type="text" id="unit_price" name="unit_price" placeholder="Unit Price">
                  </div>
                </div>
                

                <div class="col-md-2">
                    <div class="form-group">

                      <label>Comission</label>
                      <input type="text" value="'.$values->comission.'" name="comission" id="comission" class="form-control" placeholder="Entr Comission">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">

                      <label>Quantity/SQF</label>
                      <input value="'.$values->quantity_per_sqf.'" type="text" name="quantity_per_sqf" value="0" id="quantity_per_sqf" class="form-control" placeholder="Entr Comission">
                    </div>
                </div>

                
                <button type="button" id="Update" onclick="Updatecart()" class="btn btn-block btn-dark">
                      <i class="fa fa-plus"> Update </i>
                      </button>
                      <br>
                      <br> </div>';
        return $html;




}


}
