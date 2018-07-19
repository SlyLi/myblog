<?php include 'header.php';?>
<?php if($_SESSION['loginError']):?>

<?php endif;?>
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
            <?php   if($_SESSION['loginError']==null):?>
            <?php else:?>
                <div class="alert alert-warning float-right "><?php echo $_SESSION['loginError'] ?></div>
            <?php endif?>
        </div>
    </form>

<?php include 'footer.php' ?>