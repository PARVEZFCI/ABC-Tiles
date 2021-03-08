<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class sizeController extends Controller
{
    public function productsize(){
    	$data['productsize']=DB::table('producsize')->orderBy('product_type','ASC')->get();

    	return view('admin.size.productsize',$data);
    }

    public function addproductsize(){

    	$data['type']=DB::table('producttype')->orderBy('id','DESC')->get();
    	return view('admin.size.productsizeadd',$data);
    }


    public function storeproductsize(Request $request){
    	$inputdata=[
    		'product_type'=>$request->product_type,
    		'size'=>$request->size
    	];
    	DB::table('producsize')->insert($inputdata);
    	$flashdata = ['class'=>'success', 'message'=>"Add Successfull "];

	        return redirect()->back()->with($flashdata);
    	
    }
    public function sizedelete($id){

    	DB::table('producsize')->where('id',$id)->delete();

        $flashdata = ['class'=>'danger', 'message'=>"delete  Successfull "];

        return redirect()->back()->with($flashdata);

    }

    public function sizeEdit($id){

        $data['type']=DB::table('producttype')->orderBy('id','DESC')->get();
         $data['productsize']=DB::table('producsize')->where('id',$id)->first();

        return view('admin.size.productsizeedit',$data);
    }

    public function sizeUpdate(Request $request,$id){

        $inputdata=[
            'product_type'=>$request->product_type,
            'size'=>$request->size
        ];
        DB::table('producsize')->where('id',$id)->update($inputdata);
        $flashdata = ['class'=>'success', 'message'=>"update Successfull "];

            return redirect('admin/productsize')->with($flashdata);

    }
}
