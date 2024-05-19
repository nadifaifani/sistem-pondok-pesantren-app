@extends('admin/app_admin')
@section('navbar')
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
                <div class="top-logo">
                    <a href="index.html" class="logo">
                        <span>Al-Huda Admin</span>
                    </a>
                </div>
            </div>
            {{-- Halaman --}}
            <div class="navbar-breadcrumb">
                <h5 class="mb-0">Iuran Bulanan</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                        <li class="breadcrumb-item active" aria-current="page">Iuran Bulanan</li>
                    </ul>
                </nav>
            </div>
            {{-- Logo Kanan --}}
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        {{-- Notif --}}
                        <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <i class="ri-notification-2-line"></i>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-danger p-3">
                                            <h5 class="mb-0 text-white">All Notifications<small
                                                    class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New Order Recieved</h6>
                                                    <small class="float-right font-size-12">23 hrs ago</small>
                                                    <p class="mb-0">Lorem is simply</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{ asset('images/user/01.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('images/user/02.jpg') }}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Jond Nik</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40" src="{{ asset('images/small/jpg.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Updates Available</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">120 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- FullScreen --}}
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect"
                                id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-list">
                    <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-white text-white"><img
                                src="{{ asset('images/local/user-1.png') }}" class="img-fluid rounded"
                                alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Nama User</h5>
                                        <span class="text-white font-size-12">Online</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Profil Saya</h6>
                                                <p class="mb-0 font-size-12">Tampilkan data pribadi saya.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-secondary">
                                                <i class="ri-lock-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Setelan Privasi</h6>
                                                <p class="mb-0 font-size-12">Kontrol parameter privasi Anda.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="iq-bg-danger iq-sign-btn btn-block" href="{{ url('/logout') }}"
                                            role="button">Keluar<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <!-- Alert -->
        <div class="container-fluid">
            @if (session('success'))
                <div id="success-alert" class="alert text-white bg-success" role="alert">
                    <div class="iq-alert-icon">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                    <div class="iq-alert-text"><b>Berhasil !</b> {{ session('success') }}</div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <div id="error-alert" class="alert text-white bg-danger" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-information-line"></i>
                        </div>
                        <div class="iq-alert-text"><b>Gagal ! </b> {{ $err }}</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                @endforeach
            @endif
        </div>
        {{-- Tabel --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    {{-- Tabel Belum Lunas --}}
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Pembayaran Iuran Bulanan</h4>
                                <h6 class="card-title">Belum Lunas</h6>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mt-1" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Tambah Pembayaran
                                </button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive mb-3">
                                <table id="tableiuran_belum_lunas" class="table" role="grid"
                                    aria-describedby="user-list-page-info" style="width: 100%; min-height: 150px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Nama Santri</th>
                                            <th>Jenis Iuran</th>
                                            <th>Iuran Bulan</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Diterima Oleh</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- Tabel Lunas --}}
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Pembayaran Iuran Bulanan</h4>
                                <h6 class="card-title">Lunas</h6>
                            </div>
                        </div>
                        {{-- <div class="iq-card-body">
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="filterSantri">Pilih Santri:</label>
                                    <select id="filterSantri" class="form-control">
                                        <option value="">Semua Santri</option>
                                        @foreach ($santris as $santri)
                                            <option value="{{ $santri->id_santri }}">{{ $santri->nama_santri }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="filterJenisIuran">Jenis Iuran:</label>
                                    <select class="form-control" name="filterJenisIuran" id="filterJenisIuran">
                                        <option value="">Jenis Iuran</option>
                                        @foreach ($jenis_iurans as $jenis_iuran)
                                            <option value="{{ $jenis_iuran->id_jenis_iuran }}">
                                                {{ $jenis_iuran->jenis_iuran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="filterBulanIuran">Bulan Iuran:</label>
                                    <input type="month" id="filterBulanIuran" class="form-control">
                                </div>
                            </div>
                            <div class="table-responsive mb-3">
                                <table id="tableIuranBulanan" class="table" role="grid"
                                    aria-describedby="user-list-page-info" style="width: 100%; min-height: 500px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Nama Santri</th>
                                            <th>Jenis Iuran</th>
                                            <th>Iuran Bulan</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Diterima Oleh</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <form action="{{ url('/pembayaran/iuran_bulanan/create') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_santri">Nama Santri <span class="text-danger">*</span></label>
                            <select class="form-control" name="nama_santri" id="nama_santri">
                                <option value="Nama Santri">Nama Santri</option>
                                @foreach ($santris as $santri)
                                    <option value="{{ $santri->nama_santri }}">{{ $santri->nama_santri }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_iuran">Jenis Iuran <span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis_iuran" id="jenis_iuran">
                                <option value="Jenis Iuran">Jenis Iuran</option>
                                @foreach ($jenis_iurans as $jenis_iuran)
                                    <option value="{{ $jenis_iuran->id_jenis_iuran }}"
                                        data-nominal="{{ $jenis_iuran->pembayaran_jenis_iuran }}">
                                        {{ $jenis_iuran->jenis_iuran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bulan_iuran">Bulan Iuran <span class="text-danger">*</span></label>
                            <input type="month" id="bulan_iuran" name="bulan_iuran" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="daftar_ulang">Jumlah Pembayaran <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran"
                                value="{{ $jenis_iurans[0]->pembayaran_jenis_iuran }}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    {{-- @foreach ($iuran_bulanans as $iuran_bulanan)
        <div class="modal fade" id="deleteModal{{ $iuran_bulanan->id_pembayaran }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle{{ $iuran_bulanan->id_pembayaran }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <form action="{{ url('/pembayaran/iuran_bulanan/delete/' . $iuran_bulanan->id_pembayaran) }}"
                        id="deleteForm" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body text-center">
                            <img src="{{ asset('images/local/danger.png') }}" width="80px" alt="">
                            <h3 class="mt-4">Anda yakin ingin hapus data ini?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach --}}
@endsection