    <head>
        <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/landing_page.css">
        <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/jelajah.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- LINK ICON J-KOS -->
        <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
        <title>Jelajah Kost</title>
    </head>

    <body>
        <nav>
            <div class="title-navbar">
                <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
            </div>
            <div class="link-navbar">
                <ul>
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Testimoni</a>
                    <a href="">Cari Kost</a>
                    <a href="" class="link-login">Masuk</a>
                </ul>
            </div>
        </nav>


        <section id="jelajah">
            <div class="menu-jelajah">
                <div class="container-kategori-kost">
                    <p>Tipe Kost</p>
                    <select name="option" id="kategori-kost">
                        <option value="harian">Harian</option>
                        <option value="bulanan">Bulanan</option>
                        <option value="3bulanan">3 Bulanan</option>
                        <option value="6bulanan">6 Bulanan</option>
                        <option value="tahunan">Tahunan</option>
                    </select>
                </div>
                <div class="container-lokasi-kost">
                    <p>Pilih Lokasi</p>
                    <select name="option" id="lokasi-kost">
                        <option value="semua">Semua Daerah</option>
                        <option value="Kaliwates">Kaliwates</option>
                        <option value="Sumbersari">Sumbersari</option>
                        <option value="Patrang">Patrang</option>
                        <option value="Arjasa">Arjasa</option>
                        <option value="Jelbuk">Jelbuk</option>
                        <option value="Pakusari">Pakusari</option>
                        <option value="Sukowono">Sukowono</option>
                        <option value="Kalisat">Kalisat</option>
                        <option value="Ledokombo">Ledokombo</option>
                        <option value="Sumberjambe">Sumberjambe</option>
                        <option value="Mayang">Mayang</option>
                        <option value="Silo">Silo</option>
                        <option value="Mumbulsari">Mumbulsari</option>
                        <option value="Tempurejo">Tempurejo</option>
                        <option value="Rambipuji">Rambipuji</option>
                        <option value="Panti">Panti</option>
                        <option value="Sukorambi">Sukorambi</option>
                        <option value="Ajung">Ajung</option>
                        <option value="Jenggawah">Jenggawah</option>
                        <option value="Tanggul">Tanggul</option>
                        <option value="Semboro">Semboro</option>
                        <option value="Sumberbaru">Sumberbaru</option>
                        <option value="Bangsalsari">Bangsalsari</option>
                        <option value="Kencong">Kencong</option>
                        <option value="Jombang">Jombang</option>
                        <option value="Umbulsari">Umbulsari</option>
                        <option value="Gumukmas">Gumukmas</option>
                        <option value="Puger">Puger</option>
                        <option value="Balung">Balung</option>
                        <option value="Wuluhan">Wuluhan</option>
                        <option value="Ambulu">Ambulu</option>
                    </select>

                </div>
                <div class="container-rentang-kost">
                    <p>Rentang Harga</p>
                    <div class="input-rentang-kost">
                        <input type="text" placeholder="Rp 0" name="harga-awal" id="input-harga-awal">
                        <p> - </p>
                        <input type="text" placeholder="Rp 3,000,000" name="harga-akhir" id="input-harga-akhir">
                        <button>Cari</button>
                    </div>
                </div>
            </div>
            <div class="content-kost">
                <div id="kumpulan-card-kost">
                    <?php foreach ($data['jelajah'] as $kost) : ?>
                        <?php if ($kost['status'] === 'AKTIF') : ?>
                            <a href="http://localhost/PHP-MVC/public/kamar_user/kamar/<?php echo $kost['id_kost'] ?>" class="card-kost">
                                <div class="foto-kost">
                                    <img class="gambar-kost" src="<?php echo 'http://localhost/PHP-MVC/public/foto/' . $kost['main_foto']; ?>" alt="">
                                </div>
                                <div class="content-card-kost">
                                    <div class="top-content-kost">
                                        <p class="kategori-kost"><?php echo $kost['jenis_kost'] ?></p>
                                        <p><i class="ri-star-fill"></i> 4.5</p>
                                    </div>
                                    <p class="nama-kost"><?php echo $kost['nama_kost'] ?></p>
                                    <div class="location-kost">
                                        <i class="ri-map-pin-2-fill"></i>
                                        <p><?php echo $kost['alamat'] ?></p>
                                    </div>
                                    <div class="harga">
                                        <p>Rp 300,000<span>/ Bulan</span></p>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <footer>
            <div class="top-footer">
                <div class="left-footer">
                    <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
                    <p>Our vision is to provide convenience and help increase your sales business.</p>
                    <div class="kumpulan-medsos">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-facebook-circle-fill"></i>
                    </div>
                </div>
                <div class="right-footer">
                    <div class="content-right-footer">
                        <p class="judul-right-footer">About</p>
                        <p>How it works</p>
                        <p>Featured</p>
                        <p>Partnership</p>
                        <p>Bussiness Relation</p>
                    </div>
                    <div class="content-right-footer">
                        <p class="judul-right-footer">Comunity</p>
                        <p>Event</p>
                        <p>Blog</p>
                        <p>Partnership</p>
                        <p>Bussiness Relation</p>
                    </div>
                    <div class="content-right-footer">
                        <p class="judul-right-footer">Sosial</p>
                        <p>How it works</p>
                        <p>Featured</p>
                        <p>Partnership</p>
                        <p>Bussiness Relation</p>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>©2023 J-Kost. All rights reserved</p>
                <div class="right-bottom-footer">
                    <p>Privacy & Policy</p>
                    <p>Terms & Condition</p>
                </div>
            </div>
        </footer>
    </body>

    </html>