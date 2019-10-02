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
				<li class="breadcrumb-item active" aria-current="page">Input Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Input Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/pegawai">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">NIK</label>
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="NIK" value="{{ old('nik') }}">
                                    @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NIP</label>
                                    <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" value="{{ old('nip') }}">
                                    @error('nip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="Laki-laki" {{ (old('jenis_kelamin')=='Laki-laki')? 'Selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ (old('jenis_kelamin')=='Perempuan')? 'Selected' : '' }}>Perempuan</option>
                                    </select>
                                    <!-- <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ old('jenis_kelamin') }}"> -->
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Agama</label>
                                    <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                        <option value="Islam" {{ (old('agama')=='Islam')? 'Selected' : '' }}>Islam</option>
                                        <option value="Kristen" {{ (old('agama')=='Kristen')? 'Selected' : '' }}>Kristen</option>
                                        <option value="Katholik" {{ (old('agama')=='Katholik')? 'Selected' : '' }}>Katholik</option>
                                        <option value="Hindu" {{ (old('agama')=='Hindu')? 'Selected' : '' }}>Hindu</option>
                                        <option value="Budha" {{ (old('agama')=='Budha')? 'Selected' : '' }}>Budha</option>
                                        <option value="Khonghucu" {{ (old('agama')=='Khonghucu')? 'Selected' : '' }}>Khonghucu</option>
                                    </select>
                                    <!-- <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" placeholder="Agama" value="{{ old('agama') }}"> -->
                                    @error('agama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Golongan Darah</label>
                                    <select name="golongan_darah" id="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                                        <option value="A" {{ (old('golongan_darah')=='A')? 'Selected' : '' }}>A</option>
                                        <option value="B" {{ (old('golongan_darah')=='B')? 'Selected' : '' }}>B</option>
                                        <option value="AB" {{ (old('golongan_darah')=='AB')? 'Selected' : '' }}>AB</option>
                                        <option value="O" {{ (old('golongan_darah')=='O')? 'Selected' : '' }}>O</option>
                                    </select>
                                    <!-- <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah" placeholder="Golongan Darah" value="{{ old('golongan_darah') }}"> -->
                                    @error('golongan_darah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="Lajang" {{ (old('status')=='Lajang')? 'Selected' : '' }}>Lajang</option>
                                        <option value="Menikah" {{ (old('status')=='Menikah')? 'Selected' : '' }}>Menikah</option>
                                    </select>
                                    <!-- <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" placeholder="Status" value="{{ old('status') }}"> -->
                                    @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Jumlah Anak</label>
                                    <input type="number" class="form-control @error('jumlah_anak') is-invalid @enderror" name="jumlah_anak" placeholder="Jumlah Anak" value="{{ old('jumlah_anak') }}">
                                    @error('jumlah_anak')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Golongan</label>
                                    <input type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" placeholder="Golongan" value="{{ old('golongan') }}">
                                    @error('golongan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Masa Kerja</label>
                                    <input type="number" class="form-control @error('masa_kerja') is-invalid @enderror" name="masa_kerja" placeholder="Masa Kerja" value="{{ old('masa_kerja') }}">
                                    @error('masa_kerja')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TMT CPNS</label>
                                    <input type="date" class="form-control @error('tmt_cpns') is-invalid @enderror" name="tmt_cpns" placeholder="TMT CPNS" value="{{ old('tmt_cpns') }}">
                                    @error('tmt_cpns')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TMT PNS</label>
                                    <input type="date" class="form-control @error('tmt_pns') is-invalid @enderror" name="tmt_pns" placeholder="TMT PNS" value="{{ old('tmt_pns') }}">
                                    @error('tmt_pns')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">No Telepon</label>
                                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" placeholder="No Telepon" value="{{ old('no_telepon') }}">
                                    @error('no_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control @error('e_mail') is-invalid @enderror" name="e_mail" placeholder="Email" value="{{ old('e_mail') }}">
                                    @error('e_mail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                    <div class='form-group'>
                                        <button class="btn btn-primary pull-right">Simpan</button>
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