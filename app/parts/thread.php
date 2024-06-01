<?php
include_once("./app/database/connect.php");

// コメントをデータベースに追加するファンクション
include("app/functions/comment_add.php");

// コメントをデータベースから取得するファンクション
include("app/functions/comment_get.php");
?>


<div class="threadWrapper">
    <div class="childWrapper">
        <div class="treadTitle">
            <span>【タイトル】</span>
            <h1>2ちゃんねる掲示板を作ってみた</h1>
        </div>
        <?php include("app/parts/validation.php"); ?>
        <!-- コメントセクション -->
        <?php include("app/parts/commentSection.php"); ?>

        <!-- フォームセクション -->
        <?php include("app/parts/commentForm.php"); ?>

    </div>
</div>