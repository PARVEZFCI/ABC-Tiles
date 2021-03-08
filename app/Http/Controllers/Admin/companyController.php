<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class companyController extends Controller
{

	public function companydetails(){
		$data['company']=DB::table('companydetails')->orderBy('id', 'DESC')->get();
		return view('admin.company.companydetails',$data);
	}

	public function addcompany(){

		return view('admin.company.companyadd');

	}
	public function companystore(Request $request){
		$inputdata=[
	   	  	'company_code'=>$request->company_code,
	   	  	'company_name'=>$request->company_name,
	   	  	'company_city'=>$request->company_city,
	   	  	'company_phone'=>$request->company_phone,
	   	  	'company_fax'=>$request->company_fax,
	   	  	'company_email'=>$request->company_email,
	   	  	'company_address'=>$request->company_address,
	   	  	'contact_person'=>$request->contact_person,
	   	  	'c_p_designation'=>$request->c_p_designation,
	   	  	
	   	  ];

	   	  DB::table('companydetails')->insert($inputdata);
	   	   $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

	        return redirect()->back()->with($flashdata);

	}

    public function companydelete($id){

    	DB::table('companydetails')->where('id',$id)->delete();
    	$flashdata = ['class'=>'danger', 'message'=>"Delete Successfull "];

	        return redirect()->back()->with($flashdata);
    }
    
}
