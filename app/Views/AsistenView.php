<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Daftar Asisten</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-15">
                <div class="mt-2 p-3 bg-secondary text-white rounded">
                    <h1>
                        <center><h1>Pendaftaran Asisten Praktikum</h1></center>
                    </h1>
                </div>

                <br>
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas Praktikum</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($asisten as $task) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $task['nim'] ?></td>
                                <td><?= $task['nama'] ?></td>
                                <td><?= $task['praktikum'] ?></td>
                                <td><?= $task['ipk'] ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="/asisten/simpan"><button type="submit" class="btn btn-secondary">Tambah</button></a>
                <a href="/asisten/update"><button type="submit" class="btn btn-secondary">Update</button></a>
                <a href="/asisten/delete"><button type="submit" class="btn btn-secondary">Delete</button></a>
                <a href="/asisten/search"><button type="submit" class="btn btn-secondary">Cari Data</button></a>
                <a href="/asisten/logout"><button type="submit" class="btn btn-secondary">Logout</button></a>
            </div>
            </div>
        </div>
    </div>
</body>

</html>