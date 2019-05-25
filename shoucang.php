<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>收藏夹</title>
    <link rel="stylesheet" href="css/shoucang.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
         img{
            user-select: none;
           
        }
        * {
            margin: 0px;
            padding: 0px;

        }
        body{
            margin: 0px;
            padding: 0px;
        }
        .initial-scale{
            height:100px;
        }
        a{
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
    <div class="zhu-ti">
        <div class="conter-top">
            <div class="a1">
                <a href="#">我收藏的商品</a>
            </div>
            <div class="a2">
                <p class="a2-btn1"><a href="">管理收藏夹</a></p>
                <p class="a2-btn2"><a href="">清空失效商品</a></p>
            </div>
            <div class="content-b">
                <div class="product-conter cao1">
                    <img src="images/product_img1.png"alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
                <div class="product-conter cao2">
                    <img src="images/product_img2.png"alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
                <div class="product-conter cao3">
                    <img src="images/product_img3.png"alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
                <div class="product-conter cao4"> 
                    <img src="images/product_img4.png" alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
                <div class="product-conter cao5"> 
                    <img src="images/product_img5.png" alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
                <div class="product-conter cao6"> 
                    <img src="images/product_img6.png" alt="">
                    <p>DELL燃7000 14.0英寸微边框(i5-7200u 8GB 256GB SSD HD620 Win10)银</p>
                    <span>￥4000.00</span>
                    <span class="gou-top"><a href="#">加入购物车</a></span>
                </div>
            </div>
            <div class="a4">
                <p class="a4-btn1"><a href="">管理收藏夹</a></p>
            </div>
        </div>
       
    </div>
    <!--尾部-->
    <?php
    include_once './public/form.php';
    ?>
</body>

</html>