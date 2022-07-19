<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>DROPDOWN PROVINSI</title>
    </head>
    <body>
        <h1>Dropdown Daerah Indonesia (pilihannya dari database)</h1>

        <select id="form-prov">
            <option value="">Pilih Provinsi</option>
            <?php
                $daerah = mysqli_query($koneksi, "SELECT kode, nama FROM wilayah_2022 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                while($d = mysqli_fetch_array($daerah)) {
            ?>
            <option value="<?php echo $d['kode'];?>"><?php echo $d['nama'];?></option>
            <?php
                }
            ?>
        </select>

        <select id="form-kab"></select>

        <select id="form-kec"></select>

        <select id="form-des"></select>

    <script src="jquery.js"></script>
    <script src="script.js"></script>
    </body>
</html>