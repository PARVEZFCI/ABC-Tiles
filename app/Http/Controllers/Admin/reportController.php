<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class reportController extends Controller
{
    public function customerduestatement(){

    	$data['customerstatement']=DB::table('customer')->orderBy('customer_name',"ASC")->get();
    	return view('admin.report.customerduestatement',$data);
    }

    public function truck_count(){

    	return view('admin.report.truck_count');

    }

    public function tructcountdate(Request $request){

    	 date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();

         
        return view('admin.report.truckcountview',$data);

    }

    public function customerdetails(){
        $data['customer']=DB::table('customer')->orderBy('customer_name','ASC')->get();
        return view('admin.report.customerdetails',$data);
    }

    public function monthlycomission(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();


        return view('admin.report.monthlycomission',$data);
    }

    public function monthlycomissionselctmonth(){

         return view('admin.report.select_month_comission');

    }

   

    public function dailysalestatment(Request $request){


        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d');         
       
       //  $day_before = date( 'Y-m-d', strtotime( $date . ' -1 day' ) );
        
         $day_before =$data['dailyDate']= $request->date;
         $data['newdate'] = date("d/m/Y", strtotime($day_before));

        $setting = DB::table('settings')
        ->first();

    if ($setting->cndition==0){

         $data['dailysalestatment'] = DB::table('cart_manage')->orderBy('customer_name','ASC')->where('date',$day_before)->get();
    }else {

        $data['dailysalestatment'] = DB::table('cart_manage')
        ->where('date',$day_before)
        ->orderBy('customer_name','ASC')
        ->where('condition','yes')
        ->get();

    }
       
       return view('admin.report.dailystatement',$data);
      
    }

    public function dealerwisesalestatment(Request $request){

        $data['customer_name'] = $customer_name = $request->customer_name;
        
        $ck_cus = DB::table('customer')->where('customer_name',$request->customer_name)->first();

        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));
      
        $setting = DB::table('settings')
        ->first();

    if ($setting->cndition==0){
      
        $data["cart_manage"] = DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $ck_cus->customer_code)
        ->orderBy('id','ASC')
        ->get();
    }else{

        $data["cart_manage"] = DB::table('cart_manage')
        ->whereBetween('date', [$from_date, $to_date])
        ->where('customer_code', $ck_cus->customer_code)
        ->where('condition',"yes")
        ->orderBy('id','ASC')
        ->get();

    }


        return view('admin.report.dealerwisesalestatment',$data);
    }

    public function dealerwisestatement(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();



        return view('admin.report.dealerwisestatement',$data);


    }

    public function dealerwisesalestatmentdateselect(){



        $data['dealerselect'] = DB::table('customer')->orderBy('customer_name','ASC')->get();

        return view('admin.report.dealerwisesalesstatement_selectdate',$data);
    }



    public function dealerwisedateselect(){
        return view('admin.report.dealerwisedateselect');
    }

    public function dealerstatment(){


        return view('admin.report.dealerstatment');
    }

    public function monthlysalestatement(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();


        return view('admin.report.monthlysalestatement' , $data);
    }

    public function monthlysalestatementdateselect(){
        return view('admin.report.monthlysalestatementdateselect');
    }

    public function monthlytargetstatement(Request $request){

         date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();
       
       // print_r($data['target']);

        return view('admin.report.monthlytargetstatement',$data);
    }
    
    public function monthlytargetstatementselectdate(){
        return view('admin.report.monthlytargetstatementselectdate');
    }

    public function quarterlytarget(Request $request){
        

         date_default_timezone_set('Asia/Dhaka');
        $date = date("d/m/Y");
        $date_time = date("d/m/Y h:i:s a");  

        $data["from_date"] = $from_date = $request->from_date;
        $data["to_date"] = $to_date = $request->to_date;

        $data["from_date_new"] = $formnewDate = date("d/m/Y", strtotime($from_date));
        $data["to_date_new"] = $tonewDate = date("d/m/Y", strtotime($to_date));

         $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();

        return view('admin.report.quarterlytarget',$data);

    }

    public function quarterlytargetselectdate(){
        return view('admin.report.quarterlytargetselectdate');
    }

    public function selectyear(){
        return view('admin.report.selectyear');
    }

    public function yearlysalesstatement(Request $request){


              $data['year'] =$year = $request->year;
             $january_fr = $data['january_fr'] ="1-01-$year";
             $january_to = $data['january_to'] = "31-01-$year";

             $data['cart_manage']=DB::table('customer')->orderBy('customer_name',"ASC")->get();



    
     //  $data['yearlystatement'] = DB::table('cart_manage')->

        return view('admin.report.yearlysalesstatement',$data);
    }

    public function selectdatedailysales(){

        return view('admin.report.selectdatedailysales');

    }
}
