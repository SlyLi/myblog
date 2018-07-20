
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/style.css" type="text/css">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"> 
    <script src="src/bootstrap/js/bootstrap.min.js"></script>
    <script src="src/jquery/jquery.min.js"></script>
    <script src="src/script.js"></script>
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-dark border-bottom shadow-sm">
  <a class="navbar-brand" href="index.php">主页</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">
         <?php if(isset($_SESSION["author"])):?>
              <?php if($_SESSION["author"]!=null):?>
              <?php echo "退出"?>
            <?php else:?>
              <?php echo "登录"?>
            <?php endif ?>
        <?php else:?>
          <?php echo "登录"?>
        <?php endif ?>
        
         <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION["author"])&&$_SESSION["author"]!=null):?>
             
          <li class="nav-item">
            <a class="nav-link" href="list.php">编辑</a>
          </li>
          
        <?php endif ?>

       
<!-- 

      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
  -->  
  
  
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
      <a href="./index.html" class="btn btn-outline-info ml-1">开始</a>
    

    </form>
  </div>
</nav>
<a href="#" class="hidden alert alert-primary " style="position: fixed;bottom:5px" id="back_to_top">返回顶部</a>

<div class=" container bg-red mt-3 mb-3 row-fluid bg-light rounded" id="contain">
