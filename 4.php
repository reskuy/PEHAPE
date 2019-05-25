<style type="text/css">
    * { font-family: Consolas; }
</style>

<?php

function pola($x)
{
    if ($x % 2 == 0)
    {
   echo "";
        return;
    }

    for ($r = 0; $r < $x; $r++)
    { 
        for ($c = 0; $c < $x; $c++)
        {
            if ($r == 0 || $r == ($x - 1))
            {
                echo " X ";
            }

            elseif($c == floor($x/2))
            {
                echo " X ";
            }

            else
            {
                echo " = ";
            }
        } ?>
        <br>
    <?php }
}
?>
 <?= pola(6); ?> <br>

 <?= pola(7); ?> <br>

 <?= pola(9); ?>
