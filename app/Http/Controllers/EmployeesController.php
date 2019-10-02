<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{

    public function index()
    {
        $employee = Employee::all();
        return view('employee.index',['employees' => $employee]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $rules['nik'] = 'required|unique:employees';
        $rules['nip'] = 'required|unique:employees';
        $request->validate($rules);
        Employee::create($request->all());
        return redirect('/pegawai')->with('status','Data berhasil ditambahkan!');
    }

    public function show(Employee $pegawai)
    {
        return view('employee.show', compact('pegawai'));
    }

    public function edit(Employee $pegawai)
    {
        return view('employee.edit',compact('pegawai'));
    }

    public function update(Request $request, Employee $pegawai)
    {
        $rules = $this->rules();
        $rules['nik'] = [
            'required',
            Rule::unique('employees')->ignore($pegawai),
        ];
        $rules['nip'] = [
            'required',
            Rule::unique('employees')->ignore($pegawai),
        ];
        $request->validate($rules);

        $pegawai::find($pegawai->nik)->update($request->all());
        return redirect('/pegawai')->with('status','Data berhasil diubah!');

    }

    public function destroy(Employee $pegawai)
    {
        Employee::destroy($pegawai->nik);
        return redirect('/pegawai')->with('status','Data berhasil dihapus!');
    }

    private function rules(){
        return [
            'nama' => 'required', 'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date', 'jenis_kelamin' => 'required', 'agama' => 'required',
            'golongan_darah' => 'required', 'status' => 'required', 'jumlah_anak' => 'required|numeric',
            'golongan' => 'required', 'jabatan' => 'required', 'masa_kerja' => 'required|numeric',
            'tmt_cpns' => 'required|date', 'tmt_pns' => 'required|date', 'alamat' => 'required',
            'no_telepon' => 'required',
            'e_mail' => 'required|email',
        ];
    }
}
