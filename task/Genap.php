<?php
function tampilkan_angka_genap($mulai, $akhir) {

    if ($mulai % 2 != 0) {
        $mulai++; 
    }

    for ($i = $mulai; $i <= $akhir; $i += 2) {
        echo $i . " ";
    }
}


echo "Angka Genap dari 1 sampai 10: ";
tampilkan_angka_genap(1, 10);
?>
