<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/detail_kamar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Halaman Kamar</title>
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

    <section id="detail_kamar">
        <div class="halaman">
            <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Kamar 3</p>
        </div>
        <div id="kumpulan-foto-kamar">
            <img class="main-foto" src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            <div class="right-foto-kamar">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            </div>
        </div>
        <div id="content-kamar">
            <div class="right-content-kamar">
                <div class="judul-kost">
                    <h2>Kost Marno Kamar 3</h2>
                    <p> <i class="ri-map-pin-2-fill"></i> Jalan Mastrib V - Sumbersari</p>
                </div>
                <div class="pengelola-kost">
                    <h5>Dikelola Oleh: </h5>
                    <!-- <div class="card-pengelola">
                        <img src="http://localhost/PHP-MVC/public/foto/pemilik-kost.jpeg" alt="">
                        <div class="nama-pengelola">
                            <p class="nama">Nico Flassy</p>
                            <p>Owner Kost Flassy</p>
                        </div>
                    </div> -->
                </div>
                <div class="fasilitas-kamar">
                    <p class="judul-fasilitas">Fasilitas Kamar</p>
                    <div class="kumpulan-fasilitas">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                        ?>
                            <p><i class="ri-hotel-bed-fill"></i> Kamar</p>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="spesifikasi-kamar">
                    <p class="judul-fasilitas">Spesifikasi Kamar</p>
                    <div class="kumpulan-fasilitas">
                        <p><i class="ri-hotel-bed-fill"></i> Ukuran 3 x 4 Meter</p>
                    </div>
                </div>

                <div class="peraturan-kost">
                    <p class="judul-fasilitas">Peraturan Kost</p>
                    <div class="kumpulan-fasilitas">
                        <p><i class="ri-hotel-bed-fill"></i> Tamu tidak boleh menginap</p>
                        <p><i class="ri-hotel-bed-fill"></i> Pagar kost harus selalu terkunci</p>
                        <p><i class="ri-hotel-bed-fill"></i> Tidak boleh membawa teman</p>
                        <p><i class="ri-hotel-bed-fill"></i> Tiap kamar hanya bisa diisi 1 orang</p>
                        <p><i class="ri-hotel-bed-fill"></i> Tidak boleh membawa obat terlarang</p>
                    </div>
                </div>
            </div>
            <div class="left-content-kamar">
                <div class="harga-kost">
                    <p>Diskon 100rb <span>Rp 1.350.000</span></p>
                    <h2>Rp 1.250.000 <span>(bulan pertama)</span></h2>
                    <div class="input-rentang-kost">
                        <input type="text" placeholder="Rp 0" name="harga-awal" id="input-harga-awal">
                        <p> - </p>
                        <input type="text" placeholder="Rp 3,000,000" name="harga-akhir" id="input-harga-akhir">
                    </div>
                    <a href="http://localhost/PHP-MVC/public/landing_page/pemesanan">Pesan Sekarang</a>
                </div>
                <div class="review-kost">
                    <p class="grand-review"><i class="ri-star-fill"></i> 4.5 (8 Review)</p>
                    <div class="sub-review">
                        <p>Kebersihan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Kenyamanan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Keamananan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Fasilitas</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                </div>
                <div class="maps-kost">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2472.7281577870117!2d113.71830859203426!3d-8.170001002409187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cd94262967%3A0xb7043f397fd93496!2sKost%20Putri%20B3!5e0!3m2!1sid!2sid!4v1699505407027!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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