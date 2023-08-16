<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="margin-top: 20%">
        <center >
            <h4>LAPORAN</h4>
        </center>
    </div>
    <table class="table mt-4"  border="1px" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">No INV</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">Merk Sepatu</th>
                <th scope="col">Treatment</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total Harga</th>
                {{-- <th scope="col">Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->invoice_number }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->order_date }}</td>
                    <td>{{ $customer->updated_at }}</td>
                    <td>{{ $customer->shoe_brand }}</td>
                    <td>{{ $customer->treatment }}</td>
                    <td>{{ $customer->many }}</td>
                    <td>{{ $customer->price }}</td>
                    <td>{{ $customer->total }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">data tidak ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
