<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/newFace/Public/css/index.css">
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
					<li>
						<a href="<?php echo U('Map/index');?>">重邮地图</a>
					</li>
					<li>
						<a href="<?php echo U('Data/index');?>" id="showdat">大数据</a>
					</li>
					<li>
						<a href="<?php echo U('Page/index');?>">重邮百科</a>
					</li>
					<li>
						<a href="<?php echo U('Windcolor/index');?>">重邮风采</a>
					</li>
					<li>
						<a href="#">大声HI</a>
					</li>
					<li class="last">
						<a href="http://hongyan.cqupt.edu.cn/">关于我们</a>
					</li>
					<li id="login">
						<a id="hehe">新生登录</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="timer">
		<img class="t_bg" src="/newFace/Public/image/timer_bg.png">
		<div class="timer_container">
			<img class="tree_right" src="/newFace/Public/image/tree_right.png">
			<img id="cloud01" class="cloud01" src="/newFace/Public/image/cloud01.png">
			<img id="cloud02" class="cloud02" src="/newFace/Public/image/cloud02.png">
			<img id="cloud03" class="cloud03" src="/newFace/Public/image/cloud03.png">
			<img id="cloud04" class="cloud04" src="/newFace/Public/image/cloud04.png">
			<img id="cloud05" class="cloud05" src="/newFace/Public/image/cloud05.png">
			<div class="logo" id = "logo"></div>
			<div class="count_down" id = "count_down">
				<div>
					<p>	
						<span>开学倒计时</span>
						<span id="days" class="number">
							<img src="/newFace/Public/image/num0.png">
							<img src="/newFace/Public/image/num0.png">
						</span>
						<span class="timer">天</span>
						<span id="hour" class="number">
							<img src="/newFace/Public/image/num0.png">
							<img src="/newFace/Public/image/num0.png">
						</span>
						<span class="timer">时</span>
						<span id="branch" class="number">
							<img src="/newFace/Public/image/num0.png">
							<img src="/newFace/Public/image/num0.png">
						</span>
						<span class="timer">分</span>
						<span id="seconds" class="number">
							<img src="/newFace/Public/image/num0.png">
							<img src="/newFace/Public/image/num0.png">
						</span>
						<span class="timer">秒</span>
					</p>
				</div>
			</div>
			<img class="stone" src="/newFace/Public/image/stone.png">
			<img class="car" src="/newFace/Public/image/car.png">
			<img class="shaoma" id="shaoma" src="/newFace/Public/image/shaoma.png">
			<img class="erweima" src="/newFace/Public/image/erweima.png">
			<img src="/newFace/Public/image/line_top.png" alt="" class="line_top">
		</div>
	</div>
	<div class="container">
		<img src="/newFace/Public/image/ground.png">
		<div class="container_content">
			<div class="map" id="map">
				<div id="showInf">
					<div></div>
					<p>风雨操场</p>
				</div>
				<a id="taiji" class="dibiao" href=""></a>
				<a id="laocao" class="dibiao" href=""></a>
				<a id="fengyu" class="dibiao" href=""></a>
				<a id="sanjiao" class="dibiao" href=""></a>
				<a id="yifu" class="dibiao" href=""></a>
				<a id="newGate" class="dibiao" href=""></a>
				<a id="oldGate" class="dibiao" href=""></a>
				<a id="oldLia" class="dibiao" href=""></a>
				<a id="zidonghua" class="dibiao" href=""></a>
				<img class="line_right01" src="/newFace/Public/image/line_right01.png">
				<img class="line_left01" src="/newFace/Public/image/line_left01.png">
				<img class="line_right02" src="/newFace/Public/image/right_line02.png">
				<p>想了解学校食堂、寝室、图书馆的地理位置？想知道超市、教学楼、注册地点的方位在哪？这里提供重邮2D地图以及街景地图，让你在入学前提前领略学校的风光！</p>
				<a id="d01" class="total" href="<?php echo U('Map/index');?>">查看详情</a>
			</div>
			<div class="warp">
				<a class="prv" id="prv" href="#">  </a>
				<ul>
					<li style="left:0px;"></li>
					<li style="left:740px;background:blue;"></li>
					<li style="left:1480px;background:green;"></li>
				</ul>
				<a class="nex" id="nex" href="#">  </a>
			</div>
			<div class="inf">
				<div class="show">
					<img src="/newFace/Public/image/show_t.png">
					<img class="img01" src="/newFace/Public/image/img01.png">
					<p>
						<span>
							提前了解未来的小伙伴！新生登陆后不仅可以找室友、找同学、找辅导员，还可以找与你志同道合的朋友哦！
						</span>
						<span class="line2">
							可以查看学校里与你同乡的比例、学校男女比例、学院男女比例以及家庭住址到学校距离排名，所在学院各专业去向统计。
						</span>
					</p>
					<a id="d6" class="total know_total" style="margin:36px 22px 0 0" href="<?php echo U('Data/index');?>">查看详情</a>
				</div>
				<div class="know">
					<img src="/newFace/Public/image/know_t.png">
					<img class="img02" src="/newFace/Public/image/img02.png">
					<p>
						<span>
							提供从火车站、机场等到学校的公交路线以及打车大致费用、寝室条件、新生群、班级群、老乡群、学校周围银行、超市、餐馆、酒店住宿等信息。
						</span>
						<span class="line2" style="margin-top:30px">
							没有参加学生组织的大学不是完整的大学！这里可以查看校级组织各部门的简介以及部分学生社团的简介，让你提前了解学校的学生组织！
						</span>
					</p>
					<a id="d5" class="total know_total" href="<?php echo U('Page/index');?>">查看详情</a>
				</div>
			</div>
			<div class="inf01">
				<img class="tree_car" src="/newFace/Public/image/tree_car.png">
				<div class="we">
					<p>
						这里有五四之星的风采展示、还有重邮校园美景的照片、更有精彩的重邮原创视频！
					</p>
					<a id="d4" class="total de" href="<?php echo U('Windcolor/index');?>">查看详情</a>
				</div>
				<div class="hi">
					<p>
						大声HI论坛给新生一个互相交流的平台。让新生在陌生的环境下不再孤单！快来发帖吧！
					</p>
					<a id="d3" class="total de" style="margin:88px 0 60px 114px" href="">查看详情</a>
				</div>
				<div class="about_us">
					<p>
						红岩网校工作站简介。优秀内网展示、以及各种迎新活动专题。
					</p>
					<a id="d2" class="total de" style="margin:114px 0 60px 114px" href="">查看详情</a>
				</div>
				<img class="gg" src="/newFace/Public/image/gg.png">
				<a id="go_top" href="#"></a>
			</div>
		</div>
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
	</div>
	<script src="/newFace/Public/js/demo.js"></script>
	<script src="/newFace/Public/js/main.js"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.4.4/jquery.js"></script>
	<script src="/newFace/Public/js/fix.js"></script>
		<?php  if($_SESSION){ echo "<script> 
                document.getElementById('hehe').childNodes[0].nodeValue = '退出';
                var logOut = document.getElementById('hehe');
		        logOut.childNodes[0].nodeValue = '退出';
		        logOut.onclick = function(){
		            window.location.href = 'index.php?m=Home&c=Index&a=logOut';
		        }
        	</script>"; }else{ echo"<script>
        		var btn = document.getElementById('showdat');
        		btn.onclick = function(){
        			btn.href = '#';
        			alert('还没登陆呢亲');
        		}
        	</script>"; } ?>
	<script type="text/javascript">
			var url = "<?php echo U('Index/login');?>";
            $('#login_sub').click(function(){
            var username = $('#user_name');
            var password = $('#password');
            $.post(
                url ,{username: username.val(), password: password.val()}, 
                function(data){
                    if(data.status){
                        document.getElementById('hehe').childNodes[0].nodeValue = '退出';
                        var logOut = document.getElementById('hehe');
						logOut.childNodes[0].nodeValue = '退出';
						logOut.onclick = function(){
							window.location.href = 'index.php?m=Home&c=Index&a=logOut';
						}
						if(data.is_hobby){
							window.location.href = 'index.php?m=Home&c=Index&a=index';
						}
                    }else{
                        window.location.href = "<?php echo U('Index/index');?>";
                        alert("登录失败");
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
            	if(!qq || !phone || !beh_arr){
                    alert('信息不呢过为空呢亲');
                }else{
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
	            }
            })
            //选择兴趣爱好部分
	</script>
</body>
</html>