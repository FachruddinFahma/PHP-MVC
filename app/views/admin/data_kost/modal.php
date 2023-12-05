<!-- Modal -->
<div class="modal fade" id="staticBackdrop<?= $kost['id_kost'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <img class="rounded-circle mt-5 img-fluid mx-auto d-block " style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;" src="<?php echo BASEURL . 'qris/' . $kost['foto_qris']; ?>" alt="">
                <div class="container">
                    <p><B>ID Kost: </B><?= $kost['id_kost'] ?></p>
                    <p><b>Nama Kost: </b><?= $kost['nama_kost'] ?></p>
                    <p><b>Jenis Kost: </b><?= $kost['jenis_kost'] ?></p>
                    <p><B>Fasilitas Kost: </B><?= $kost['fasilitas_kost'] ?></p>
                    <p><b>Peraturan Kost: </b><?= $kost['peraturan_kost'] ?></p>
                    <p><b>Latitude: </b><?= $kost['latitude'] ?></p>
                    <p><b>Longitude: </b><?= $kost['longitude'] ?></p>
                    <p><b>Alamat: </b><?= $kost['alamat'] ?></p>
                    <p><b>Jenis Bank: </b><?= $kost['jenis_bank'] ?></p>
                    <p><b>Nomor Rekening: </b><?= $kost['no_rekening'] ?></p>
                    <p><b>Nama Rekening: </b><?= $kost['nama_rekening'] ?></p>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>