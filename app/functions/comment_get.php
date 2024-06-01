<?php

//comment_arrayというarray型の配列を用意
$comment_array = array();

// コメントデータをテーブルから取得
// $sqlにデータベースからとってきたデータを保持
$sql = "SELECT * FROM comment";
// pdoオブジェクトのprepareメソッドを使ってステートメントを準備する
$statement = $pdo->prepare($sql);
$statement->execute();

$comment_array = $statement;
// var_dump($comment_array->fetchAll());