<section>
    <!-- foreachを使ってcomment_arrayのデータを繰り返し表示 -->
    <?php foreach ($comment_array as $comment) : ?>
        <article>
            <div class="wrapper">
                <div class="nameArea">
                    <span>名前:</span>
                    <p class="username"><?php echo $comment["username"]; ?></p>
                    <time class=post_date>：<?php echo $comment["post_date"]; ?></time>
                </div>
                <p class="comment"><?php echo $comment["body"]; ?></p>
            </div>
        </article>
    <?php endforeach ?>
</section>