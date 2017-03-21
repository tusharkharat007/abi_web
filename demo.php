<?php 

$r = 'X';
$n = 40;
$e = 52;
$c = $e - $n;

$html = '';
for ($i=0; $i <= $c ; $i++) { 
	$val = $n++;
	$html .= '<div class="available"><a href="javascript:void(0);" id="'.$r.$val.'" data-value="'.$r.$val.'" onclick=bookSeat(this);>'.$val.'</a></div><br>';
}

echo '<pre>';
echo htmlspecialchars($html);
echo '</pre>';


?>