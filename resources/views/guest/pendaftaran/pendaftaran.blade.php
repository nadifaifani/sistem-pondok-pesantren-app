@extends('guest/app_guest')
@section('header')
    {{-- Header --}}
    <div class="container">
        <header class="d-flex py-3 mb-4 px-5">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ asset('images/pondok/logo.png') }}" alt="" class="bi me-2" width="50">
                {{-- <span class="fs-4"><h4 class="mt-2">Pondok Pesantren Al-Huda</h4></span> --}}
            </a>
            <ul class="nav nav-pills text-right">
                <li class="nav-item"><a href="/#" class="nav-link text-secondary" aria-current="page">Beranda</a></li>
                <li class="nav-item"><a href="/#tentangpondok" class="nav-link text-secondary">Tentang Pondok</a></li>
                <li class="nav-item"><a href="/#areapondok" class="nav-link text-secondary">Area Pondok</a></li>
                <li class="nav-item"><a href="/#kontak" class="nav-link text-secondary">Kontak Kami</a></li>
            </ul>
        </header>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="overlay">
                        <img src="{{ asset('images/pondok/area_pondok/area_pondok2.jpg') }}" class="card-img-top"
                            alt="">
                        <div class="overlay-background">
                            <div class="overlay-text">
                                <h1 class="mb-2 fw-bold">Pendaftaran Santri Baru</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-2 fw-bold p-navy">Form Pendaftaran</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_pendaftar" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_pendaftar" name="nama_pendaftar"
                                    placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir_pendaftar" class="form-label">Tempat lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir_pendaftar" name="tempat_lahir_pendaftar"
                                    placeholder="Masukkan Tempat Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir_pendaftar" class="form-label">Tanggal lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir_pendaftar" name="tanggal_lahir_pendaftar"
                                    placeholder="Masukkan Tanggal Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp_pendaftar" class="form-label">No Hp</label>
                                <input type="text" class="form-control" id="no_hp_pendaftar" name="no_hp_pendaftar"
                                    placeholder="Masukkan No Hp">
                            </div>
                            <div class="mb-3">
                                <label for="email_pendaftar" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email_pendaftar" name="email_pendaftar"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin_pendaftar" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin_santri" id="jenis_kelamin_santri" required>
                                    <option value="laki-laki" @if (old('jenis_kelamin_santri') == 'laki-laki') selected @endif>
                                        Laki Laki</option>
                                    <option value="perempuan" @if (old('jenis_kelamin_santri') == 'perempuan') selected @endif>
                                        Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_pendaftar" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat_pendaftar" name="alamat_pendaftar" rows="2" required>{{ old('alamat_pendaftar') }}</textarea>   
                            </div>
                            <div class="mb-3">
                                <label for="nama_wali_pendaftar" class="form-label">Nama Wali</label>
                                <input type="text" class="form-control" id="nama_wali_pendaftar" name="nama_wali_pendaftar"
                                     placeholder="Masukkan Nama Wali">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp_wali_pendaftar" class="form-label">No Hp Wali</label>
                                <input type="text" class="form-control" id="no_hp_wali" name="no_hp_wali_pendaftar"
                                    placeholder="Masukkan No Hp Wali">
                            </div>
                            <div class="mb-3">
                                <label for="email_wali_pendaftar" class="form-label">Email Wali</label>
                                <input type="text" class="form-control" id="email_wali_pendaftar" name="email_wali_pendaftar"
                                    placeholder="Masukkan Email Wali">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_wali_pendaftar" class="form-label">Alamat Wali</label>
                                <input type="text" class="form-control" id="alamat_wali_pendaftar" name="alamat_wali_pendaftar"
                                    placeholder="Masukkan Alamat Wali">
                            </div>
                            <div class="mb-3">
                                <label for="ktp_pendaftar" class="form-label">KTP</label>
                                <input type="file" class="form-control" id="ktp_pendaftar"
                                        name="ktp_pendaftar" required>
                            </div>
                            <div class="mb-3">
                                <label for="kk_pendaftar" class="form-label">Kartu Keluarga</label>
                                <input type="file" class="form-control" id="kk_pendaftar"
                                        name="kk_pendaftar" required>
                            </div>
                            <div class="mb-3">
                                <label for="akta_kelahiran_pendaftar" class="form-label">Akta Kelahiran</label>
                                <input type="file" class="form-control" id="akta_kelahiran_pendaftar"
                                        name="akta_kelahiran_pendaftar" required>
                            </div>
                            <div class="mb-3">
                                <label for="pasfoto_pendaftar" class="form-label">Pas Foto</label>
                                <input type="file" class="form-control" id="pasfoto_pendaftar"
                                        name="pasfoto_pendaftar" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary col-12" type="submit">Daftarkan Santri</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
