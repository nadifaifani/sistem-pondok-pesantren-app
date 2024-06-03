@extends('wali/app_wali')
@section('navbar')
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
                <div class="top-logo">
                    <a href="index.html" class="logo">
                        <span>Ponpes Al-Huda</span>
                    </a>
                </div>
            </div>
            {{-- Halaman --}}
            <div class="navbar-breadcrumb">
                <h5 class="mb-0">Tagihan</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tagihan</li>
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
                                        <a class="iq-bg-danger iq-sign-btn btn-block" href="" role="button">Keluar<i
                                                class="ri-login-box-line ml-2"></i></a>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <br>
                                <h4 class="card-title">Tagihan Santri</h4>
                                <br>
                                <p>Anda telah mengakses menu Cek Tagihan Santri. Berikut kami sampaikan status tagihan
                                    anda,</p>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive pb-3 pt-3 px-3">
                                <table id="tableTagihan" class="table table-bordered" role="grid"
                                    aria-describedby="user-list-page-info" style="width: 100%; min-height: 500px;">
                                    <thead>
                                        <tr>
                                            <td><b>MUHAMMAD ARHAN</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tahun <b>2024</b></td>
                                        </tr>
                                        <tr>
                                            <td>Semester <b>Ganjil</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="table" style="width: 100%;">
                                                    <thead>
                                                        <tr><b>Anda memiliki tagihan :</b></tr>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jenis</th>
                                                            <th>Tanggal Awal Pembayaran</th>
                                                            <th>Tanggal Akhir Pembayaran</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Nominal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Daftar Ulang</td>
                                                            <td>27 Mei 2024</td>
                                                            <td>10 Juni 2024</td>
                                                            <td class="text-center"><span class="badge badge-danger">Belum Lunas</span></td>
                                                            <td class="text-center">Rp 100,000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Iuran Bulanan</td>
                                                            <td>27 Mei 2024</td>
                                                            <td>27 Juni 2024</td>
                                                            <td class="text-center"><span class="badge badge-danger">Belum Lunas</span></td>
                                                            <td class="text-center">Rp 50,000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Tamrin</td>
                                                            <td>27 Mei 2024</td>
                                                            <td>27 Juni 2024</td>
                                                            <td class="text-center"><span class="badge badge-danger">Belum Lunas</span></td>
                                                            <td class="text-center">Rp 80,000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">Total Tagihan</th>
                                                            <th class="text-center">Rp 280,000,00</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="alert alert-primary" role="alert">
                                                    <div class="iq-alert-text">Anda memiliki tagihan senilai <b>Rp 280,000,00</b>, silahkan melakukan pembayaran di <b>Kantor Tata Usaha Pondok Pesantren AL HUDA</b>.</div>
                                                 </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
