<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="<?php echo BASEURL; ?>image/logo-jkost.png" alt="">
        </div>
        <div class="link-navbar">
            <ul>
                <a href="<?php echo BASEURL; ?>landing_page#order">Home</a>
                <a href="<?php echo BASEURL; ?>landing_page#why-jkost">About</a>
                <a href="<?php echo BASEURL; ?>landing_page#order">Order</a>
                <a href="<?php echo BASEURL; ?>landing_page#testimoni">Testimoni</a>
                <a href="<?php echo BASEURL; ?>landing_page#kost">Kost</a>
                <a href="<?php echo BASEURL . 'login1' ?>" class="link-login"
                    <?php echo isset($_SESSION['id_user']) ? 'style="display: none;"' : ''; ?>>Masuk</a>

                <?php if (isset($_SESSION['id_user'])) : ?>
                <img src="<?php echo BASEURL . 'foto/' . $_SESSION['foto_user'] ?>" alt="" id="foto-nav-user">
                <?php endif; ?>

            </ul>
        </div>
    </nav>

    <section id="hero">
        <div class="hero-left">
            <p class="tagline animate__animated animate__fadeInLeft">Cari Kost Tanpa Ribet,<span> Semua Ada
                    Disini</span></p>
            <p class="deskripsi-hero animate__animated animate__fadeInLeft">Tingkatkan kenyamanan hidupmu dengan
                sentuhan ajaib di ujung jari, <span>temukan
                    kost impianmu di J-Kost!</span></p>
            <a href="#kost" class="smooth-scroll animate__animated animate__bounceInLeft">Cari Kost Sekarang</a>
        </div>
        <div class="hero-right">
            <img class="gambar1 animate__animated animate__fadeInRight"
                src="<?php echo BASEURL; ?>image/landing_img.png" alt="">
        </div>
    </section>

    <section id="why-jkost">
        <div class="title-why" data-aos="fade-down" data-aos-duration="1000">
            <h3>Kenapa harus <span>J-Kost</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, amet! consectetur adipisicing elit.
                Facilis, amet!</p>
        </div>
        <div id="kumpulan-icon-why">
            <div class="icon-why" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-icon-why">
                    <i class="ri-shake-hands-fill ic"></i>
                </div>
                <h3>Kemudahan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae?</p>
            </div>
            <div class="icon-why" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-icon-why">
                    <i class="ri-bar-chart-box-fill ic"></i>
                </div>
                <h3>Luas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae?</p>
            </div>
            <div class="icon-why" data-aos="fade-left" data-aos-duration="1000">
                <div class="bg-icon-why">
                    <i class="ri-money-dollar-circle-fill ic"></i>
                </div>
                <h3>Murah</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae?</p>
            </div>
            <div class="icon-why" data-aos="fade-left" data-aos-duration="1000">
                <div class="bg-icon-why">
                    <i class="ri-chat-smile-3-fill ic"></i>
                </div>
                <h3>User Friedly</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, recusandae?</p>
            </div>
        </div>
    </section>
    <div class="circle-pemanis"></div>
    <section id="fitur-unggulan">
        <div id="fiturunggulan-tulisan" data-aos="fade-right" data-aos-duration="1000">
            <h2>Mencari Kost Lebih Cepat, Praktis, dan Aman</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsum quae neque sed voluptatem dolorem
                illo, dolor minima veniam quo! sit amet consectetur adipisicing elit. Aliquam ipsum quae neque sed
                voluptatem dolorem illo, dolor minima veniam quo!</p>
            <div class="kumpulan-fiturunggulan">
                <div class="list-fitur">
                    <i class="ri-checkbox-circle-fill ic-fitur"></i>
                    <p>Costumer Support</p>
                </div>
                <div class="list-fitur">
                    <i class="ri-checkbox-circle-fill ic-fitur"></i>
                    <p>Harga Terjangkau</p>
                </div>
                <div class="list-fitur">
                    <i class="ri-checkbox-circle-fill ic-fitur"></i>
                    <p>Banyak Lokasi</p>
                </div>
            </div>
        </div>
        <div id="fiturunggulan-gambar" data-aos="fade-left" data-aos-duration="1000">
            <img src="<?php echo BASEURL; ?>image/kumpulan-card.png" alt="kumpulan card">
        </div>
    </section>
    <section id="order" data-aos="fade-down" data-aos-duration="3000">
        <div class="title-section-order">
            <h2>Bagaimana <b>cara order?</b></h2>
        </div>
        <div class="content-order">
            <div class="list-order">
                <div class="gambar-order">
                    <i class="ri-shopping-bag-3-fill ic-order"></i>
                </div>
                <p class="title-order title-order-after">Cari Kost</p>
                <p class="penjelasan-order">Pilih kost dan klik pesan kost sesuai dengan selera</p>
            </div>
            <div class="list-order list-order2">
                <div class="gambar-order">
                    <i class="ri-shopping-bag-3-fill ic-order"></i>
                </div>
                <p class="title-order title-order-after">Proses Pembayaran</p>
                <p class="penjelasan-order">Calon penyewa melakukan pembayaran melalui rekening/e-wallet</p>
            </div>
            <div class="list-order">
                <div class="gambar-order">
                    <i class="ri-shopping-bag-3-fill ic-order"></i>
                </div>
                <p class="title-order">Verifikasi Pembayaran</p>
                <p class="penjelasan-order">Pemilik kost melakukan verifikasi bukti pembayaran</p>
            </div>
        </div>
    </section>
    <section id="testimoni">
        <div class="title-section-testimoni">
            <h2 data-aos="fade-down" data-aos-duration="1000">Testimoni aplikasi kami</b></h2>
        </div>
        <div class="content-testimoni">
            <div id="kumpulan-card-testimoni">
                <<?php foreach ($data['testimoni'] as $testi): ?> <div class="card-testimoni" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                    <div class="profile-testimoni">
                        <div class="gambar-testimoni">
                            <img src="<?php echo BASEURL . 'foto/' . $testi['foto_user']; ?>" alt="">
                        </div>
                        <div class="nama-testimoni">
                            <p><b><?php echo $testi['nama_lengkap'];  ?></b></p>
                            <p class="jabatan-testimoni"><?php echo $testi['tggl_testi']; ?></p>
                        </div>
                    </div>
                    <div class="content-testimoni">
                        <p><?php echo $testi['deskripsi_testi']; ?></p>
                    </div>
                    <div class="rating-testimoni">
                        <!-- <i class="ri-star-fill ic-testimoni"></i>
                        <i class="ri-star-fill ic-testimoni"></i>
                        <i class="ri-star-fill ic-testimoni"></i>
                        <i class="ri-star-fill ic-testimoni"></i>
                        <i class="ri-star-fill ic-testimoni"></i> -->
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>
    <section id="kost">
        <div class="title-section-kost">
            <h2 data-aos="fade-right" data-aos-duration="1000">Terafiliasi dengan kost di Jember</h2>
            <p class="sub-deskripsi" data-aos="fade-left" data-aos-duration="1500">Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore e Lorem ipsum dolor sit amet, consectetur adipiscing </p>
            <div id="button-kost" data-aos="fade-up" data-aos-duration="2000">
                <div id="button-populer">
                    <p>Populer</p>
                </div>
                <div id="button-terbaru">
                    <p>Terbaru</p>
                </div>
            </div>
        </div>
        <div class="content-kost" data-aos="fade-up" data-aos-duration="2000">
            <div id="kumpulan-card-kost">
                <?php
                if (!empty($data['data_kost'])) {
                    foreach ($data['data_kost'] as $kost) {
                        if ($kost['status'] === 'AKTIF') {
                ?>
                <a href="<?php echo BASEURL; ?>kamar_user/kamar/<?php echo $kost['id_kost'] ?>" class="card-kost">
                    <div class="foto-kost">
                        <?php
                                    $data['data_kost']
                                    ?>
                        <img class="gambar-kost" src="<?php echo BASEURL . 'foto/' . $kost['main_foto']; ?>" alt="">
                    </div>
                    <div class="content-card-kost">
                        <div class="top-content-kost">
                            <p class="kategori-kost"><?php echo $kost['jenis_kost']; ?></p>
                            <p><i class="ri-star-fill"></i> 4.5</p>
                        </div>
                        <p class="nama-kost"><?php echo $kost['nama_kost']; ?></p>
                        <div class="location-kost">
                            <i class="ri-map-pin-2-fill"></i>
                            <p><?php echo $kost['alamat']; ?></p>
                        </div>
                        <div class="harga">
                            <p>Rp 300,000<span>/ Bulan</span></p>
                        </div>
                    </div>
                </a>
                <?php
                        }
                    }
                } else {
                    echo "Data kost tidak tersedia.";
                }
                ?>

            </div>
            <div id="bottom-card-kost">
                <a href="<?php echo BASEURL; ?>jelajah_kost/jelajah">Jelajahi selengkapnya</a>
            </div>
        </div>
    </section>
    <div class="circle-pemanis2"></div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    $(".smooth-scroll").on("click", function(event) {
        event.preventDefault();
        var targetId = $(this).attr("href");
        if ($(targetId).length) {
            $("html, body").animate({
                scrollTop: $(targetId).offset().top
            }, 800);
        }
    });

    //button kost terbaru dan terlaris
    $("#button-populer").click(function() {
        $(this).css({
            "background-color": "var(--blue)",
            "color": "white",
            "border-radius": "8px"
        });

        $("#button-terbaru").css({
            "background-color": "",
            "color": "var(--blue)",
            "border-radius": ""
        });
    });

    $("#button-terbaru").click(function() {
        $(this).css({
            "background-color": "var(--blue)",
            "color": "white",
            "border-radius": "8px"
        });

        $("#button-populer").css({
            "background-color": "var(--lightblue)",
            "color": "var(--blue)",
            "border-radius": ""
        });
    });

});
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

</html>