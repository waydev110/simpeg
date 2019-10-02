<?php

namespace App\Http\Controllers;

use App\Leave;
use App\Employee;
use Illuminate\Http\Request;

class LeavesController extends Controller
{

    public function index()
    {
        $cuti = Leave::leftjoin('employees', 'leaves.nik', '=', 'employees.nik')->get();
        return view('leave.index',['leaves' => $cuti]);
    }

    public function create()
    {
        $employees = Employee::select('nik', 'nip')->get();
        return view('leave.create',['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate($this->rules());
        Leave::create($request->all());
        return redirect('/cuti')->with('status','Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $cuti = Leave::leftjoin('employees', 'leaves.nik', '=', 'employees.nik')
                        ->where('kode_cuti',$id)->get();
        return view('leave.show', ['leaves' => $cuti]);
    }

    public function edit($id)
    {
        $cuti = Leave::leftjoin('employees', 'leaves.nik', '=', 'employees.nik')
                        ->where('kode_cuti',$id)->get();
        return view('leave.edit', ['leaves' => $cuti]);
    }

    public function update(Request $request, Leave $cuti)
    {
        $request->validate($this->rules());

        $cuti::find($cuti->kode_cuti)->update($request->all());

        return redirect('/cuti')->with('status','Data berhasil diubah!');
    }

    public function destroy(Leave $cuti)
    {
        Leave::destroy($cuti->kode_cuti);
        return redirect('/cuti')->with('status','Data berhasil dihapus!');
    }

    private function rules(){
        return [
            'jenis_cuti' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'sisa_cuti' => 'required',
            'nik' => 'required|max:15'
        ];
    }
}
