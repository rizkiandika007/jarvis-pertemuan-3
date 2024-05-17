<?php 
$nilai1 = 5;
$nilai2 = 15;
if ($nilai1 == $nilai2) {
echo "Nilai 1 lebih besar dari  nilai 2" ;
}
elseif ($nilai1 > $nilai2) {
    echo "Nilai 1 lebih besar dari nilai 2";
}
else {
    echo "Jawban tidak diketahui";
}
echo "<br>";

echo date('Y-m-d');

$day = date('D');
echo "Hari ini adalah $day";

if ($day == "Sat") {
    echo "Kelas Jarvis Dimulai";

}
elseif ($day == "Mon") {
    echo "Kelas Jarvis Dimulai";

}
else {
    echo "Jawaban tidak diketahui";

}
?>