<?php
namespace Home\Controller;
use Think\Controller;

class DataController extends Controller{
	public function index(){
		
		if($_SESSION){
			//接受数据
			/*
			*	$stuID 		学号 	
			*	$stuname    姓名		
			*	$teacher_id 辅导员编号	
			*	$teacher 	辅导员
			*	$qsldh 		寝室楼栋号
			*	$qsh 		寝室号
			*	$city_id 	城市id
			*	$xy_id 		学院id
			*	$birth 		出生日期
			*	$class_id 	班级id
			*/
			$M = M('allmsg');
			$a = I('session.userMessage');
			$stuID = $a['STU_NUM'];
			$stuname = $a['STU_NAME'];
			$class_id = $a['STU_BJID'];
			$teacher_id = $a['TEACHER_ID'];
			$teacher_res = M('teacher')->where("id = $teacher_id")->select();
			$teacher = $teacher_res[0]['TEACHER_NAME'];	
			$qsldh = $a['STU_QSLDH'];
			$qsh = $a['STU_QSH'];
			$city_id = $a['STU_CITY'];
			$xy_id  = $a['STU_XY'];
			$birth = $a['STU_BIRTH'];
		
		//查询信息栏
			/*
			*	$class_count				同班人数
			*	$roommates 					同寝人数
			*	$hobby1 $hobby2 $hobby3 	本人的兴趣爱好
			*	$hobbymates[$x]['name']		与我有共同兴趣爱好的人姓名	
			*   $hobbymates[$x]['hobby']	我们的共同兴趣爱好
			*	$hobbymates['count']		与我有共同兴趣爱好的人数
			*  	
			*/
			//1.找室友
			$room_field = 'tbl_allmsg.STU_NAME,tbl_city.CITY_NAME';
			$room_join = 'LEFT JOIN tbl_city ON tbl_allmsg.STU_CITY = tbl_city.CITY_ID';
			$room_where = "tbl_allmsg.STU_QSLDH = '$qsldh' and tbl_allmsg.STU_QSH = '$qsh' ";
			$roommates = $M->field("$room_field")->join("$room_join")->where("$room_where")->select();
			$roomcount = count($roommates);
			$this->assign('qsldh',$qsldh)->assign('qsh',$qsh)->assign('roommates',$roommates)->assign('roomcount',$roomcount);
			
			//2.找同学
			$class_field = 'tbl_allmsg.STU_NAME,tbl_sex.sex,tbl_city.CITY_NAME';
			$class_join_1 = 'LEFT JOIN tbl_sex ON tbl_allmsg.STU_SEX=tbl_sex.id';
			$class_join_2 = 'LEFT JOIN tbl_city  ON tbl_allmsg.STU_CITY=tbl_city.CITY_ID';
			$class_where = "tbl_allmsg.STU_BJID='$class_id' and tbl_allmsg.STU_NUM != '$stuID'";
			$class_res = $M->field("$class_field")->join("$class_join_1")->join("$class_join_2")->where("$class_where")->select();
			$class_count = count($class_res);
			$this->assign('class_count',$class_count)->assign('class_res',$class_res)->assign('class_id',$class_id);
			
			//3.找辅导员
			$this->assign('teacher',$teacher);

			//4.找志同道合
			$hobbymates = getHobbymates($stuname);
			$hobbymates_count = array_shift($hobbymates);
			$this->assign('hobbymates_count',$hobbymates_count)->assign('hobbymates',$hobbymates);
			
		//数据展示栏	
			//1.同乡比例
			/*
			*	$city_name          城市名称
			*	$city_count         同乡人数
			*	$other_count        其余非同乡人数
			*	$city_rate          同乡比例
			*	$allstu	            学校总人数
			*   $other_rate         其余非同乡比例
			*	$city_boy_count	    同乡中男的人数
			*   $city_boy_rate      同乡中男的比例
			*   $city_girl_count	同乡中女的人数
			*	$city_girl_rate     同乡中男的比例	
			*/
			$CITY = M('city')->field('CITY_NAME')->select();
			$city_name = $CITY[0]['CITY_NAME'];
			$allstu = count($M->field('STU_CITY')->select());
			$city_count = count($M->where("STU_CITY=$city_id")->select());
			$city_rate = (round($city_count/$allstu,2)*100).'%';
			$other_count = $allstu - $city_count;
			$other_rate =(round($other_count/$allstu,2)*100).'%';
			$city_boy_count	 = count($M->where('STU_CITY=%d and STU_SEX=0 ',$city_id)->select());
			$city_boy_rate = (round($city_boy_count/$city_count,2)*100).'%';
			$city_girl_count = count($M->where('STU_CITY=%d and STU_SEX=1 ',$city_id)->select());
			$city_girl_rate = (round($city_girl_count/$city_count,2)*100).'%';
			$this->assign('city_name',$city_name)->assign('city_count',$city_count)->assign('city_rate',$city_rate)->assign('other_count',$other_count)->assign('other_rate',$other_rate)->assign('city_boy_count',$city_boy_count)->assign('city_girl_count',$city_girl_rate)->assign('city_boy_rate',$city_boy_rate)->assign('city_girl_rate',$city_girl_rate);
			//2.男女比例
			/*
			*	$xy_all_count			学院总人数
			*	$xy_boy_count			学院男生数
			*	$xy_boy_rate			学院男生比例
			*	$xy_girl_count			学院女生数
			*	$xy_girl_rate			学院女生比例
			*	$school_boy_count		学校男生数
			*	$school_boy_rate		学校男生比例
			*	$school_girl_count		学校女生数
			*	$school_girl_rate		学校女生比例
			*	
			*/
			$school_boy_count = count($M->where("STU_SEX=0")->select());
			$school_girl_count = count($M->where("STU_SEX=1")->select());
			$school_boy_rate = (round($school_boy_count/$allstu,2)*100).'%';
			$school_girl_rate = (round($school_girl_count/$allstu,2)*100).'%';
			$xy_all_count = count($M->where("STU_XY=$xy_id")->select());
			$xy_boy_count = count($M->where("STU_XY=$xy_id and STU_SEX=0")->select());
			$xy_girl_count = count($M->where("STU_XY=$xy_id and STU_SEX=1")->select());
			$xy_boy_rate = (round($xy_boy_count/$xy_all_count,2)*100).'%';
			$xy_girl_rate = (round($xy_girl_count/$xy_all_count,2)*100).'%';
			$this->assign('xy_boy_count',$xy_boy_count)->assign('xy_girl_count',$xy_girl_count)->assign('xy_boy_rate',$xy_boy_rate)->assign('xy_girl_rate',$xy_girl_rate)->assign('school_boy_count',$school_boy_count)->assign('school_girl_count',$school_girl_count)->assign('school_boy_rate',$school_boy_rate)->assign('school_girl_rate',$school_girl_rate);
			//3.同年同月及星座比例
			/*
			*	$birth_year 		本人的出生年
			*	$birth_month		本人的出生月
			*	$birth_count		同年同月出生的人数
			*	$other_birth_count  非同年同月出生的人数
			*	$star_name 			本人星座名称
			*	$star_id 			本人星座id
			*	$star_count			同星座人数
			*	$other_star_count 	不同星座人数
			*/

			$star_return = getstar($M,$allstu,$birth);
			$this->assign('birth_count',$star_return['birth_count'])->assign('other_birth_count',$star_return['other_birth_count'])->assign('star_name',$star_return['star_name'])->assign('star_count',$star_return['star_count'])->assign('other_star_count',$star_return['other_star_count']);
			$this->display();
		}else{
			echo"<script>alert('please login first');
			location.href = 'index.php?m=Home&c=Index&a=index';
			</script>";
		}//判断是否已登陆
	}

}
