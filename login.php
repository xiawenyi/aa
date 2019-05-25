<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>欢迎登陆</title>
    <link rel="stylesheet" href="css/denglu.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
         img{
            user-select: none;
        }
    *{
        margin:0px;
        padding:0px;
        /* box-sizing: border-box; */

    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
      <!--头部-->
      <nav>
          <div class="nav-top">
              <div class="top-left">
                  <a href="index.php"><img src="images/logo.png"></a>
                  <h2>欢迎登录</h2>
              </div>
          </div>
      </nav>
      <!--主体-->
      <div class="content-top">
          <div class="top1">
              <div class="content-right">
                  <div class="content-li">
                        <h2>登录某内商城</h2>
                        <span><a href="register.php">新用户注册</a></span>
                  </div>
                  <div class="input1">
                        <input type="text" placeholder="请输入您的用户名">
                        <span><img src="images/yhm.png"></span>
                        <p class="#"></p>
                  </div>
                  <div class="input2">
                        <input type="password" placeholder="请输入您的密码">
                        <span><img src="images/mm.png"></span>
                  </div>
                  <div class="input3">
                        <div class="type-input"><input type="checkbox" name="" id="">自动登录</div>
                        <div class="input-left"><a href="#">忘记密码？</a></div>
                  </div>
                  <div class="buttom"><button><a href="">登录</a>   </button></div>
              </div>
          </div>
      </div>
      <!--尾部-->
     <?php
         include_once './public/form.php';  
     ?>
</body>
</html>