@extends('layouts/app')
@section('title','Sistem Informasi Manajemen Kepegawaian')

@section('content')


<!--Header submenu -->
<div class="bg-white p-3 header-secondary header-submenu">
	<div class="container ">
		<div class="row">
			<div class="col">
				<div class="d-flex"></div>
			</div>
			<div class="col col-auto">
				<a class="btn btn-primary mt-4 mt-sm-0" href="/pegawai">
                <i class="fe fe-arrow-left mr-1 mt-1"></i> Kembali</a>
			</div>
		</div>
	</div>
</div><!--End Header submenu -->

<!-- app-content-->
<div class="container content-area">
	<div class="side-app">
		<!-- page-header -->
		<div class="page-header">
			<ol class="breadcrumb"><!-- breadcrumb -->
				<li class="breadcrumb-item"><a href="/">Beranda</a></li>
				<li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
				<li class="breadcrumb-item active" aria-current="page">Edit Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Edit Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/pegawai/{{ $pegawai->nik }}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">NIK</label>
                                    <input type="hidden" name="nik" value="{{ $pegawai->nik }}">
                                    <input type="text" class="form-control" value="{{ $pegawai->nik }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NIP</label>
                                    <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" value="{{ $pegawai->nip }}">
                                    @error('nip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ $pegawai->nama }}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $pegawai->tempat_lahir }}">
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $pegawai->tanggal_lahir }}">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="Laki-laki" {{ ($pegawai->jenis_kelamin=='Laki-laki')? 'Selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ ($pegawai->jenis_kelamin=='Perempuan')? 'Selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Agama</label>
                                    <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                        <option value="Islam" {{ ($pegawai->agama=='Islam')? 'Selected' : '' }}>Islam</option>
                                        <option value="Kristen" {{ ($pegawai->agama=='Kristen')? 'Selected' : '' }}>Kristen</option>
                                        <option value="Katholik" {{ ($pegawai->agama=='Katholik')? 'Selected' : '' }}>Katholik</option>
                                        <option value="Hindu" {{ ($pegawai->agama=='Hindu')? 'Selected' : '' }}>Hindu</option>
                                        <option value="Budha" {{ ($pegawai->agama=='Budha')? 'Selected' : '' }}>Budha</option>
                                        <option value="Khonghucu" {{ ($pegawai->agama=='Khonghucu')? 'Selected' : '' }}>Khonghucu</option>
                                    </select>
                                    @error('agama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Golongan Darah</label>
                                    <select name="golongan_darah" id="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                                        <option value="A" {{ ($pegawai->golongan_darah=='A')? 'Selected' : '' }}>A</option>
                                        <option value="B" {{ ($pegawai->golongan_darah=='B')? 'Selected' : '' }}>B</option>
                                        <option value="AB" {{ ($pegawai->golongan_darah=='AB')? 'Selected' : '' }}>AB</option>
                                        <option value="O" {{ ($pegawai->golongan_darah=='O')? 'Selected' : '' }}>O</option>
                                    </select>
                                    @error('golongan_darah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="Lajang" {{ ($pegawai->status=='Lajang')? 'Selected' : '' }}>Lajang</option>
                                        <option value="Menikah" {{ ($pegawai->status=='Menikah')? 'Selected' : '' }}>Menikah</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Jumlah Anak</label>
                                    <input type="number" class="form-control @error('jumlah_anak') is-invalid @enderror" name="jumlah_anak" placeholder="Jumlah Anak" value="{{ $pegawai->jumlah_anak }}">
                                    @error('jumlah_anak')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Golongan</label>
                                    <input type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" placeholder="Golongan" value="{{ $pegawai->golongan }}">
                                    @error('golongan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{ $pegawai->jabatan }}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Masa Kerja</label>
                                    <input type="number" class="form-control @error('masa_kerja') is-invalid @enderror" name="masa_kerja" placeholder="Masa Kerja" value="{{ $pegawai->masa_kerja }}">
                                    @error('masa_kerja')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TMT CPNS</label>
                                    <input type="date" class="form-control @error('tmt_cpns') is-invalid @enderror" name="tmt_cpns" placeholder="TMT CPNS" value="{{ $pegawai->tmt_cpns }}">
                                    @error('tmt_cpns')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TMT PNS</label>
                                    <input type="date" class="form-control @error('tmt_pns') is-invalid @enderror" name="tmt_pns" placeholder="TMT PNS" value="{{ $pegawai->tmt_pns }}">
                                    @error('tmt_pns')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{ $pegawai->alamat }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">No Telepon</label>
                                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" placeholder="No Telepon" value="{{ $pegawai->no_telepon }}">
                                    @error('no_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control @error('e_mail') is-invalid @enderror" name="e_mail" placeholder="Email" value="{{ $pegawai->e_mail }}">
                                    @error('e_mail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                    <div class='form-group'>
                                        <button class="btn btn-primary pull-right">Ubah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
@endsection