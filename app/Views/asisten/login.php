<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="mt-2 p-3 bg-primary text-white rounded">
                    <h1>
                        <center>
                            <h1>Login</h1>
                        </center>
                    </h1>
                </div>
                <form action="/asisten/check" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="username"><b>Username</b></label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd"><b>Password</b></label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" value="Login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<!-- User : <input type="text" name="usr"><br>
        Password : <input type="password" name="pwd"><br>
        <input type="submit" value="Login"> -->