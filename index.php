<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>trump</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
define('TRUMP_RANK_MAX', 13);
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
$suite = array('heart','clover','spade','diamond');?>

<?php
for ( $j = 0 ; $j < count($suite); $j++) :
	for ($i = 0; $i < 13; $i++) :
		$num = trump_rank($i + 1);
	?>
	<div class="trump <?php echo $suite[$j]; ?>">
		<h1><?php echo $num; ?></h1>
	</div>
<?php
	endfor;
endfor;

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