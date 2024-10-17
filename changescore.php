<?php
function sumall()
{
$sumvalues = func_get_arg();
$sumvalues = array_sum($sumvalues)
echo"$sumvalues";
return $sumvalues;
}
$sumvar = sumall (2,3,4,5,1)
$avg = $sumvar/5;
echo "$avg";