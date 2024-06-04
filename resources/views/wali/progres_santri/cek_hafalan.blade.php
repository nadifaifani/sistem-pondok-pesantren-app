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
                <h5 class="mb-0">Cek Hafalan</h5>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Progres Santri</li>
                        <li class="breadcrumb-item active" aria-current="page">Cek Hafalan</li>
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
                                        <a class="iq-bg-danger iq-sign-btn btn-block" href=""
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Cek Hafalan Santri</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <p>Selamat datang di halaman Cek Hafalan Santri Pondok Pesantren Al Huda.</p>
                          <div class="table-responsive">
                             <table class="table">
                                <thead>
                                   <tr>
                                      <th scope="col">#</th>
                                      <th class="text-center" scope="col">Tahun</th>
                                      <th class="text-center" scope="col">Total Hafalan</th>
                                      <th class="text-center" scope="col">Nilai</th>
                                      <th class="text-center" scope="col">Hafalan</th>
                                      <th class="text-center" scope="col">Cetak Hasil</th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <th scope="row">1</th>
                                      <td class="text-center">2023</td>
                                      <td class="text-center">30</td>
                                      <td class="text-center">85</td>
                                      <td class="text-center"><span class="badge badge-primary" data-toggle="modal" data-target="#exampleModalScrollable">Cek Hafalan</span></td>
                                      <td class="text-center"><span class="badge badge-success">Cetak</span></td>
                                   </tr>
                                   <tr>
                                      <th scope="row">2</th>
                                      <td class="text-center">2023</td>
                                      <td class="text-center">31</td>
                                      <td class="text-center">90</td>
                                      <td class="text-center"><span class="badge badge-primary" data-toggle="modal" data-target="#exampleModalScrollable">Cek Hafalan</span></td>
                                      <td class="text-center"><span class="badge badge-success">Cetak</span></td>
                                   </tr>
                                   <tr>
                                      <th scope="row">3</th>
                                      <td class="text-center">2024</td>
                                      <td class="text-center">28</td>
                                      <td class="text-center">81</td>
                                      <td class="text-center"><span class="badge badge-primary" data-toggle="modal" data-target="#exampleModalScrollable">Cek Hafalan</span></td>
                                      <td class="text-center"><span class="badge badge-success">Cetak</span></td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Nilai Santri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Konten modal di sini -->
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Juz</th>
                                <th scope="col">Surat dan Ayat terakhir</th>
                                <th scope="col">Total Hafalan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>29</td>
                                <td>Al Mulk:30</td>
                                <td>2 Juz</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">2</th>
                                <td>28</td>
                                <td>Al Jum'ah:11</td>
                                <td>2 Juz</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">3</th>
                                <td>28</td>
                                <td>Al Mujadalah:6</td>
                                <td>3 Juz</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">4</th>
                                <td>27</td>
                                <td>Al Hadid:29</td>
                                <td>3 Juz 2 Lembar</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">5</th>
                                <td>28</td>
                                <td>Al Mumtahan:5</td>
                                <td>3 Juz 6 Lembar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
