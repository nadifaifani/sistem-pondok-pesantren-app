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
                <h5 class="mb-0">Pendaftaran</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master Admin</li>
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
                        {{-- FullScreen --}}
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen">
                            <i class="ri-fullscreen-line"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-list">
                    <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-white text-white"><img
                                src="{{ asset('images/local/user-1.png') }}" class="img-fluid rounded" alt="user"></a>
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
                                        <form action="{{ url('/logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="iq-bg-danger iq-sign-btn btn-block">Keluar<i
                                                    class="ri-login-box-line ml-2"></i></button>
                                        </form>
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
    <div id="content-page" class="content-page">
        <div class="container-fluid col-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card iq-mb-3 text-white bg-secondary">
                        <div class="card-body">
                            <h4 class="card-title text-white">Informasi</h4>
                            <blockquote class="blockquote mb-0">
                                <p class="font-size-14">
                                    Data master adalah informasi penting yang mengelola nominal daftar ulang, nominal
                                    tamrin, dan berbagai jenis pembayaran iuran bulanan. Ini mencakup biaya pendaftaran atau
                                    perpanjangan keanggotaan (daftar ulang), kontribusi reguler (tamrin), dan jenis-jenis
                                    pembayaran iuran bulanan. Pengelolaan data master yang efisien dan akurat penting untuk menjaga
                                    konsistensi dan keberlangsungan sistem atau organisasi.
                                </p>
                                <footer class="blockquote-footer text-white font-size-12">Developer</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="d-flex">
            {{-- Daftar Ulang --}}
            <div class="container-fluid col-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Daftar Ulang</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="{{ url('/master/master_admin') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="daftar_ulang">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" id="daftar_ulang"
                                                name="daftar_ulang" value="{{ $daftar_ulang }}" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Tamrin --}}
            <div class="container-fluid col-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Tamrin</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="{{ url('/master/master_admin') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="tamrin">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" id="tamrin" name="tamrin"
                                                {{-- value="{{ $tamrin }}" required> --}}
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Iuran Bulanan --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Iuran Bulanan</h4>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mt-1" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Tambah Jenis Iuran
                                </button>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ url('/master/master_admin') }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="jenis_iuran">Jenis Iuran <span class="text-danger">*</span></label>
                                        <select class="form-control" name="jenis_iuran" id="jenis_iuran">
                                            {{-- @foreach ($jenis_iurans as $j)
                                                <option value="{{ $j->id }}" data-nominal="{{ $j->pembayaran_jenis_iuran }}">{{ $j->jenis_iuran }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>                                    
                                    <div class="form-group col-6">
                                        <label for="daftar_ulang">Nominal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="tamrin">Rp.</span>
                                            </div>
                                            {{-- <input type="number" class="form-control" id="pembayaran_jenis_iuran" name="pembayaran_jenis_iuran" value="{{ $jenis_iurans[0]->pembayaran_jenis_iuran }}" required> --}}
                                        </div>
                                    </div>
                                </div>                                
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Iuran Bulanan -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Jenis Iuran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/master/master_admin') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenis_iuran">Jenis Iuran <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="jenis_iuran" name="jenis_iuran"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran_jenis_iuran">Nominal Jenis Iuran <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="pembayaran_jenis_iuran" name="pembayaran_jenis_iuran"
                                value="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection