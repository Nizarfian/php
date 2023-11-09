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
                <h3 class="mt-3">Edit Data Supplier</h3>
                <?php
                include("connection.php");

                $id = $_GET["id"];

                $suppliers = mysqli_query($connection, "SELECT * FROM supplier WHERE id = '$id' ");

                foreach ($suppliers as $supplier) {
                    $nama = $supplier['nama'];
                    $telpon = $supplier['telpon'];
                    $alamat = $supplier['alamat'];
                }
                ?>
                <form action="proses_edit.php?id=<?php echo $id; ?>" method="post">
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