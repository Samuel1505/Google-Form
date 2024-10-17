<?php
$month = array();
$month['January'] = 31;
$month['February'] = 28;
$month['March'] = 31;
$month['April'] = 30;
$month['May'] = 31;
$month['June'] = 30;
$month['July'] = 31;
$month['August'] = 31;
$month['September'] = 30;
$month['October'] = 30;
$month['November'] = 30;
$month['December'] = 31;
echo "$month ['March] ";
foreach ($month as $arraylabel => $arrayvalue)
{
    echo $arraylabel."has" . $arrayvalue. "days";
    echo "<br/>"
}