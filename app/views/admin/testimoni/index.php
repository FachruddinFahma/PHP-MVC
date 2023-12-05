<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section id="home" class="content">
        <div class="col-md-8e p-5">
            <div class="card-body bg-white p-4" style="border-radius: 18px;">
                <table class="table table-hover small" id="dataTestimoni">
                    <thead>
                        <tr>
                            <th scope="col">Id User</th>
                            <th style="width:650px" scope="col">Deskripsi Testimoni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['Testimoni'] as $d) : ?>
                            <tr>
                                <td><?= $d['id_user'] ?></td>
                                <td><?= $d['deskripsi_testi'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>
