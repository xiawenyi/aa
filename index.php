<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>达外商城</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        img{
            user-select: none;
        }
        * {
            margin: 0px;
            padding: 0px;
        }

        a {
            text-decoration: none;
        }

        b {
            position: relative;
            top: -30px;
            right: -30px;
            font-weight: inherit;
        }
    </style>

</head>

<body>
    <!--头部-->
    <!--导航栏-->
    <!--头部引入-->
    <?php
    
    include_once './public/header.php';
    ?>
    <!--主体-->
    <!--轮播图-->
    <div id="initial-scale">
        <div class="scale-top">
            <div class="img-top">
                <ul class="ul_list">
                    <li class="div1"><a href="javascript:;"><img src="images/banner1.png"></a></li>
                    <li class="div2"><a href="javascript:;"><img src="images/banner2.png"></a></li>
                    <li class="div3"><a href="javascript:;"><img src="images/banner3.png"></a></li>
                    <li class="div4"><a href="javascript:;"><img src="images/banner4.png"></a></li>
                    <li class="div4"><a href="javascript:;"><img src="images/banner1.png"></a></li>
                </ul>
            </div>
            <div class="lun-bo">
                <div class="left_click"><a href="javascript:;"><img src="images/arrow-left.png" style="user-select:none;"></a></div>
                <div class="right_click"><a href="javascript:;"><img src="images/arrow-right.png"></a></div>
            </div>
            <div class="ul-li">
                <ul>
                    <li class="span_list"><a href="javascript:;"></a></li>
                    <li class="span_list"><a href="javascript:;"></a></li>
                    <li class="span_list"><a href="javascript:;"></a></li>
                    <li class="span_list"><a href="javascript:;"></a></li>
                </ul>
            </div>

        </div>
    </div>

    <!--首页推荐 /1F-->
    <div id="shou-tui">
        <div class="top1">
            <div class="b1"><img src="images/computer_icon.png">
                <h1>首页推荐 /1F</h1>
            </div>
            <div class="b2-img">
                <div class="c1">
                    <h1>Apple MacBook Air系列</h1>
                    <p>酷睿双核i5处理器|256GB SSD|8GB内存|英特尔HD显卡620含共享显卡内存</p>
                    <span class="maie">￥6988.00</span>
                    <a href="product_details.php" class="btn">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img1.png"></a>
                    </div>
                </div>
                <div class="c2">
                    <h1>小米Air 金属超轻薄</h1>
                    <p>酷睿双核i5处理器|512GB SSD|2GB内存|英特尔HD独立显卡</p>
                    <span class="maie">￥3488.00</span>
                    <a href="product_details.php" class="btn">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img2.png"></a>
                    </div>
                </div>
            </div>
            <div class="b3-img">
                <div class="c3">
                    <h2>联想E480C 轻薄系列</h2>
                    <span class="naie-c3">￥5399.00</span>
                    <a href="product_details.php" class="btn0">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
                <div class="c4">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c4">￥4966.00</span>
                    <a href="product_details.php" class="btn1">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img4.png"></a>
                    </div>
                </div>
                <div class="c5">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c5">￥4966.00</span>
                    <a href="product_details.php" class="btn1">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img5.png"></a>
                    </div>
                </div>
                <div class="c6">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c6">￥4966.00</span>
                    <a href="product_details.php" class="btn1">查看详情</a>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--最新上架-->
    <!-- <div id="shou-tui">
        <div class="top1">
            <div class="b1"><img src="images/computer_icon.png">
                <h1>最新上架 /2F</h1>
            </div>

            <div class="b2-img">
                <div class="c1">
                    <h1>Apple MacBook Air系列</h1>
                    <p>酷睿双核i5处理器|256GB SSD|8GB内存|英特尔HD显卡620含共享显卡内存</p>
                    <span class="maie">￥6988.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img1.png"></a>
                    </div>
                </div>
                <div class="c2">
                    <h1>小米Air 金属超轻薄</h1>
                    <p>酷睿双核i5处理器|512GB SSD|2GB内存|英特尔HD独立显卡</p>
                    <span class="maie">￥3488.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img2.png"></a>
                    </div>
                </div>
            </div>
            <div class="b3-img">
                <div class="c3">
                    <h2>联想E480C 轻薄系列</h2>
                    <span class="naie-c3">￥5399.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
                <div class="c4">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c4">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img4.png"></a>
                    </div>
                </div>
                <div class="c5">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c5">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img5.png"></a>
                    </div>
                </div>
                <div class="c6">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c6">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--热销单品 /3F-->
    <!-- <div id="shou-tui">
        <div class="top1">
            <div class="b1"><img src="images/computer_icon.png">
                <h1>热销单品 /3F</h1>
            </div>

            <div class="b2-img">
                <div class="c1">
                    <h1>Apple MacBook Air系列</h1>
                    <p>酷睿双核i5处理器|256GB SSD|8GB内存|英特尔HD显卡620含共享显卡内存</p>
                    <span class="maie">￥6988.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img1.png"></a>
                    </div>
                </div>
                <div class="c2">
                    <h1>小米Air 金属超轻薄</h1>
                    <p>酷睿双核i5处理器|512GB SSD|2GB内存|英特尔HD独立显卡</p>
                    <span class="maie">￥3488.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img2.png"></a>
                    </div>
                </div>
            </div>
            <div class="b3-img">
                <div class="c3">
                    <h2>联想E480C 轻薄系列</h2>
                    <span class="naie-c3">￥5399.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
                <div class="c4">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c4">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img4.png"></a>
                    </div>
                </div>
                <div class="c5">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c5">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img5.png"></a>
                    </div>
                </div>
                <div class="c6">
                    <p>华硕RX310 金属超极本</p>
                    <span class="maie-c6">￥4966.00</span>
                    <button><a href="javascript:;">查看详情</a></button>
                    <div class="images-top arrow-left">
                        <a href="javascript:;"><img src="images/study_computer_img3.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--尾部-->
    <?php
       include_once './public/form.php';
    ?>
    <script src="./jquery/jquery.min.js"></script>
    <script src="./jquery/jquery.min.js"></script>
    <script>
        //动画效果
        //   function animate(elenent,target){
        //       //判断只有一个计时器
        //       if(element.timerId){
        //          clearInterval(elenent.timerId);
        //          elenent.timerId=null;
        //       }
        //       elenent.timerId=setInterval(function(){

        //           var step=10;
        //           var current=elenent.offsetLeft;
        //           if(current > target){
        //               step=-Math.abs(step);
        //           }
        //           if(Math.abs(current-target)<=Math.abs(step)){
        //                 clearInterval(elenent.timerId);
        //                 element.style.left=target+'px';
        //                 return;
        //           }
        //           current+=step;
        //           element.style.left=target+'px';

        //       },5);

        //   }
        //  $(function(){
        //      $(".btn1").click(function(){
        //          $(".ul-li-left").css("left",-1000+'px');
        //      })
        //  })
        //轮播图
        $(function() {
            var num = 0;
            var timer = null;
            go();
            $(".scale-top").mouseenter(function() { //实现当鼠标移动到box上时，不执行自动轮播功能
                clearInterval(timer); //移动进去时清除定时器
            }).mouseleave(function() {
                go(); //移出后执行go函数
            });
            $(".span_list").eq(0).css("backgroundColor", "blue");
            //页面加载后默认是第一张图，则让第一个导航圆点变为“选中色”。
            function go() {
                timer = setInterval(function() { //设置定时器
                    num++; //用一个全局变量来控制图的运动次数
                    if (num > 4) { //如果移动到了最后一张图，则num赋值1，调整ul边距（相当于初始化）
                        num = 1;
                        $(".ul_list").css("margin-left", "0px");
                    }
                    if (num == 4) { //由于圆点只有四个，而图片有五张，当移动到第五张图片时，给第一个圆点“选中色”。
                        $(".span_list").css("backgroundColor", "");
                        $(".span_list").eq(0).css("backgroundColor", "blue");
                    } else { //图片运动一次，导航圆点也动态的变换，这里先让所有圆点变为“不选中色”，再让当前圆点变为“选中色”。
                        $(".span_list").css("backgroundColor", "");
                        $(".span_list").eq(num).css("backgroundColor", "blue");
                    }
                    $(".ul_list").animate({
                        "marginLeft": -1000 * num + "px"
                    }, 666); //使用animate实行运动功能
                }, 3000);
            }

            $(".span_list").each(function(index) { //遍历每一个圆点添加点击事件，点击当前圆点则让num值赋为当前圆点的索引
                $(this).click(function() {
                    num = index;
                    $(".span_list").css("backgroundColor", "");
                    $(".span_list").eq(num).css("backgroundColor", "blue");
                    $(".ul_list").stop().animate({
                        "marginLeft": -1000 * num + "px"
                    }, 666);
                })
            });

            $(".right_click").click(function() {
                //右按钮点击事件，每点击一次num++,这里有很多的判断，是用来消除一些BUG的。
                if (num <= 4) {
                    num++;
                }
                if (num > 4) {
                    num = 1;
                    $(".ul_list").css("margin-left", "0px");
                }
                if (num == 4) {
                    $(".span_list").css("backgroundColor", "");
                    $(".span_list").eq(0).css("backgroundColor", "blue");
                } else {
                    $(".span_list").css("backgroundColor", "");
                    $(".span_list").eq(num).css("backgroundColor", "blue");
                }
                $(".ul_list").stop().animate({
                    "marginLeft": -1000 * num + "px"
                }, 666);

            });

            $(".left_click").click(function() { //左按钮点击事件
                if (num >= 0) {
                    num--;
                }
                if (num < 0) {
                    num = 3;
                    $(".ul_list").css("margin-left", "-2800px")
                    $(".span_list").css("backgroundColor", "");
                    $(".span_list").eq(3).css("backgroundColor", "blue");
                } else {
                    $(".span_list").css("backgroundColor", "");
                    $(".span_list").eq(num).css("backgroundColor", "blue");
                }
                $(".ul_list").stop().animate({
                    "marginLeft": -1000 * num + "px"
                }, 666);

            });


            // $(".left_click").hover(function(){//这里是实现左右按钮的阴影效果显示，用到了hover事件
            //     $(".btn_left").css("opacity","1");
            // },function(){
            //     $(".btn_left").css("opacity","0.5");
            // });

            // $(".right_click").hover(function(){
            //     $(".btn_right").css("opacity","1");
            // },function(){
            //     $(".btn_right").css("opacity","0.5");
            // });

        });
        //数据提交 ajax 提交
        $(function() {
            $.ajax({
                type: "post",
                url: '',
                data: {},
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                }
            })
        })
    </script>
</body>

</html>