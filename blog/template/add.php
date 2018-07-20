<?php include 'header.php';?>
    <div class="row">
    <?php include "leftbar.php";?>
        <div class="col-9">
            <form action="save.php" method="post">
                <div class="form-group">
                    <label for="article_title">文章标题：</label>
                    <input type="text" class="form-control" id="article_title" name="title" placeholder="文章标题">
                </div>
                <div class="form-group">
                    <label for="article_content">正文内容：</label>
                    <textarea class="form-control" id="article_content" name="content" placeholder="正文内容" style="height:350px;" ></textarea>
                </div>

                <button type="submit" class="btn btn-success float-right">提交</button>
            </form>
        </div>
    </div>
<script>
    $("#contain").removeClass("container");
    $("#contain").addClass("container-fluid");
</script>

<?php include 'footer.php';?>