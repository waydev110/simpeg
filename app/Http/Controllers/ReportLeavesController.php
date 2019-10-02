<?php

namespace App\Http\Controllers;

use App\Leave;
use App\Employee;
use Illuminate\Http\Request;

class ReportLeavesController extends Controller
{

    public function index(){
        return view('leave.report_index');
    }

    public function report(Request $request){
        $request->validate(['kode_cuti' => 'required']);
        $cuti = Leave::leftjoin('employees', 'leaves.nik', '=', 'employees.nik')
                        ->where('kode_cuti',$request->kode_cuti)->get();
        return view('leave.report', ['leaves' => $cuti]);
    }

    public function print($id)
    {
        $cuti = Leave::leftjoin('employees', 'leaves.nik', '=', 'employees.nik')
                        ->where('kode_cuti',$id)->get();
        return view('leave.report_print', ['leaves' => $cuti]);
    }
}
