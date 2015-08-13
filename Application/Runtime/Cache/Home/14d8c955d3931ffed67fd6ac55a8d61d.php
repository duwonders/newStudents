<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/newFace/Public/css/data.css">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.4.4/jquery.js"></script>
    <script type="text/javascript" src="/newFace/Public/js/slimbox2.js"></script>
    <link rel="stylesheet" href="/newFace/Public/css/slimbox2.css" type="text/css" media="screen" />
    <script type = "text/javascript" src = "http://echarts.baidu.com/build/dist/echarts.js"></script>
    <style>
    .table tr{
        border-bottom: 1px solid #fceea6;
        width:921px;
        text-align: center;
    }
    .table tr :first-child{
        border-bottom: 2px solid #fceea6;
    }
    .table tr .title{
        width: 130px;
        height: 35px;
        text-align: center;
    }
    .table tr .info{
        width: 130px;
        height: 35px;
        font-size: 14px;
        text-align: center;
    }
    </style>
</head>
<body>
    <div id="wap">  
    </div>
    <div id="login_page_father">
        <img src="/newFace/Public/image/login_bg.png">
        <a id="close" href=""></a>
        <div id="login_content">
            <img id="login_logo" src="/newFace/Public/image/new.png">
            <form action="" method="post">
                <div id="user_name_d">
                    <img class="l" src="/newFace/Public/image/login_img.png">
                    <input id="user_name" type="text">
                </div>
                <div id="password_d">
                    <img class="l" src="/newFace/Public/image/pass_img.png">
                    <input id="password" type="password">
                </div>
                <div id="phone_d">
                    <img style="float:left;margin:10px 6px 0 0;" src="/newFace/Public/image/phone.png">
                    <input id="phone" type="text">
                </div>
                <div id="qq_d">
                    <img style="float:left;margin:10px 6px 0 0;" src="/newFace/Public/image/qq.png">
                    <input id="qq" type="text">
                </div>
                <div id="behavior_d">
                    <img style="float:left;" src="/newFace/Public/image/behavior.png">
                    <div id="post_behavior">
                        <a href="">动漫</a>
                        <a href="">极客 </a>
                        <a href="">摄影</a>
                        <a href="">lol</a>
                        <a href="">吃货</a>
                        <a href="">篮球</a>
                        <a href="">旅游</a>
                        <a href="">电影</a>
                        <a href="">学霸</a>
                        <a href="">健身</a>
                        <a href="">音乐</a>
                        <a href="">综艺</a>
                    </div>  
                </div>
            </form>
            <a id="login_sub" href="">登录</a>
            <a id="skip" href="">跳过</a>
            <a id="yes" href="">确认</a>
            <p id="warming">
                你输入的帐号/密码格式有误
            </p>
        </div>
    </div>
    <div class="big_header">
        <div class="header" id="header">
            <div class="header_container">
                <ul class="nav">
                    <li class="cqupt">
                        <img src="/newFace/Public/image/cqupt.png">
                        <img src="/newFace/Public/image/cqupt_f.png">
                    </li>
                    <li class="index">
                        <a href="<?php echo U('Index/index');?>">首页</a>
                    </li>
                    <li class="map">
                        <a href = "<?php echo U('Map/index');?>">重邮地图</a>
                    </li>
                    <li class = "data_t">
                        <a href = "<?php echo U('Data/index');?>" id="showdat1">数据展示</a>
                    </li>
                    <li class="page_t">
                        <a href="<?php echo U('Page/index');?>">重邮百科</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Windcolor/index');?>">邮子风采</a>
                    </li>
                    <li>
                        <a href="">大声HI</a>
                    </li>
                    <li class="last">
                        <a href="http://hongyan.cqupt.edu.cn/">关于我们</a>
                    </li>
                    <li id="login1">
                        <a id="hehe1">新生登录</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header" id="H">
            <div class="header_container">
                <ul class="nav">
                    <li class="cqupt">
                        <img src="/newFace/Public/image/cqupt.png">
                        <img src="/newFace/Public/image/cqupt_f.png">
                    </li>
                    <li class="index">
                        <a href="<?php echo U('Index/index');?>">首页</a>
                    </li>
                    <li class="map">
                        <a href="<?php echo U('Map/index');?>">重邮地图</a>
                    </li>
                    <li class = "data_t">
                        <a href="<?php echo U('Data/index');?>" id="showdat2">数据展示</a>
                    </li>
                    <li class="page_t">
                        <a href="<?php echo U('Page/index');?>">重邮百科</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Windcolor/index');?>">邮子风采</a>
                    </li>
                    <li>
                        <a href="">大声HI</a>
                    </li>
                    <li class="last">
                        <a href="http://hongyan.cqupt.edu.cn/">关于我们</a>
                    </li>
                    <li id="login2">
                        <a id="hehe2">新生登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="timer">
        <img src="/newFace/Public/image/maptimerbg.png">
        <div class="timer_container">
            <img id="cloud01" class="cloud01" src="/newFace/Public/image/cloud01.png">
            <img id="cloud02" class="cloud02" src="/newFace/Public/image/cloud03.png">
            <img id="cloud03" class="cloud03" src="/newFace/Public/image/cloud04.png">
            <img id="cloud04" class="cloud04" src="/newFace/Public/image/cloud05.png">
            <div class="logo"></div>
            <img class="car" src="/newFace/Public/image/car.png">
            <img src="/newFace/Public/image/hotball.png"class="hotball">
            <img class="line"src="/newFace/Public/image/map_line.png">
        </div>
    </div>
    <div class="container">
        <img src="/newFace/Public/image/mapground.png">
        <div class="container_content">
            <img class="line_right01" src="/newFace/Public/image/line_right01.png">
            <div class="mapwrapper">
                <a id = "btu_2D">查询信息</a>
                <a class="active" id = "btu_3D">数据展示</a>
                <img src="/newFace/Public/image/datatitle.png" alt="" class="maptitle">
                <img src="/newFace/Public/image/mapbg.png" class= "mapbg">
                <div class = "mapstatic">
                    <div id="D2map">
                        <div class="page_top">
                            <ul class="page_ul" id="an_page_ul">
                                <li class="stu_li"><a id = "find_btu1">找室友</a></li>
                                <li class="stu_li"><a id = "find_btu2">找同学</a></li>
                                <li class="stu_li"><a id = "find_btu3">找辅导员</a></li>
                                <li class="stu_li"><a id = "find_btu4">找志同道合</a></li>
                            </ul>
                        </div>
                        <div class="page_mid_big">
                               <div id="friend">
                                   <ul class="page_mid_mid_ul">
                                        <p>楼栋号：&nbsp;<?php echo ($qsldh); ?></p>
                                        <p>寝室号：&nbsp;<?php echo ($qsh); ?></p>
                                        <p>室友：</p>
                                       
                                        <?php if(is_array($roommates)): foreach($roommates as $key=>$mate): ?><p>
                                               <?php echo ($mate["STU_NAME"]); ?> (<?php echo ($mate["CITY_NAME"]); ?>)
                                            </p><?php endforeach; endif; ?>

                                        <li></li>
                                        <li ></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                               </div>
                               <div id="room">
                                   <ul class="page_mid_mid_ul">
                                        <p>班级号：<?php echo ($class_id); ?></p>
                                        <li ><p>同班同学：</p></li>
                                        <p>
                                        <?php if(is_array($class_res)): foreach($class_res as $key=>$class): echo ($class['STU_NAME']); ?>(<?php echo ($class['sex']); ?>,<?php echo ($class['CITY_NAME']); ?>),<?php endforeach; endif; ?>
                                        </p>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                               </div>
                               <div id="teacher">
                                    <ul class="page_img_ul" >
                                    <li class="page_img" style="margin-top:67px;"><a id="person1" href="/newFace/Public/image/<?php echo ($teacher); ?>.jpg" rel="lightbox" title="<?php echo ($teacher); ?>" style="background: url('/newFace/Public/image/<?php echo ($teacher); ?>.jpg');background-size:100%"></a><p><?php echo ($teacher); ?></p>
                                    </ul>
                               </div>
                               <div id="interest">
                                   <ul class="page_mid_mid_ul">
                                        <p>与我有共同兴趣爱好的人数:<?php echo ($hobbymates_count); ?></p>
                                        <?php if(is_array($hobbymates)): foreach($hobbymates as $key=>$hobbymate): ?><p>
                                                <?php echo ($hobbymate['name']); ?>(共同爱好：
                                                <?php if(is_array($hobbymate['hobby'])): foreach($hobbymate['hobby'] as $key=>$hobby): echo ($hobby); ?>,<?php endforeach; endif; ?>
                                                )
                                            </p><?php endforeach; endif; ?>
                                        <?php if($hobbymates_count > 10): ?><p> . . .  . . .</p><?php endif; ?>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                               </div>  
                       </div>
                       <div class="page_bottom">
                        <!-- 分页的地方 -->
                       </div>
                   </div>
                   <div id="D3map" >
                    <div class="page_top" class="page">
                        <ul class="page_ul" id="an_page_ul">
                            <li class="stu_li"><a id = "data_btu1">同乡比例</a></li>
                            <li class="stu_li"><a id = "data_btu2">男女比例</a></li>
                            <li class="stu_li"><a id = "data_btu3">同年同月</a></li>
                            <li class="stu_li"><a id = "data_btu4">最难科目</a></li>
                            <li class="stu_li"><a id = "data_btu5">毕业去向数据</a></li>
                        </ul>
                    </div>
                    <div class="page_mid_big">
                       <div id="page_mid_next"></div>
                       <div class="page_mid_next" id = "row">
                        <h1 id = "WH1">你所在学院及学校的男女比</h1>
                        <h1 id = "WH2">学校里与你同年同月及同星座的比例为</h1>
                        <div id="row1"></div>
                        <div id="row2"></div>
                    </div>
                    <div class="page_mid_next" id = "clomu">
                        <div id="clomu1"></div>
                        <div id="clomu2"></div>
                    </div>
                    <div class="share">
                        <div class="jiathis_style_32x32">
                            <a class="jiathis_button_tsina share1"></a>
                            <a class="jiathis_button_weixin share2" ></a>
                            <a class="jiathis_button_qzone share3"></a>
                        </div>
                        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="page_bottom">
                </div>
            </div>
        </div> 
        <img src="/newFace/Public/image/grass.png" class = "grass">
    </div>
