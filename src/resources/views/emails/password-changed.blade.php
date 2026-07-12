<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Password Berhasil Diubah</title>
</head>

<body style="margin:0;padding:0;background:#fdf5f8;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0"
style="background:#ffffff;border-radius:18px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.08);">

    <!-- Header -->
    <tr>
        <td align="center"
            style="background:#ff6699;padding:35px;color:white;">

            <img src="{{ asset('assets/images/logo_sweetrecipe_1.png') }}"
                 alt="SweetRecipe"
                 style="height:70px;margin-bottom:15px;">

            <h1 style="margin:0;font-size:30px;font-weight:bold;">
                SweetRecipe
            </h1>

            <p style="margin-top:10px;font-size:18px;">
                Password Berhasil Diubah
            </p>

        </td>
    </tr>

    <!-- Body -->
    <tr>
        <td style="padding:40px;">

            <h2 style="color:#444;margin-top:0;">
                Halo, {{ $user->name }} 👋
            </h2>

            <p style="font-size:16px;color:#666;line-height:28px;">
                Kami ingin memberitahukan bahwa password akun
                <strong>SweetRecipe</strong> Anda telah berhasil diperbarui.
            </p>

            <p style="font-size:16px;color:#666;line-height:28px;">
                Demi menjaga keamanan akun Anda, setiap perubahan password akan
                selalu kami informasikan melalui email ini.
            </p>

            <table
            width="100%"
            cellpadding="12"
            style="
            margin-top:25px;
            background:#fff5f8;
            border:1px solid #ffd5e5;
            border-radius:10px;">

                <tr>
                    <td width="35%">
                        <strong>📧 Email</strong>
                    </td>

                    <td>
                        {{ $user->email }}
                    </td>
                </tr>

                <tr>
                    <td>
                        <strong>📅 Tanggal</strong>
                    </td>

                    <td>
                        {{ $tanggal }}
                    </td>
                </tr>

                <tr>
                    <td>
                        <strong>🕒 Jam</strong>
                    </td>

                    <td>
                        {{ $jam }} WIB
                    </td>
                </tr>

            </table>

            <div
            style="
            margin-top:30px;
            padding:18px;
            background:#fff8e6;
            border-left:5px solid #ffc107;
            border-radius:8px;">

                <strong style="color:#8a6d3b;">
                    ⚠️ Informasi Keamanan
                </strong>

                <p style="margin-top:10px;color:#555;line-height:26px;">
                    Jika Anda memang melakukan perubahan password,
                    Anda tidak perlu melakukan tindakan apa pun.
                    Namun apabila Anda merasa tidak melakukan perubahan tersebut,
                    segera ubah password kembali atau hubungi Administrator
                    SweetRecipe.
                </p>

            </div>

            <!-- Tombol Login -->
            <div style="text-align:center;margin-top:35px;">

                <a href="{{ url('/login') }}"
                   style="
                   display:inline-block;
                   background:#ff6699;
                   color:white;
                   padding:14px 35px;
                   border-radius:30px;
                   text-decoration:none;
                   font-weight:bold;
                   font-size:15px;">

                    Login ke SweetRecipe

                </a>

            </div>

        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td
        align="center"
        style="
        padding:30px;
        background:#fafafa;
        color:#999;
        font-size:14px;">
            Terima kasih telah menggunakan
            <strong style="color:#ff6699;">SweetRecipe ❤️</strong>
            <br><br>
            Apabila membutuhkan bantuan, silakan hubungi Administrator.
            <br>

            <strong>{{ config('mail.from.address') }}</strong>
            <br><br>
            &copy; {{ date('Y') }} SweetRecipe.
            Seluruh hak cipta dilindungi.
        </td>
    </tr>
</table>

</td>
</tr>
</table>

</body>
</html>