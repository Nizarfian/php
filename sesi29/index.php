<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5">
                <a href="index.php"> Pelanggan </a> |
                <a href="supplier.php"> Supplier </a> |
                <a href="produk.php"> Produk </a>
            </div>
            <div class="col-md-12">
                <h1> Data Pelanggan </h1>

                <a href="tambah.php"> Tambah data</a>
                <table class="table table-dark">
                    <tr>
                        <td width="300px">Nama</td>
                        <td width="300px">Jenis Kelamin</td>
                        <td width="300px">Telpon</td>
                        <td width="300px">Alamat</td>
                        <td width="300px">Tanggal Lahir</td>
                        <td width="300px">Aksi</td>
                    </tr>
                    <?php

                    include "connection.php";

                    $query = mysqli_query($connection, "SELECT * FROM pelanggan");

                    ?>

                    <?php while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td>
                                <?php echo $data['nama']; ?>
                            </td>
                            <td>
                                <?php echo $data['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?php echo $data['telpon']; ?>
                            </td>
                            <td>
                                <?php echo $data['alamat']; ?>
                            </td>
                            <td>
                                <?php echo date("d/m/y", strtotime($data['tanggal_lahir'])) ?>
                            </td>
                            <td>
                                <a href="edit_index.php?id=<?php echo $data['id']; ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_index.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>