<table border="1">
    <tr style="background-color: aqua;">
        <th>Nomor</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<tr>";
            } else {
                echo "<tr style='background-color: gray;'>";
            }
                echo "<td>" . $i . "</td>";
                echo "<td>" . "Nama ke-" . $i . "</td>";
                echo "<td>" . "Kelas " . (10 - $i + 1) . "</td>";
                echo "</tr>";
        }
    ?>
</table>