<?php
function addfive(&$num)
{
    $num = $num+5;

}
function addsix(&$n1)
{
    $n1=$n1+6;
}
$orignum =10;
addfive ($orignum);
echo "$orignum <br/>";
addsix($orignum);
echo "$orignum <br/>";
?>