</div>
<a id="go_top" href="#"></a>
</div> 
<div class="footer">
    <div class="footer_content">
        <p class="b">
            <a href="">
                关于红岩网校
            </a>    
            <span>|</span>    
            <a href="">
                网站地图
            </a>    
            <span>|</span>   
            <a href="">
                指出错误
            </a>    
            <span>|</span>    
            <a href="">
                管理入口
            </a>    
            <span>|</span>
        </p>
        <p>
            本网站由红岩网校工作站负责开发，管理，不经红岩网校委员会书面同意，不得进行转载
        </p>
        <p style="padding-bottom:46px;">
            地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail :redrock@cqupt.edu.cn (023-62461084)
        </p>
    </div>
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    <script src="/newFace/Public/js/demo.js"></script>
    <script src="/newFace/Public/js/data.js"></script>
    <script src="/newFace/Public/js/fix.js"></script>
    <?php  if($_SESSION){ echo "<script> 
                document.getElementById('hehe1').childNodes[0].nodeValue = '退出';
                document.getElementById('hehe2').childNodes[0].nodeValue = '退出';
                var logOut = document.getElementById('hehe1');
                logOut.childNodes[0].nodeValue = '退出';
                logOut.onclick = function(){
                    window.location.href = 'index.php?m=Home&c=Index&a=logOut';
                }
                var logOut = document.getElementById('hehe2');
                logOut.childNodes[0].nodeValue = '退出';
                logOut.onclick = function(){
                window.location.href = 'index.php?m=Home&c=Index&a=logOut';
                }           
            </script>"; }else{ echo "<script>
                var btn1 = document.getElementById('showdat1');
                var btn2 = document.getElementById('showdat2');
                btn1.onclick = function(){
                    btn1.href = '#';
                    alert('还没登陆呢亲'');
                }
                btn2.onclick = function(){
                    btn2.href = '#';
                    alert('还没登陆呢亲');
                }
            </script>"; } ?>
    <script>
   var url = "<?php echo U('Index/login');?>";
            $('#login_sub').click(function(){
            var username = $('#user_name');
            var password = $('#password');
            $.post(
                url ,{username: username.val(), password: password.val()}, 
                function(data){
                    if(data.status){
                        document.getElementById('hehe1').childNodes[0].nodeValue = '退出';
                        document.getElementById('hehe2').childNodes[0].nodeValue = '退出';
                        var logOut = document.getElementById('hehe1');
                        logOut.childNodes[0].nodeValue = '退出';
                        logOut.onclick = function(){
                            window.location.href = 'index.php?m=Home&c=Index&a=logOut';
                        }
                        var logOut = document.getElementById('hehe2');
                        logOut.childNodes[0].nodeValue = '退出';
                        logOut.onclick = function(){
                            window.location.href = 'index.php?m=Home&c=Index&a=logOut';
                        }
                        if(data.is_hobby){
                            window.location.href = 'index.php?m=Home&c=Index&a=index';
                        }
                    }else{
                        window.location.href = "<?php echo U('Index/index');?>";
                        alert("用户名或密码错误");
                    }
                },"json");
            })
//登陆部分
        var url2 = "<?php echo U('Index/insertMsg');?>";
            $('#yes').click(function(){
                ($('#qq').val()) ? qq = $('#qq').val() : qq = ""; 
                ($('#phone').val()) ? phone = $('#phone').val() : phone = "";
                (beh_arr[0]) ? hobby1 = beh_arr[0] : hobby1 = "";
                (beh_arr[1]) ? hobby2 = beh_arr[1] : hobby2 = "";
                (beh_arr[2]) ? hobby3 = beh_arr[2] : hobby3 = "";
                $.post(
                    url2,{qq_num: qq, phone_num: phone, hobby1: hobby1, hobby2: hobby2, hobby3: hobby3},
                    function(data){
                        if(data.status){
                            alert("添加成功");
                            window.location.href = 'index.php?m=Home&c=Index&a=index';
                        }else{
                            alert("添加失败");
                            window.location.href = 'index.php?m=Home&c=Index&a=index';
                        }
                    },"json")
            })
    //添加兴趣爱好部分
    window.onload = function(){
        var NAME = ["<?php echo ($city_name); ?>","其余人数","脱单男","脱单女"];
        var VALUE = [{"name":"<?php echo ($city_name); ?>","value":<?php echo ($city_count); ?>},
        {"name":"其余人数","value":<?php echo ($other_count); ?>},
        ];
        var TITLE = "在重邮，你的老乡人数占全校人数的比例为";
        var BILI = "<?php echo ($city_rate); ?>";        
        charst(NAME,VALUE,TITLE,BILI);
    }
    data_btu1.onclick = function(){
        var NAME = ["<?php echo ($city_name); ?>","其余人数","脱单男","脱单女"];
        var VALUE = [{"name":"<?php echo ($city_name); ?>","value":<?php echo ($city_count); ?>},
        {"name":"其余人数","value":<?php echo ($other_count); ?>},
        ];
        var TITLE = "在重邮，你的老乡人数占全校人数的比例为";
        var BILI = "<?php echo ($city_rate); ?>";        
        charst(NAME,VALUE,TITLE,BILI);
    }
    data_btu2.onclick = function(){
        var singleDog = [
        {"name":"男","value":"<?php echo ($xy_boy_count); ?>"},
        {"name":"女","value":"<?php echo ($xy_girl_count); ?>"},
        ]
        var notalone =[
        {"name":"脱单男","value":"30"},
        {"name":"脱单女","value":"70"},
        ]
        charst_sex(singleDog,notalone);
    }
    data_btu3.onclick = function(){
        var age = ["同年同月","其他"];
        var agevalue = [
        {"name":"同年同月","value":"<?php echo ($birth_count); ?>"},
        {"name":"其他","value":"<?php echo ($other_birth_count); ?>"},
        ]
        var star = ["<?php echo ($star_name); ?>","其他"];
        var starvalue = [
        {"name":"<?php echo ($star_name); ?>","value":"<?php echo ($star_count); ?>"},
        {"name":"其他","value":"<?php echo ($other_star_count); ?>"},
        ] 
        chart_age(age,agevalue,star,starvalue);
    }
    data_btu4.onclick = function(){
        charst_subject();
    }
    data_btu5.onclick = function(){
            var content = "通信学院的出国升学率为22.3%，灵活就业率为0.48%，待就业率为2.08%，就业率为97.92%";//学院的文字数据介绍
            charst_end(content);
        }
        
        </script>
    </body>
    </html>