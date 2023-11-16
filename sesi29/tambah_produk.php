<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Produk</h3>
                <form action="proses_tambah_produk.php" method="post">
                    <table class="table">
                        <tr>
                            <td >
                                Kode Produk
                            </td>
                            <td>
                                <input type="number" name="kode_produk" id="kode_produk" class="form-control"
                                    required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Produk
                            </td>
                            <td>
                                <input type="text" name="nama_produk" class="form-control" required=""
                                    autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Harga
                            </td>
                            <td>
                                <input type="number" name="harga" class="form-control" required"">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Stok
                            </td>
                            <td>
                                <input type="number" name="stok" class="form-control" required"">
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>

</body>

</html>