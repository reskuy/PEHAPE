<?php 
function hitung($ya)
{
    preg_match_all('/[aeiou]/i', $ya, $s);
    return count($s[0]);
}
$text = "Programmer";

echo $text; 
echo " huruf hidupnya : ";
print_r(hitung($text));


 ?>