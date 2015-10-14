<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>trump</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
define('TRUMP_RANK_MAX', 13);

$suite = array('はーと','くらぶ','すぺーど','だいや');

for ( $j = 0 ; $j < count($suite); $j++) {
	for ($i = 0; $i < 13; $i++) {
		$num = trump_rank($i + 1);
		echo '<div class="trump"><h1></h1></div>'. $suite[$j] . $num . "\n"; 
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
?>
<div id="container">
	
	<div class="trump">
		<h1>
			J
		</h1>	
	</div><!--trump-->

</div><!--container-->


</body>
</html>