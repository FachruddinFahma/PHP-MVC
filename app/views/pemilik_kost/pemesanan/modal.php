<!-- Modal -->
<div class="modal fade" id="staticBackdrop<?= $pesananMasuk['id_pemesanan'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="rounded-circle mt-5 img-fluid mx-auto d-block " style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;" src="<?php echo BASEURL . 'bukti_transfer/' . $pesananMasuk['bukti_tf']; ?>" alt="">
                <div class="container">
                    <p><B>ID Pemesanan : </B><?= $pesananMasuk['id_pemesanan'] ?></p>
                    <p><b>Nama Kamar : </b><?= $pesananMasuk['nama_kamar'] ?></p>
                    <p><b>Nama Penyewa : </b><?= $pesananMasuk['nama_lengkap'] ?></p>
                    <p><B>Tanggal Pemesanan : </B><?= $pesananMasuk['tggl_pemesaan'] ?></p>
                    <p><b>Tanggal Masuk : </b><?= $pesananMasuk['tggl_masuk'] ?></p>
                    <p><b>Tanggal Keluar : </b><?= $pesananMasuk['tggl_keluar'] ?></p>
                    <p><b>Harga : </b><?= $pesananMasuk['harga'] ?></p>
                    <p><b>Kategori : </b><?= $pesananMasuk['kategori'] ?></p>
                    <p><b>Metode Pembayaran : </b><?= $pesananMasuk['metode_pembayaran'] ?></p>
                    <p><b>Status : </b><?= $pesananMasuk['status'] ?></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>