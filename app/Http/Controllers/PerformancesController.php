<?php
namespace App\Http\Controllers;

use App\Performance;
use App\Employee;
use Illuminate\Http\Request;

class PerformancesController extends Controller
{
    public function index()
    {
        $kinerja = Performance::leftjoin('employees', 'Performances.nik', '=', 'employees.nik')->get();
        return view('performance.index',['performances' => $kinerja]);
    }

    public function create()
    {
        $employees = Employee::select('nik', 'nip')->get();
        return view('performance.create',['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate($this->rules());
        $performance = Performance::create($request->all());
        return redirect('/kinerja')->with('status','Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $kinerja = Performance::leftjoin('employees', 'Performances.nik', '=', 'employees.nik')->where('kode_kinerja',$id)->get();
        return view('performance.show', ['performances' => $kinerja]);
    }

    public function edit($id)
    {
        $kinerja = Performance::leftjoin('employees', 'Performances.nik', '=', 'employees.nik')
                        ->where('kode_kinerja',$id)->get();
        return view('performance.edit', ['performances' => $kinerja]);
    }

    public function update(Request $request, Performance $kinerja)
    {
        $request->validate($this->rules());

        $kinerja::find($kinerja->kode_kinerja)->update($request->all());
        return redirect('/kinerja')->with('status','Data berhasil diubah!');

    }

    public function destroy(Performance $kinerja)
    {
        Performance::destroy($kinerja->kode_kinerja);
        return redirect('/kinerja')->with('status','Data berhasil dihapus!');
    }

    private function rules(){
        return [
            'jumlah_presensi' => 'required',
            'jumlah_ijin' => 'required',
            'jumlah_absen' => 'required',
            'kelebihan_jam_kerja' => 'required',
            'kesimpulan' => 'required',
            'tunj_kinerja' => 'required',
            'nik' => 'required|max:15'
        ];
    }
}
