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
function trump_card($num){
    echo "{{ハート}} の {{A}} です";
}
?>
<?php
//カードの数値をランダムにする
$num=rand(1,52);
$num1=rand(1,52);

echo "$num \n";
echo get_suite($num);
echo get_number($num);

//カードの模様を決める
function get_suite($num){
    $index = floor($num / 13);
    $suite = array('spade','heart','clover','diamond');
    return $suite[$index];
}

//カードの数値を決める
function get_number($num){
    $hoge = $num % 13;   
    return trumpnized($hoge + 1);
}

function trumpnized($num){
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

function total_number($num){
    $hoge = ($num % 13)+1;
    return  replace_number($hoge);
}

function replace_number($num){
    switch ($num) {
        case 11:
        case 12:
        case 13:
        return 10;
            break;
        default:
            return $num;
    }
}






?>  
<?php
$suite = array('heart','clover','spade','diamond');?>


<div id="container">
    
    <div class="trump <?php echo get_suite($num)?>">
        <h1>
        <?php
        echo get_number($num);
        ?>
        </h1>   
    </div><!--trump-->

   <div class="trump <?php echo get_suite($num1)?>">
        <h1>
        <?php
        echo get_number($num1);
        ?>
        </h1>   
    </div>
    <div class="total">
        

        <h1>total <?php echo total_number($num) + total_number($num1) ?></h1>

    </div><!--total-->
</div> <!--container-->

</body>
</html>




    



