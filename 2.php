<?php
$d1 = "2019-11-01";
$d2 = "2019-11-05";
$pecah = explode("-", $d1);
$thn = $pecah[0];
$bln = $pecah[1];
$tgl = $pecah[2];
$i = 0;
$sum = 0;
do {
   $tanggal = date("Y-m-d", mktime(0, 0, 0, $bln, $tgl+$i, $thn));
   if (date("l", mktime(0, 0, 0, $bln, $tgl+$i, $thn)))
   {
     $sum++;
     echo $tanggal."<br>";
   } 	 
   $i++;
}
while ($tanggal != $d2);   
echo "<p>hari antara ".$d1." - ".$d2." adalah: ".$sum."</p>";

?>
