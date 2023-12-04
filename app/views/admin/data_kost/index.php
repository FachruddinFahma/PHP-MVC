<<!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/data-user.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <section id="home" class="content">
            <div id="container-button" class="w-full">
                <div id="container-button-sudahVerifikasi">
                    <h4 id="button-sudahVerifikasi">Kost Sudah Diverifikasi</h4>
                    <span class="line-active"></span>
                </div>
                <div id="container-button-belumVerifikasi">
                    <h4 id="button-belumVerifikasi">Kost Belum Diverifikasi</h4>
                    <!-- <span class="line-active"></span> -->
                </div>
            </div>
            <div id="line">
                <span class="line-border"></span>
                <span class="line-bold"></span>
            </div>
            <div class="col-md-8e p-5">
                <div class="card-body bg-white p-4" style="border-radius: 18px;">



                    <table class="table table-hover small" class="dataDiverifikasi" id="tableVerifikasi">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Jumlah Kamar</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>