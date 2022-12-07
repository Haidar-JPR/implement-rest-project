<?php
include './conn/conn.php';
$sql = "SELECT * FROM mhs";
$query = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Implement Rest</title>
</head>

<style>
    body{
        background-color: #495579;
    }
</style>

<body class="mx-5">
    <button onclick="showData()" type="button" class="btn btn-dark mt-5 me-2">Show</button>
    <a href="./form_input_data.php" class="btn btn-success mt-5">Tambah Data</a>
    <table class="table table-dark table-striped text-center mt-4">
        <thead>
            <tr>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <!-- Selec Conn -->
        <?php

        if (mysqli_num_rows($query) > 0) { ?>
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $data["npm"] ?></td>
                        <td><?php echo $data["nama"] ?></td>
                        <td><?php echo $data["alamat"] ?></td>
                        <td><?php echo $data["email"] ?></td>
                        <td><?php echo $data["gender"] ?></td>
                        <td>
                            <a href="form_edit_data.php?npm=<?php echo $data["npm"] ?>" class="btn btn-info me-3">Edit</a>
                            <a href="./query/delete_data.php?npm=<?php echo $data["npm"] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        <?php } ?>
    </table>
</body>
<script>
    function showData() {
        window.location.reload();
    }
</script>

</html>