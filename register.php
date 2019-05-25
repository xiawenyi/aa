<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>欢迎登陆</title>
    <link rel="stylesheet" href="css/zhuce.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        img {
            user-select: none;
        }

        * {
            margin: 0px;
            padding: 0px;
            /* box-sizing: border-box; */

        }

        a {
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
                <h2>欢迎注册</h2>
            </div>
        </div>
    </nav>
    <!--主体-->
    <div class="content-top">
        <div class="top1">
            <div class="content-right">
                <div class="shu-ju">
                    <div class="content-li input">
                        <h2>新用户注册</h2>
                        <span><a href="login.php">直接登录</a></span>
                    </div>
                    <div class="input1 input">
                        <label for="Uname">用户名:</label>
                        <input type="text" placeholder="请输入您的用户名">
                        <span class="input1-span"></span>

                    </div>
                    <div class="input2 input">
                        <label for="Upassword">登录密码:</label>
                        <input type="password" placeholder="请输入您的密码">
                        <span class="input2-span"></span>
                    </div>
                    <div class="input3 input">
                        <label for="getpassword">确认密码:</label>
                        <input type="password" name="" id="" placeholder="请确认您的密码">
                        <span class="input3-span"></span>
                    </div>
                    <div class="input4 input">
                        <label for="Uemail">邮箱:</label>
                        <input type="email" name="" id="" placeholder="请输入您的邮箱">
                        <span class="input4-span"></span>
                    </div>
                    <div class="input5 input">
                        <label for="Utel">手机号:</label>
                        <input type="tel" name="" id="" placeholder="请输入您的手机号">
                        <span class="input5-span"></span>
                    </div>
                    <div class="buttom input"><a href=""><input type="submit" style="width:290px;" value="提交注册信息"></a></div>
                </div>

            </div>
        </div>
    </div>
    <!--尾部-->
    <?php
    include_once './public/form.php';
    ?>
</body>

</html>