<?php include "header.php";


?>

    <div class="mt-3 jumbotron ">
    <?php if (isset($render["article"])): ?>
        <h1 class="display-4 text-center"><?php echo $render["article"]["title"]; ?></h1>
        <p class="lead text-right">时间：<?php echo  $render["article"]["created"]?></p>
        <hr class="my-4">
        <p><?php echo nl2br($render["article"]["content"]); ?></p>
    <?php else: ?>
        文章不存在
    <?php endif?>
    </div>

    <div class="list-group">
        <?php if (isset($render["article"]["comment"])): ?>
            <?php for($i=0 ; $i<count($render["article"]["comment"]) ; $i++): ?>
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between ">
                       <p><?php echo ($i+1)."楼：".$render["article"]["comment"][$i];?></p>        
                    </div>
                    
                </div>

            <?php endfor;?>
        <?php endif?>
    </div>

    <form action="comment.php?id=<?php echo $render["article"]["id"]?>" method="post">
               
            <div class="form-group">
                <textarea class="form-control" id="article_content" name="comment" placeholder="评论内容" style="height:100px;" ></textarea>
            
            </div>

            <button type="submit" class="btn btn-success ">发表</button>
    </form>


<script type="text/javascript" color="0,0,0" opacity="0.7" zIndex="-2" count="50" src="src/canvas-nest.js"></script>

<?php include "footer.php";?>
