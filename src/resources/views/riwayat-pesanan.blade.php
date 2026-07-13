<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container py-5">

    <h2 class="mb-4">
        Riwayat Pesanan
    </h2>

    @if($orders->isEmpty())

        <div class="alert alert-info">
            Belum ada pesanan.
        </div>

    @else

    <table class="table table-bordered">

        <thead>

        <tr>

            <th>No</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
            <th>Tanggal</th>

        </tr>

        </thead>

        <tbody>

        @foreach($orders as $order)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $order->nama_produk }}</td>

            <td>{{ $order->jumlah }}</td>

            <td>
                Rp{{ number_format($order->total,0,',','.') }}
            </td>

            <td>

                @if($order->status=='paid')

                    <span class="badge bg-success">
                        Paid
                    </span>

                @elseif($order->status=='pending')

                    <span class="badge bg-warning text-dark">
                        Pending
                    </span>

                @elseif($order->status=='expired')

                    <span class="badge bg-secondary">
                        Expired
                    </span>

                @elseif($order->status=='failed')

                    <span class="badge bg-danger">
                        Failed
                    </span>

                @else

                    <span class="badge bg-dark">
                        {{ ucfirst($order->status) }}
                    </span>

                @endif

            </td>

            <td>
                {{ $order->created_at->format('d M Y H:i') }}
            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

    @endif

</div>

</body>
</html>