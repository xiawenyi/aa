<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>购物车</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
         img{
            user-select: none;
        }
      body{
          margin:0px;
          padding: 0px;
      }
    </style>
</head>
<body>
    <!-- 引入头部 -->
    <?php
    include_once './public/header.php';
    ?>
     <!--主体-->
     <div id="forward">
        <img src="images/lookforward_img1.png" alt="" class="animated bounce">
        <p class="animated slideInDown">服务暂未上线 敬请期待!!</p>
    </div>
    <!-- 引入尾部 -->
    <?php
        include_once './public/form.php';
    ?>
</body>
</html>