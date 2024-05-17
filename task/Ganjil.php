<?php
function tampilkan_angka_ganjil($mulai, $akhir) {
    if ($mulai % 2 == 0) {
        $mulai++; 
    }
    for ($i = $mulai; $i <= $akhir; $i += 2) {
        echo $i . " 1";
    }
}
echo "Angka Ganjil dari 1 sampai 10: ";
tampilkan_angka_ganjil(1, 10);
?>
