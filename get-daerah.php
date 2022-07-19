<body>
<?php
    include 'koneksi.php';

    $data = $_POST['data'];
    $id = $_POST['id'];

    $n = strlen($id);

    if($n == 2){
        $m = 5;
    }else if($n == 5){
        $m = 8;
    }else{
        $m = 13;
    }
?>
<?php if($data == "kabupaten") { ?>
    Kabupaten/Kota
    <select id="form-kab">
        <option value="">Pilih Kabupaten/Kota</option>
        <?php
        $daerah = mysqli_query($koneksi, "SELECT kode, nama FROM wilayah_2022 WHERE LEFT(kode, '$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");

        while($d = mysqli_fetch_array($daerah)) {
        ?>
        <option value="<?php echo $d['kode'];?>"><?php echo $d['nama'];?></option>

        <?php } ?>
    </select>
<?php } ?>

<?php if($data == "kecamatan") { ?>
    Kecamatan
    <select id="form-kec">
        <option value="">Pilih kecamatan</option>
        <?php
        $daerah = mysqli_query($koneksi, "SELECT kode, nama FROM wilayah_2022 WHERE LEFT(kode, '$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");

        while($d = mysqli_fetch_array($daerah)) {
        ?>
        <option value="<?php echo $d['kode'];?>"><?php echo $d['nama'];?></option>

        <?php } ?>
    </select>
<?php } ?>

<?php if($data == "desa") { ?>
    Desa
    <select id="form-des">
        <option value="">Pilih Desa</option>
        <?php
        $daerah = mysqli_query($koneksi, "SELECT kode, nama FROM wilayah_2022 WHERE LEFT(kode, '$n')='$id' AND CHAR_LENGTH(kode)=$m ORDER BY nama");

        while($d = mysqli_fetch_array($daerah)) {
        ?>
        <option value="<?php echo $d['kode'];?>"><?php echo $d['nama'];?></option>

        <?php } ?>
    </select>
<?php } ?>