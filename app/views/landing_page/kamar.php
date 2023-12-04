<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/detail_kamar.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/daftar-kamar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <title><?php echo $data['judul']; ?></title>
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="<?php echo BASEURL; ?>image/logo-jkost.png" alt="">
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

    <section id="detail_kamar">
        <div class="halaman">
            <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Daftar Kamar</p>
        </div>
        <div id="kumpulan-foto-kamar">
            <?php
                $mainFoto = BASEURL . 'foto/' . ($data['foto_kost']['foto_kamar'][0] ?? '');
            ?>
            <img class="main-foto" src="<?= $mainFoto ?>" alt="">
            <div class="right-foto-kamar">
                <?php
                // Memastikan foto_kamar ada dan memiliki setidaknya 2 elemen
                if (isset($data['foto_kost']['foto_kamar']) && count($data['foto_kost']['foto_kamar'])) {
                    // Mengambil foto dengan index 1 dan 2
                    $foto_1 = $data['foto_kost']['foto_kamar'][1];
                    $foto_2 = $data['foto_kost']['foto_kamar'][2];
                ?>
                <img src="<?php echo BASEURL; ?>foto/<?php echo $foto_1; ?>" alt="">
                <img src="<?php echo BASEURL; ?>foto/<?php echo $foto_2; ?>" alt="">
                <?php
                } else {
                    echo "Tidak cukup foto untuk ditampilkan.";
                }
                ?>
            </div>
        </div>
        <div id="maps-kost">
            <?php if (!empty($data['kost'])) : ?>
            <iframe
                src="https://maps.google.com/maps?q=<?= $data['kost']['latitude'] ?>,<?= $data['kost']['longitude'] ?>&hl=es;z=14&amp;output=embed"
                width="100%" height="350" style="border:0; margin-top:20px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <?php else : ?>
            <p>No kost data available.</p>
            <?php endif; ?>
        </div>

        <div id="content-kamar">
            <h1>Daftar Kamar</h1>
            <div id="kumpulan_kamar">
                <?php foreach ($data['kamar'] as $kamar) : ?>
                <a href="<?php echo BASEURL . 'detail_kamar/' . $kamar['id_kamar']; ?>" class="card-kamar">
                    <div class="foto-kamar">
                        <img class="gambar-kost" src="
                                <?php echo BASEURL . 'foto/' . $kamar['main_foto']; ?>" alt="">
                    </div>
                    <div class="content-card-kamar">
                        <p class="nama-kost"><?php echo $kamar['nama_kamar']; ?></p>
                        <div class="fasilitas">
                            <i class="ri-router-line"></i>
                            <i class="ri-hotel-bed-fill"></i>
                            <i class="ri-battery-2-charge-fill"></i>
                            <i class="ri-router-line"></i>
                            <i class="ri-router-line"></i>
                        </div>
                        <div class="harga">
                            <p>Rp <?php echo $kamar['harga_bulanan']; ?><span>/ Bulan</span></p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="top-footer">
            <div class="left-footer">
                <img src="<?php echo BASEURL; ?>image/logo-jkost.png" alt="">
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