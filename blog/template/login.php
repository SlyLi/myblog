<?php include "header.php";?>
<div style="height:150px"></div>
   <div class="w-50 h-30 m-auto">
    <form action="loginpost.php" method="post">
        <div class="form-group">
            <label >账号</label>
            <input type="text" class="form-control" name="id" placeholder="Identity">
        </div>
        <div class="form-group">
            <label >密码</label>
            <input type="password" class="form-control" name="passwd" placeholder="Password">
        </div>

        <div>
            <button type="submit" class="btn btn-primary ml-4">登录</button>
            <?php   if(isset($_SESSION["loginError"])):?>
                <?php   if($_SESSION["loginError"]==null):?>
                <?php else:?>
                    <div class="alert alert-warning float-right "><?php echo $_SESSION["loginError"] ?></div>
                <?php endif?>
            <?php endif?>
        </div>
    </form>
    </div>

<?php include "footer.php" ?>