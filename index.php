<?php
define('TRUMP_RANK_MAX', 13);

$suite = array('はーと','くらぶ','すぺーど','だいや');

for ($j = count($suite); 0 <= $j; $j--) {
	for ($i = TRUMP_RANK_MAX; $i >= 0; $i--) {
		$num = trump_rank($i + 1);
		echo $suite[$j] . $num . "\n";
	}
}

function trump_rank ($num){
	switch ($num){
	case 1:
		return 'A';
	  break;
	case 11:
		return 'J';
	  break;
	case 12:
		return 'Q';
	  break;
	case 13:
		return 'K';
	  break;
	default:
		return $num;
	}
}
