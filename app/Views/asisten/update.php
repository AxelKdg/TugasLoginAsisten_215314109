<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Update</title>
</head>

<body>
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-10">
                <div class="mt-2 p-3 bg-primary text-white rounded">
                    <h1>UPDATE ASISTEN PRAKTIKUM</h1>
                </div>
                <hr>
                <form action="/asisten/update" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nim"><b>NIM</b></label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama"><b>Nama</b></label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="praktikum"><b>Praktikum</b></label>
                        <input type="text" class="form-control" name="praktikum">
                    </div>
                    <div class="form-group">
                        <label for="ipk"><b>IPK</b></label>
                        <input type="text" class="form-control" name="ipk">
                    </div>
                    <br>
                    <button type="submit" name="" class="btn btn-primary" value="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

