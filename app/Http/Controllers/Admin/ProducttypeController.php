<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProducttypeController extends Controller
{
   

	   public function producttype(){

	   	$data['producttype']=DB::table('producttype')->orderBy('product_type_name','ASC')->get();

	   	return view('admin.product.producttype',$data);

	   }


	   public function producttypeadd(){

	   	return view('admin.product.producttypeadd');

	   }

	   public function storetypeadd(Request $request){

	   	  $inputdata=[
	   	  	
	   	  	'product_type_name'=>$request->product_type_name

	   	  ];

	   	  DB::table('producttype')->insert($inputdata);
	   	   $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

	        return redirect()->back()->with($flashdata);

	   }

	   public function typedelete($id){

	   	  DB::table('producttype')->where('id',$id)->delete();
	   	  $flashdata = ['class'=>'danger', 'message'=>"delete Successfull "];

	   	  return redirect()->back()->with($flashdata);

	   }
	   public function productdetails(){

	   	$data['details']=DB::table('productdetails')
	   	->orderBy('product_type', 'ASC')
	   	->get();

	   	return view('admin.product.product_details',$data);

	   }

	   public function productdetailsadd(){
         
        $data['type']=DB::table('producttype')->orderBy('id','DESC')->get();

	   	return view('admin.product.product_detailsadd',$data);
	   }

	   public function storeproductadd(Request $request){

	   	$produ_ck=DB::table('productdetails')
	   	->where('product_code',$request->product_code)
	   	->where('grade',$request->grade)
	   	->get();
	   

	 	if (count($produ_ck)!=0) {

	   		$flashdata = ['class'=>'danger', 'message'=>"Product Already Added "];

	        return redirect()->back()->with($flashdata);
	   		  
	   	}else{


	   		$inputdata=[
	   	  	'product_type'=>$request->product_type,
	   	  	'product_code'=>$request->product_code,
	   	  	'product_name'=>$request->product_name,
	   	  	'product_specification'=>$request->product_specification,
	   	  	
	   	  	'unit_mesurement'=>$request->unit_mesurement,
	   	  	'grade'=>$request->grade,
	   	  	'unit_price'=>$request->unit_price,
	   	  	'comission'=>$request->comission,
	   	  	'bonus'=>$request->bonus,
	   	  	'bonus_option'=>$request->bonus_option,
	   	  	'date'=>$request->date

	   	  ];

	   	  DB::table('productdetails')->insert($inputdata);
	   	   $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

	        return redirect()->back()->with($flashdata);
	   		
	   	}



	



	   }




	   public function producttypesize($product_type){
      
      $subcat=DB::table('producsize')->where('product_type',$product_type)->get();
      return json_encode($subcat);

    }

	   public function productdelete($id){

	   	DB::table('productdetails')->where('id',$id)->delete();

	   	$flashdata = ['class'=>'warning', 'message'=>"Delete  Successfull "];

	        return redirect()->back()->with($flashdata);

	   }

	   public function producttypeEdit($id){

	   	$data['producttype']=DB::table('producttype')->where('id',$id)->first();
	   	return view('admin.product.producttypeedit',$data);
	   }
	   public function producttypeUpdate(Request $request,$id){
	   	$inputdata=[
	   	  	
	   	  	'product_type_name'=>$request->product_type_name

	   	  ];

	   	  DB::table('producttype')->where('id',$id)->update($inputdata);
	   	   $flashdata = ['class'=>'success', 'message'=>"Update  Successfull "];

	        return redirect('admin/producttype')->with($flashdata);


	   }

	   public function productEdit($id){
	   	$data['type']=DB::table('producttype')->orderBy('id','DESC')->get();
	   	$data['productdetails']=DB::table('productdetails')->where('id',$id)->first();
	   	  return view('admin.product.productedit',$data);
	   }

	   public function productUpdate(Request $request,$id){


	   	 $inputdata=[
	   	  	'product_type'=>$request->product_type,
	   	  	'product_code'=>$request->product_code,
	   	  	'product_name'=>$request->product_name,
	   	  	'unit_mesurement'=>$request->unit_mesurement,
	   	  	'grade'=>$request->grade,
	   	  	'unit_price'=>$request->unit_price,
	   	  	'comission'=>$request->comission,
	   	  	'bonus'=>$request->bonus,
	   	  	'bonus_option'=>$request->bonus_option,
	   	  	'date'=>$request->date

	   	  ];

	   	  DB::table('productdetails')->where('id',$id)->update($inputdata);
	   	   $flashdata = ['class'=>'success', 'message'=>"update Successfull "];

	        return redirect('admin/productdetails')->with($flashdata);


	   }
}
