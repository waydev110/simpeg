<?php

namespace App\Http\Controllers;

use App\Education;
use App\Employee;
use Illuminate\Http\Request;

class EducationsController extends Controller
{

    public function index()
    {
        $pendidikan = Education::join('employees', 'education.nik', '=', 'employees.nik')
                        ->get();
        return view('education.index',['educations' => $pendidikan]);
    }

    public function create()
    {
        $employees = Employee::select('nik', 'nip')->get();
        return view('education.create',['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $rules['nik'] = 'required|unique:education|max:15';
        $request->validate($rules);
        Education::create($request->all());
        return redirect('/pendidikan')->with('status','Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pendidikan = Education::join('employees', 'education.nik', '=', 'employees.nik')
                        ->where('kode_pendidikan',$id)->get();
        return view('education.show', ['pendidikan' => $pendidikan]);
    }

    public function edit($id)
    {
        $pendidikan = Education::join('employees', 'education.nik', '=', 'employees.nik')
                        ->where('kode_pendidikan',$id)->get();
        return view('education.edit', ['educations' => $pendidikan]);
    }

    public function update(Request $request, Education $pendidikan)
    {
        $rules = $this->rules();
        $rules['nik'] = [
            'required','max:15',
            Rule::unique('grades')->ignore($pangkat),
        ];
        $request->validate($rules);

        $pendidikan::find($pendidikan->kode_pendidikan)->update($request->all());
        return redirect('/pendidikan')->with('status','Data berhasil diubah!');

    }

    public function destroy(Education $pendidikan)
    {
        Education::destroy($pendidikan->kode_pendidikan);
        return redirect('/pendidikan')->with('status','Data berhasil dihapus!');
    }

    private function rules(){
        return [
            'prodi' => 'required',
            'jenjang' => 'required',
            'asal_sekolah' => 'required',
            'tahun_lulus' => 'required|date',
        ];
    }
}
