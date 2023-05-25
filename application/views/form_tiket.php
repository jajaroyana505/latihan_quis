<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
</head>
<body>
    <H1>Halaman tiket</H1>

    <form action="<?= base_url('tiket/simpan_tiket')?>" method="post">
        <table border="1">
            <tr>
                <td colspan="2">
                    <center>KERETA BSI</center>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Pembeli
                </td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>
            <tr>
                <td>
                    No. KTP
                </td>
                <td>
                    <input type="text" name="ktp" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Kode Kereta
                </td>
                <td>
                    <select name="kd_kereta" id="">
                        <option >--PILIH--</option>
                        <option value="ARB">ARB</option>
                        <option value="JES">JES</option>
                        <option value="KKD">KKD</option>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Pilih Jurusan
                </td>
                <td>
                    <select name="jurusan" id="">
                        <option >--PILIH--</option>
                        <option value="Cikampek-Tuparev">Cikampek-Tuparev</option>
                        <option value="Johat-Bypass">Johat-Bypass</option>
                        <option value="Klari-Badami">Klari-Badami</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Pelayanan
                </td>
                <td>
                    <input type="radio" name="jns_kelas" value="Bussines" id="">Bussines
                    <input type="radio" name="jns_kelas" value="Executive" id="">Axecutive
                </td>
            </tr>
            <tr>
                <td>
                    Jumlah Tiket
                </td>
                <td>
                    <input type="text" name="jml_tiket">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit">Simpan</button>
                        <button type="reset">Batal</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>
    <a href="<?= base_url('tiket') ?>">Kembali</a>
</body>
</html>