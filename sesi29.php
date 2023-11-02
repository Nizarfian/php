<?php

    include "connection.php";

    $query = mysqli_query($connection, "SELECT * FROM pelanggan");

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td width="300px">Nama</td>
                <td width="300px">Jenis Kelamin</td>
                <td width="300px">Telpon</td>
                <td width="300px">Alamat</td>
            </tr>
            <?php while($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                </tr>
                <?php } ?>
        </table>
    </body>
    </html>