<?php include 'header.php'; ?>

<?php   $_SESSION["flag"]=0;?>
<?php if ($render['articles']): ?>
    <?php foreach ($render['articles'] as $article): ?>
        <?php   $_SESSION["flag"]+=1; ?>
        <?php if($_SESSION["flag"]>5): ?>
        <section>
            <a href="#" style="margin-left: 600px;">查看更多</a>
        </section>
            <?php break; ?>
        <?php endif?>



        <section>
            <h1><?php echo $article['title'] ?></h1>
            <div class="excerpt">
                <?php echo mb_substr($article['content'], 0, 140) ?>...
            </div>
            <div class="more"><a href="article.php?id=<?php echo $article['id'] ?>" class="btn btn-primary">查看详情</a></div>
        </section>
    <?php endforeach;?>
<?php else: ?>
    <section>
        当前没有文章
    </section>
<?php endif?>
<?php include 'footer.php' ?>