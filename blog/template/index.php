<?php include "header.php"; ?>
<div class="row mt-3 ml-6">

    <!--div class="col-9"-->
    <div class="col-12">
        <?php if ($render["articles"]): ?>
            <?php foreach ($render["articles"] as $article): ?>
                <div class="jumbotron">
                    <h2 class="text-center"><?php echo $article["title"]?></h2>
                    <hr class="my-4">
                    <p>
                        <?php echo mb_substr($article["content"],0,140)?>
                    </p>
                    <div class="float-right "><a href="article.php?id=<?php echo $article["id"] ?>" >查看详情</a></div>
                </div>

            <?php endforeach;?>
        <?php else: ?>
            <section>
                当前没有文章
            </section>
        <?php endif?>
    </div>

<?php// include "rightbar.php"?>
</div>



<?php include "footer.php" ?>