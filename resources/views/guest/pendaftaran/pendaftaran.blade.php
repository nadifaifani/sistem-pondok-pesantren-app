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
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Tempat lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Tanggal lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    placeholder="Masukkan nama">
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
