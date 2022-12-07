<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<style>
    .container {
        display: grid;
        width: 300px;
    }
</style>

<body>
    <div class="container mt-5">
        <form action="./query/insert_data.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NPM</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="npm">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="email">
            </div>
            <div class="gl">
                <label for="gnder">Gender</label>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" value="L">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender" value="P">
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>