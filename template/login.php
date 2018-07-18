<?php include 'header.php';?>

    <form action="loginpost.php" method="post">
        <div class="form-group">
            <label >ID</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label >PASSWORD</label>
            <input type="password" class="form-control" name="passwd">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php   if($_SESSION['loginError']):?>
<p><?php echo $_SESSION['loginError'] ?></p>
<?php endif?>


<?php include 'footer.php' ?>