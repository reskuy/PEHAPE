<?php

$kata="purwakerta";
echo strReplace($kata,"a","o"); //jalankan fungsi
function strReplace($kata,$toReplace,$replacement)
{
    if(substr_count($kata, $toReplace))
    {
        $array = explode($toReplace,$kata);
        return implode($replacement, $array);
    }
}
?>