<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户中心</title>
    <link rel="stylesheet" href="css/shoucang.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/lookforward.css">
    <style>
         img{
            user-select: none;
        }
        * {
            margin: 0px;
            padding: 0px;

        }

        body {
            margin: 0px;
            padding: 0px;
        }

        .initial-scale {
            height: 100px;
        }

        a {
            text-decoration: none;
            list-style: none;
        }
    </style>
</head>

<body>
    <!--头部-->
    <?php
    include_once './public/header.php';
    ?>
    <!--主体-->
    <div id="forward">
        <img src="images/lookforward_img1.png" alt="" class="animated bounce">
        <p class="animated slideInDown">服务暂未上线 敬请期待!!</p>
    </div>
    <!--尾部-->
    <?php
        include_once './public/form.php';
    ?>
</body>

</html>