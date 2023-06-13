<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Search</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="mt-2 p-3 bg-primary text-white rounded">

                    <center>
                        <h1>Cari Data</h1>
                    </center>

                </div>
                <form action="/asisten/search" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="key"><b>Search</b></label>
                        <input type="text" class="form-control" name="key">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" value="cari">Cari</button>
                </form>
                <?php
                if (!empty($hasil)) {
                    echo "<h1>Hasil Pencarian</h1>";
                    echo "Nama : " . $hasil["nama"];
                    echo "<br>Praktikum : " . $hasil['praktikum'];
                    echo "<br> IPK : " . $hasil['ipk'];
                }
                ?>
            </div>

        </div>
        <br>
        <a href='/asisten'><button type="submit" class="btn btn-primary" value="kembali">Kembali</button></a>
    </div>
    </div>
    </div>
</body>

</html>