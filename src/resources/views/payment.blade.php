<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pembayaran SweetRecipe</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container py-5">

    <div class="card shadow">

        <div class="card-body text-center">

            <h2 class="mb-3">
                Pembayaran SweetRecipe
            </h2>

            <p>
                Order #{{ $order->id }}
            </p>

            <p>
                <strong>
                    {{ $order->nama_produk }}
                </strong>
            </p>

            <h3 class="text-danger mb-4">
                Rp{{ number_format($order->total,0,',','.') }}
            </h3>

            <button
                id="pay-button"
                class="btn btn-lg btn-success">

                Bayar Sekarang

            </button>

        </div>

    </div>

</div>

<script>

document
.getElementById('pay-button')
.onclick = function(){

    snap.pay("{{ $order->snap_token }}",{

        onSuccess:function(result){

            alert("Pembayaran berhasil!");

            window.location.href="/";

        },

        onPending:function(result){

            alert("Menunggu pembayaran");

        },

        onError:function(result){

            alert("Pembayaran gagal");
        }
    });
};
</script>

</body>
</html>