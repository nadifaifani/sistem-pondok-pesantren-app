<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemberitahuan Tagihan Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #f1f1f1;
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .content h1 {
            font-size: 24px;
            color: #333333;
        }

        .content p {
            font-size: 16px;
            color: #555555;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <div class="d-flex">
                <div class="col-1"></div>
                {{-- <div>
                    <img src="{{ asset('images/pondok/logo.png') }}" alt="Logo" width="50">
                </div> --}}
                <div class="col">
                    <h3 class="text-center" style="margin-top: 5px;font-weight: bold;">Pondok Pesantren AL-Huda</h3>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="content">
            <h1>Halo, {{ $tagihans[0]->santri->nama_santri }}</h1>
            <p>Anda telah menerima tagihan baru dengan detail sebagai berikut:</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis</th>
                            <th scope="col" class="text-center">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $totalTagihan = 0;
                        @endphp
                        @foreach ($tagihans as $tagihan)
                        @php
                        $totalTagihan += $tagihan->jumlah_pembayaran;
                        @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $tagihan->jenis_pembayaran)) }}</td>
                                <td class="text-center">Rp{{ number_format($tagihan->jumlah_pembayaran, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="alert alert-primary" role="alert">
                Total tagihan anda senilai <b>Rp{{ number_format($totalTagihan, 0, ',', '.') }}</b>, silahkan melakukan pembayaran di
                <b>Kantor Tata Usaha Pondok Pesantren AL HUDA</b>.
            </div>
            <p class="text-center">Informasi lebih lanjut, kunjungi website al-huda.com </p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Pondok Pesantren Al-Huda. Semua hak dilindungi.</p>
        </div>
    </div>
    <!-- Bootstrap JS (Optional for some features like collapse and dropdown) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>