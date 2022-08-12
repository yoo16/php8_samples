<?php
//文字を表示
#文字を表示
/**
 * 文字を表示
 * 複数行のコメントができます。
 */
// echo "Hello, PHP!!";

// ドリンクの変数
$drink1 = "コーヒー";
$drink2 = "紅茶";
$drink3 = "ほうじ茶";

// 値段の変数
$price1 = 350;
$price2 = 450;
$price3 = 300;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>商品リスト</h2>
    <ul>
        <li><?= $drink1; ?></li>
        <li><?= $drink2; ?></li>
        <li><?= $drink3; ?></li>
    </ul>
    
</body>
</html>