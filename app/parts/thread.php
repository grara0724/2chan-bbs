<?php

// コメントをデータベースに追加するファンクション
include("app/functions/comment_add.php");



// スレッドをデータベースから取得するファンクション
include("app/functions/thread_get.php");
?>

<?php foreach ($thread_array as $thread) : ?>
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="treadTitle">
                <span>【タイトル】</span>
                <h1><?php echo $thread["title"] ?></h1>
            </div>
            <?php include("app/parts/validation.php"); ?>
            <!-- コメントセクション -->
            <?php include("app/parts/commentSection.php"); ?>

            <!-- フォームセクション -->
            <?php include("app/parts/commentForm.php"); ?>

        </div>
    </div>
<?php endforeach; ?>