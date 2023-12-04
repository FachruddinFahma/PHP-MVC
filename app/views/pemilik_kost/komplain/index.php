<head>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/komplain.css">
</head>
<section id="komplain" class="content">
    <table class="table table-hover small" id="dataKomplain">
        <thead>
            <tr>
                <th scope="col">ID Komplain</th>
                <th scope="col">Nama User</th>
                <th scope="col">Nama Kamar</th>
                <th scope="col">Kategori Komplain</th>
                <th scope="col">Jenis Komplain</th>
                <th scope="col">Keterangan Komplain</th>
                <th scope="col">Tanggal Komplain</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
            foreach ($data['komplain'] as $komplain) :
            ?>
            <tr>
                <td><?php echo $komplain['id_komplain']; ?> </td>
                <td><?php echo $komplain['nama_lengkap']; ?> </td>
                <td><?php echo $komplain['nama_kamar']; ?></td>
                <td><?php echo $komplain['jenis_komplain']; ?></td>
                <td><?php echo $komplain['tipe_komplain']; ?></td>
                <td><?php echo $komplain['deskripsi_komplain']; ?></td>
                <td><?php echo $komplain['tggl_komplain']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>