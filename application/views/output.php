<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <pre>
        BUKTI PEMBAYARAN TIKET KERETA API
        ======================================
        Nama Costumer   : <?= $nama ."<br>"?> 
        No. KTP         : <?= $ktp ?> <br>
        Kode Kereta     : <?= $kd_kereta ?> <br>
        Jurusan         : <?= $jurusan ?> <br>
        Jenis Kelas     : <?= $jns_kelas ?> <br>
        Jumlah Tiket    : <?= $jml_tiket ?> <br>
        --------------------------------------
        <a href="<?= base_url('tiket/form_tiket') ?>">Input Data Kembali</a>
    </pre>
</body>
</html>