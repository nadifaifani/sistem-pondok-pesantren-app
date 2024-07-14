<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .santri-info {
            margin-bottom: 20px;
        }

        .santri-info p {
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .average {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container" id="printable">
        <div class="header">
            <h1>Nilai Santri</h1>
            <h3 style="margin-top: 0px">Pondok Pesantren Al-Huda</h3>
            <hr>
        </div>
        <div class="santri-info">
            <table style="border: none">
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>:</td>
                        <td>{{ $santri->nama_santri }}</td>
                    </tr>
                    <tr>
                        <td><strong>Semester</strong></td>
                        <td>:</td>
                        <td>{{ ucwords($semester) }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tahun</strong></td>
                        <td>:</td>
                        <td>{{ $tahun }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if ($groupedNilaiSantri->isEmpty())
            <p>Tidak ada data nilai untuk semester ini.</p>
        @else
            @foreach ($groupedNilaiSantri as $key => $nilaiGroup)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiGroup as $nilai)
                            <tr>
                                <td>{{ ucwords(str_replace('_', ' ', $nilai->mata_pelajaran)) }}</td>
                                <td>{{ $nilai->nilai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
            <div class="average">
                <p>Rata-rata Nilai Semester Ini: {{ number_format($averageNilai, 2) }}</p>
            </div>
        @endif
    </div>

    {{-- Script Print --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        window.onload = function() {
            var hasSaved = false;
            if (!hasSaved) {
                var element = document.getElementById('printable');
                html2pdf().from(element).set({
                    margin: 0.5,
                    filename: '{{ $santri->nama_santri }}-nilai-{{ $semester }}-{{ $tahun }}.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                }).save().then(function() {
                    hasSaved = true;
                    window.location.href = "{{ route('cek_nilai') }}";
                });
            }
        };
    </script>
</body>

</html>
