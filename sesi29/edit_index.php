<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Supplier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Edit Data Pelanggan</h3>
                <?php
                include("connection.php");

                $id = $_GET["id"];

                $pelanggan = mysqli_query($connection, "SELECT * FROM pelanggan WHERE id = '$id' ");

                foreach ($pelanggan as $pelanggan) {
                    $nama = $pelanggan['nama'];
                    $jenis_kelamin = $pelanggan['jenis_kelamin'];
                    $telpon = $pelanggan['telpon'];
                    $alamat = $pelanggan['alamat'];
                    $tanggal_lahir = $pelanggan['tanggal_lahir'];
                }
                ?>
                <form action="proses_edit_index.php?id=<?php echo $id; ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table class="table">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" required="" autocomplete="off"
                                    value="<?php echo $nama; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jenis Kelamin
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" required="" autocomplete="off"
                                    value="<?php echo $jenis_kelamin; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telpon
                            </td>
                            <td>
                                <input type="number" name="telpon" class="form-control" required=""
                                    value="<?php echo $telpon; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea class="form-control" name="alamat" rows="5"
                                    required=""><?php echo $alamat; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal Lahir
                            </td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" required=""
                                    autocomplete="off" value="<?php echo $tanggal_lahir; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>