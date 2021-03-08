<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class customerController extends Controller
{
    public function customerdetails(){

       $data['customer']=DB::table('customer')
       ->orderBy('customer_name','ASC')
       ->get();
       
    	return view('admin.customer.customerdetails',$data);
    }

    public function addcustomer(){
    	return view('admin.customer.customeradd');
    }

    public function customerstore(Request $request){

      $check_cus=DB::table('customer')
       ->orderBy('customer_name','ASC')->where('customer_name',$request->customer_name)
       ->get();

       $customer_id = $data["customer"] = DB::table('customer')
        ->orderBy('id','desc')
        ->first();

            if(empty($customer_id)) {
            $billno = 0;
            $data['customerid'] = $billno+1;
            $nextno = $billno+1;
            }else{
            $data['customerid'] = $customer_id->id+1;    
            $nextno = $customer_id->id+1;    
            }

       if (count($check_cus) !=0) {
          $flashdata = ['class'=>'danger', 'message'=>"Customer Already exist"];

          return redirect()->back()->with($flashdata);
       }else{


           $inputdata=[
          'customer_code'=>$nextno,
          'customer_name'=>$request->customer_name,
          'customer_city'=>$request->customer_city,
          'customer_phone'=>$request->customer_phone,
          
          'customer_email'=>$request->customer_email,
          'customer_address'=>$request->customer_address,
          'contact_person_name'=>$request->contact_person_name,
          'contact_person_designation'=>$request->contact_person_designation,
          'transport_allowance_factory'=>$request->transport_allowance_factory,
          'transport_allowance_wh'=>$request->transport_allowance_wh,
            'openig_due'=>$request->openig_due,
            'opening_due_no'=>$request->openig_due,
          
      
          'monthly_target'=>$request->monthly_target,
            'quarterly_target'=>$request->quarterly_target,
          'date'=>$request->date

        ];

        DB::table('customer')->insert($inputdata);
         $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

          return redirect()->back()->with($flashdata);

       }


    }


    public function customerdlt($id){
    	DB::table('customer')->where('id',$id)->delete();

    	$flashdata = ['class'=>'danger', 'message'=>"delete Successfull "];

	        return redirect()->back()->with($flashdata);
    }

    public function customerEdit($id){
    	$data['customer']=DB::table('customer')->where('id',$id)->first();
    	return view('admin.customer.customeredit',$data);
    }

    public function customerUpdate(Request $request,$id){


    	$inputdata=[
	   	  	
	   	  	'customer_name'=>$request->customer_name,
	   	  	'customer_city'=>$request->customer_city,
	   	  	'customer_phone'=>$request->customer_phone,
	   	  	
	   	  	'customer_email'=>$request->customer_email,
	   	  	'customer_address'=>$request->customer_address,
	   	  	'contact_person_name'=>$request->contact_person_name,
	   	  	'contact_person_designation'=>$request->contact_person_designation,
	   	  	'transport_allowance_factory'=>$request->transport_allowance_factory,
	   	  	'transport_allowance_wh'=>$request->transport_allowance_wh,
	   	  	 'openig_due'=>$request->openig_due,
            'opening_due_no'=>$request->openig_due,
	   	  	'monthly_target'=>$request->monthly_target,
            'quarterly_target'=>$request->quarterly_target,
	   	  	'date'=>$request->date

	   	  ];


        $inputdata_w=[
            
            'customer_name'=>$request->customer_name,
            'customer_city'=>$request->customer_city,
            'customer_phone'=>$request->customer_phone,
            
            'customer_email'=>$request->customer_email,
            'customer_address'=>$request->customer_address,
            'contact_person_name'=>$request->contact_person_name,
            'contact_person_designation'=>$request->contact_person_designation,
            'transport_allowance_factory'=>$request->transport_allowance_factory,
            'transport_allowance_wh'=>$request->transport_allowance_wh,
             
            'monthly_target'=>$request->monthly_target,
            'quarterly_target'=>$request->quarterly_target,
            'date'=>$request->date

          ];

          if ($request->openig_due != NULL) {

            DB::table('customer')->where('id',$id)->update($inputdata);
           $flashdata = ['class'=>'success', 'message'=>"Update  Successfull "];

              
          }else{

            DB::table('customer')->where('id',$id)->update($inputdata_w);
           $flashdata = ['class'=>'success', 'message'=>"Update  Successfull "];

          }

	   	  

	        return redirect('admin/customerdetails')->with($flashdata);

    }
    
     public function deactive($id){
       
       $inputdata=[
       	'customer_status' => '0'
       ];

    	DB::table('customer')->where('id',$id)->update($inputdata);
    	return redirect()->back();
    }

    public function active($id){

    	 $inputdata=[
       	'customer_status' => '1'
       ];

    	DB::table('customer')->where('id',$id)->update($inputdata);
    	return redirect()->back();

    }
}
