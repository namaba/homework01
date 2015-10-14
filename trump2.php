<?php
define('TRUMP_RANK_MAX', 13);

$suite = array('ハート','くらぶ','すぺーど','だいや');

for ( $i = 0 ; $i < count($suite); $j++) {
	for ($i = 0; $i < 13; $i++) {
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
