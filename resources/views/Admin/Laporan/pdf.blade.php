<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran Retribusi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Pembayaran Retribusi</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Wajib Retribusi</th>
                <th>Tanggal Bayar</th>
                <th>Nominal Total Retribusi</th>
                <th>Bank</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_rekening }}</td>
                    <td>{{ $item->tgl_bayar }}</td>
                    <td>Rp {{ number_format($item->nominal_transfer, 2, ',', '.') }}</td>
                    <td>{{ $item->refBank->nama_bank }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
