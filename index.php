<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2ちゃんねる掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- ヘッダー -->
    <?php include("app/parts/header.php"); ?>

    <!-- validationチェック -->
    <?php include("app/parts/validation.php"); ?>

    <!-- スレッドエリア -->
    <?php include("app/parts/thread.php"); ?>

</body>

</html>