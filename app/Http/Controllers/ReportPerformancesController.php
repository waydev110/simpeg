<?php

namespace App\Http\Controllers;

use App\Performance;
use App\Employee;
use Illuminate\Http\Request;

class ReportPerformancesController extends Controller
{

    public function index(){
        return view('performance.report_index');
    }

    public function report(Request $request){
        $request->validate(['bulan' => 'required', 'tahun' => 'required']);
        $kinerja = Performance::leftjoin('employees', 'performances.nik', '=', 'employees.nik')
                        ->where('tahun', $request->tahun)
                        ->where('bulan', $request->bulan)
                        ->get();
        return view('performance.report', ['performances' => $kinerja, 'tahun' => $request->tahun, 'bulan' => $request->bulan]);
    }

    public function print($tahun, $bulan)
    {
        $kinerja = Performance::leftjoin('employees', 'performances.nik', '=', 'employees.nik')
                        ->where('tahun', $tahun)
                        ->where('bulan', $bulan)
                        ->get();
        return view('performance.report_print', ['performances' => $kinerja, 'tahun' => $tahun, 'bulan' => $bulan]);
    }
}
