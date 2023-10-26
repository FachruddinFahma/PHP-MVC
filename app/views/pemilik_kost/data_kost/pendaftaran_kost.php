<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white.png">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pendaftaran_kost.css">
    <title>Halaman Pnedaftaraan Kost</title>
</head>

<body>
    <div class="box">
        <div class="box-content">
            <form action="">
                <h1>Silahkan Lengkapi Data Kost anda</h1>
                <div class="form-group">
                    <div class="input">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kost</label>
                        <input type="text" class="form-control" id="">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Fasilitas Kost</label>
                        <textarea class="form-control" id="exampleTextarea" placeholder="Required example textarea" required></textarea>
                        <label for="staticEmail" class="col-sm-3 col-form-label">Peraturan Kost Kost</label>
                        <textarea class="form-control" id="exampleTextarea" placeholder="Required example textarea" required></textarea>
                    </div>
                    <div class="input">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Latitude</label>
                        <input type="text" class="form-control" id="">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Longitude</label>
                        <input type="text" class="form-control" id="">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="exampleTextarea" placeholder="Required example textarea" required></textarea>
                        <p>*keteranggan :</p>
                        <p>- Isi latitude dan longitude kost anda berada saat ini</p>
                        <p>- Isi alamat lengkap kost anda saat ini</p>
                    </div>
                    <button type="button" class="btn1" onclick="kembali()">Kembali</button>
                    <button type="button" class="btn2" onclick="selanjutnya()">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var visibleDiv = 0;

        function showDiv() {
            $(".input").hide();
            $(".input:eq(" + visibleDiv + ")").show();
        }

        function kembali() {
            if (visibleDiv > 0) {
                visibleDiv--;
            }
            showDiv();
        }

        function selanjutnya() {
            if (visibleDiv < $(".input").length - 1) {
                visibleDiv++;
            }
            showDiv();
        }

        showDiv();
    </script>
</body>

</html>