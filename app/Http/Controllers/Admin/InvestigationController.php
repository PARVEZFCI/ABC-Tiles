<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Mode\User;
use App\Http\Controllers\Controller;
use App\Model\Logs;
use DB;

class InvestigationController extends Controller
{
    
    public function investigations()
    {

        $data["investigation_manage"] = DB::table('investigation_manage')
        ->orderBy('id','desc')
        ->get();

        // echo "<pre>";
        // print_r($data);
        // exit();

        return view('admin.investigations.investigations', $data);
    }

    
    public function investigationsadd()
    {


        // echo "<pre>";
        // print_r($data);
        // exit();

        return view('admin.investigations.investigationsadd');
    }

    public function investigationsac(Request $request)
    {

        $inputData = [
            'code_test' => $request->code_test,
            'inv_name' => $request->inv_name,
            'unit_test' => $request->unit_test,
            'inv_ref_value' => $request->inv_ref_value,
            'report_file_name' => $request->report_file_name,
            'report_days' => $request->report_days,
            'charge' => $request->charge,
            'discount' => $request->discount, 
        ];


        DB::table('investigation_manage')
        ->insert($inputData);

        // echo "<pre>";
        // print_r($data);
        // exit();

        $flashdata = ['class'=>'success', 'message'=>"Add Successfull "];
        return redirect()->back()->with($flashdata);
    }

    
    public function invedit($id)
    {

        $data["investigation_manage"] = DB::table('investigation_manage')
        ->where('id',$id)
        ->first();

        // echo "<pre>";
        // print_r($data);
        // exit();

        return view('admin.investigations.invedit',$data);
    }

    
    public function inveditac(Request $request)
    {

        $inputData = [
            'code_test' => $request->code_test,
            'inv_name' => $request->inv_name,
            'unit_test' => $request->unit_test,
            'inv_ref_value' => $request->inv_ref_value,
            'report_file_name' => $request->report_file_name,
            'report_days' => $request->report_days,
            'charge' => $request->charge,
            'discount' => $request->discount, 
        ];


        DB::table('investigation_manage')
        ->where('id',$request->id)
        ->update($inputData);

        // echo "<pre>";
        // print_r($data);
        // exit();

        $flashdata = ['class'=>'success', 'message'=>"Update Successfull "];
        return redirect()->back()->with($flashdata);
    }
    
    public function investigationsdelete($id)
    {

        DB::table('investigation_manage')->where('id', $id)->delete();

        // echo "<pre>";
        // print_r($data);
        // exit();

        $flashdata = ['class'=>'danger', 'message'=>"Delete Successfull "];
        return redirect()->back()->with($flashdata);
    }

}