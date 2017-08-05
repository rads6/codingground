<?php
//$year= $_post($year);
 $year = readline("enter year:");
$q=0;
$r=0;

 
 $q = (int)($year/100);
 $r = $year%100;

 
 if($r==0)
 {
  $year= $q;
 }
elseif($r>0)
{
 $year= ($q+1);
 
}
print  $year;
