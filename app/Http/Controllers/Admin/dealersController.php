<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class dealersController extends Controller
{
    public function dealers(){

       $data['dealers']=DB::table('dealers')->orderBy('id','DESC')->get();
    	return view('admin.dealers.dealersdetails',$data);
    }

    public function addealer(){
    	return view('admin.dealers.addealer');
    }

    public function dealerstore(Request $request){

    	$inputdata=[
    		'dealer_code'=>$request->dealer_code,
    		'dealer_name'=>$request->dealer_name,
    		'dealer_city'=>$request->dealer_city,
    		'dealer_phone'=>$request->dealer_phone,
    		'dealer_email'=>$request->dealer_email,
    		'dealer_address'=>$request->dealer_address,
    		'monthly_target'=>$request->monthly_target,
    		'quarterly_target'=>$request->quarterly_target,
    		'monthly_bonus'=>$request->monthly_bonus,
    		'opening_due'=>$request->opening_due,
    		'current_due'=>$request->current_due,
    		'date'=>$request->date

    	];

    	DB::table('dealers')->insert($inputdata);
    	 $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];
    	return redirect()->back()->with($flashdata);

    }
    public function dealerdlt($id){

    	DB::table('dealers')->where('id',$id)->delete();

    	$flashdata = ['class'=>'danger', 'message'=>"Delete  Successfull "];

    	return redirect()->back()->with($flashdata);
    }



}
