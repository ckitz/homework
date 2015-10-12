<?php
//need a loop function, need to subtract out excess and round
$inches=2000;
$feet=($inches/12);
$reminches=($inches%12);
$yards=($inches/36);
$remfeet=($yards%36);
$miles=($inches/63360);
$remyards=($inches%63360);

if($inches<12)
	{echo "00 0000:$inches";}
elseif($inches<36)
	{echo "00 00:$feet:$reminches";}
elseif($inches<63360)
	{echo "00 $yards:$remfeet:$reminches";}
elseif($seconds>=63360)
	{echo "$miles $remyards:$remfeet:$reminches";}
else
{echo "too far";}

?>