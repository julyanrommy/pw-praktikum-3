<?php

$nomor = array(1, 2, 3, 4, 5, 6);
$nama = array("Tepung", "Teh", "Susu", "Telur", "Garam", "Gula");
$berat = array(4, 1, 0.5, 5, 8, 5);
$stok = array(20, 5, 15, 0, 33, 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" type="text/css" href="yoo2.css"\>
		<meta charset="UTF-8">
		<h1> Warung Pak Joy </h1>
</head>

<body>

    <table class="tabel" border='8';">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(kg)</th>
            <th>Berat(g)</th>
            <th>Berat(mg)</th>
            <th>Berat(liter)</th>
            <th>Stok</th>
        </tr>
		
        <?php for ($i=0; $i <6; $i++) { ?>
        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] *1000; ?> </td>
            <td> <?php echo $berat[$i] *1000000; ?> </td>
            <td> <?php echo "(-)"; ?> </td>
            <td><?php if ($stok[$i] == 0 ){
            echo "kosong";
            }
            else {
                echo $stok[$i];
            }?>
            </td>
        </tr>
        <?php } ?>   
	</table>

</body>
</html>