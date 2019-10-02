<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Employee;
use Illuminate\Http\Request;

class GradesController extends Controller
{

    public function index()
    {
        $pangkat = Grade::join('employees', 'grades.nik', '=', 'employees.nik')->get();
        return view('grade.index',['grades' => $pangkat]);
    }

    public function create()
    {
        $employees = Employee::select('nik', 'nip')->get();
        return view('grade.create',['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $rules['nik'] = 'required|unique:grades|max:15';
        $request->validate($rules);
        Grade::create($request->all());
        return redirect('/pangkat')->with('status','Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pangkat = Grade::join('employees', 'grades.nik', '=', 'employees.nik')
                        ->where('kode_pangkat',$id)->get();
        // return dump($pangkat);
        return view('grade.show', ['pangkat' => $pangkat]);
    }

    public function edit($id)
    {
        $pegawai    = Employee::select('nik', 'nip')->get();
        $pangkat = Grade::join('employees', 'grades.nik', '=', 'employees.nik')
                        ->where('kode_pangkat',$id)->get();
        return view('grade.edit', ['grades' => $pangkat, 'employees' => $pegawai]);
    }

    public function update(Request $request, Grade $pangkat)
    {
        $rules = $this->rules();
        $rules['nik'] = [
            'required','max:15',
            Rule::unique('grades')->ignore($pangkat),
        ];
        $request->validate($rules);

        $pangkat::find($pangkat->kode_pangkat)->update($request->all());
        return redirect('/pangkat')->with('status','Data berhasil diubah!');

    }

    public function destroy(Grade $pangkat)
    {
        Grade::destroy($pangkat->kode_pangkat);
        return redirect('/pangkat')->with('status','Data berhasil dihapus!');
    }

    private function rules(){
        return [
            'golongan' => 'required',
            'pangkat' => 'required',
            'masa_kerja_golongan' => 'required',
            'tmt_pangkat' => 'required|date',
            'no_sk' => 'required',
            'unit_kerja' => 'required',
        ];
    }
}
