<?php
$strs = str_split($str, 1);
foreach($strs as $char)
{
	$char16 = bin2hex($char)."\n"; echo $char16;
}
