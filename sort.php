<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
    
       $nums = array(15,4,18,23,10);
      
echo '昇順にソートします。<br>';
sort($nums);
foreach ($nums as $key => $val) {
    echo $val.'<br>';
}
echo '降順にソートします。<br>';
rsort($nums);
foreach ($nums as $key => $val) {
    echo $val.'<br>';
}
        ?>
    </p>
</body>

</html>