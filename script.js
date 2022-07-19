$(document).ready(function() {
    //sembunyikan form kab, kec, des

    $("#form-kab").hide();
    $("#form-kec").hide();
    $("#form-des").hide();

    //ambil data kabupaten ketika provinsi terpilih

    $('body').on("change", "#form-prov", function() {
        let id = $(this).val();
        let data = "id="+id+"&data=kabupaten";
        $.ajax({
            type: 'POST',
            url: "get-daerah.php",
            data: data,
            success: function(hasil) {
                $("#form-kab").html(hasil);
                $("#form-kab").show();
                $("#form-kec").hide();
                $("#form-des").hide();
            }
        });
    });

    //ambil data kecamatan ketika kabupaten terpilih

    $('body').on("change", "#form-kab", function() {
        let id = $(this).val();
        let data = "id="+id+"&data=kecamatan";
        $.ajax({
            type: 'POST',
            url: "get-daerah.php",
            data: data,
            success: function(hasil) {
                $("#form-kec").html(hasil);
                $("#form-kec").show();
                $("#form-des").hide();
            }
        })
    })

    //ambil data desa ketika kecamatan terpilih

    $('body').on("change", "#form-kec", function() {
        let id = $(this).val();
        let data = "id="+id+"&data=desa";
        $.ajax({
            type: 'POST',
            url: "get-daerah.php",
            data: data,
            success: function(hasil) {
                $("#form-des").html(hasil);
                $("#form-des").show();
            }
        })
    })
});