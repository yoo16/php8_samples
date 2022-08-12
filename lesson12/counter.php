<?php
// セッションの開始
session_start();

// セッションIDの更新
session_regenerate_id(true);

// セッションID
$session_id = session_id();

// セッションクリア
if (isset($_GET['is_clear'])) {
    unset($_SESSION['count']);
}

if (isset($_SESSION['count'])) {
    // セッションの「count」があれば、１増やす
    $_SESSION['count']++;
} else {
    // セッションの「count」がなければ
    $_SESSION['count'] = 1;
}

// データ保存
$file_path = "data/counter.txt";

if (empty($_SESSION['count'])) {
    // セッションがなかったら、ファイル読み込み
    $count = file_get_contents($file_path);
    if ($count > 0) $_SESSION['count'] = $count;
}

file_put_contents($file_path, $_SESSION['count']);

?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カウンター</title>
</head>

<body>
    <h2>カウンター</h2>
    <p><?= $_SESSION['count'] ?></p>

    <a href="counter.php">カウント</a>
    <a href="counter.php?is_clear=1">クリア</a>

    <h2>セッションID</h2>
    <p><?= $session_id ?></p>
    <p><?= $_COOKIE['PHPSESSID'] ?></p>
</body>

</html>