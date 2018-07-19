<?php include 'header.php';?>

    <div class="jumbotron">
    <?php if (isset($render['article'])): ?>
        <h1 class="display-4 text-center"><?php echo $render['article']['title']; ?></h1>
        <p class="lead text-right">时间：<?php echo date('Y-m-d H:i:s', $render['article']['created'])?></p>
        <hr class="my-4">
        <p><?php echo nl2br($render['article']['content']); ?></p>
    <?php else: ?>
        文章不存在
    <?php endif?>
    </div>

<script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="50" src="src/canvas-nest.js"></script>

<?php include 'footer.php';?>
