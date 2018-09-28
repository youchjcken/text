<?php
$numbers =array(1,2,3,4,5,6,7,8,9)
function ktsnt ($n)
{
	for ($x=2; $x <= $numbers ; $x++) { 
		if($n %2 ==0)
			return 0;
	}
	return 1;
}
    $a=hamkiemtra(8);
      if($a==0)
        echo ("lasonguyen to");
       else
        echo ("khong lasonguyen to");
?>