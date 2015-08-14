<?php
namespace Home\Controller;
use Think\Controller;
class ApiController extends Controller{

    //banner
    public function banner(){
        $data = M('tbl_banner')->where('status = 1')->field('banner_src')->select();
        $this->ajaxReturn($data);
    }


    //登录
    public function login(){
        $stuname = I('post.STU_NAME');
        $password = I('post.password');
        $info = M('tbl_allmsg')->where("STU_NUM=$stuname")->select();
        $this->ajaxReturn($info);
    }


    
    //个人信息
    public function getSelf(){
        $M = M('tbl_allmsg');
        $stuname= $M->where("STU_NAME=$stuname")->select();
        $data['stuname'] = $stuname;
        $xy = $M->join('LEFT JOIN tbl_xy ON tbl_allmsg.$stu_xy = tbl_xy.xy_id')->select();
        $data['xy'] = $xy;
        $zy = $M->join('LEFT JOIN tbl_zy ON tbl_allmsg.$stu_zy = tbl_zy.zy_id')->select();
        $data['zy'] = $zy;
        $city = $M->join('LEFT JOIN tbl_city ON tbl_allmsg.$stu_city = tbl_city.city_id')->select();
        $data['city'] = $city;
        $teacher = $M->join('LEFT JOIN tbl_teacher ON tbl_allmsg.$teacher_id = tbl_teacher.id')->select();
        $data['teacher'] = $teacher;
        $this->ajaxReturn($data);
    }



    //查询室友信息
    public function getRoommates(){
        $M = M('tbl_allmsg');
        $room_field = 'tbl_allmsg.STU_NAME,tbl_city.CITY_NAME';
        $room_join = 'LEFT JOIN tbl_city ON tbl_allmsg.STU_CITY = tbl_city.CITY_ID';
        $room_where = "tbl_allmsg.STU_QSLDH = '$qsldh' and tbl_allmsg.STU_QSH = '$qsh' ";
        $roommates = $M->field("$room_field")->join("$room_join")->where("$room_where")->select();
        $data['roommates'] = $roommates;
        $roomcount = count($roommates);
        $data['roomcount'] = $roomcount;
        $xy = $M->join('LEFT JOIN tbl_xy ON tbl_allmsg.$stu_xy = tbl_xy.xy_id')->select();
        $data['xy'] = $xy;
        $zy = $M->join('LEFT JOIN tbl_zy ON tbl_allmsg.$stu_zy = tbl_zy.zy_id')->select();
        $data['zy'] = $zy;      
        $this->ajaxReturn($data);
    }
    

    //查询同学信息
    public function getClassmates(){
        $M = M('tbl_allmsg');
        $class_field = 'tbl_allmsg.STU_NAME,tbl_sex.sex,tbl_city.CITY_NAME';
        $class_join_1 = 'LEFT JOIN tbl_sex ON tbl_allmsg.STU_SEX=tbl_sex.id';
        $class_join_2 = 'LEFT JOIN tbl_city  ON tbl_allmsg.STU_CITY=tbl_city.CITY_ID';
        $class_where = "tbl_allmsg.STU_BJID='$class_id' and tbl_allmsg.STU_NUM != '$stuID'";
        $class_res = $M->field("$class_field")->join("$class_join_1")->join("$class_join_2")->where("$class_where")->select();
        $data['class_res'] = $class_res;
        $class_count = count($class_res);
        $data['class_count'] = $class_count;
        $xy = $M->join('LEFT JOIN tbl_xy ON tbl_allmsg.$stu_xy = tbl_xy.xy_id')->select();
        $data['xy'] = $xy;
        $zy = $M->join('LEFT JOIN tbl_zy ON tbl_allmsg.$stu_zy = tbl_zy.zy_id')->select();
        $data['zy'] = $zy;  
        $this->ajaxReturn($data);
    }



    //查辅导员
    public function getTeacher(){
        $M = M('tbl_allmsg');
        $teacher = $M->join('LEFT JOIN tbl_teacher ON tbl_allmsg.$teacher_id = tbl_teacher.id')->select();
        $data['teacher'] = $teacher;
        $this->ajaxReturn($data);
    }



    //查志同道合的好友
    public function getHobbymates(){
        $my_hobby = M('tbl_hobby')->where("STU_NAME='$stuname'")->select();
        $my_hobby1 = $my_hobby[0]['HOBBY1'];
        $my_hobby2 = $my_hobby[0]['HOBBY2'];
        $my_hobby3 = $my_hobby[0]['HOBBY3'];
        $hobby_where = "HOBBY1 IN ('$my_hobby1','$my_hobby2','$my_hobby3') OR HOBBY2 IN ('$my_hobby1','$my_hobby2','$my_hobby3') OR HOBBY3 IN ('$my_hobby1','$my_hobby2','$my_hobby3')";
        $all_hobby = M('tbl_hobby')->where("$hobby_where")->select();
        $hobbymates = array();
        $data['hobbymates'] = $hobbymates;
        $hobbymatescount = count($all_hobby) - 1;
        $data['hobbymatescount'] = $hobbymatescount;
        $this->ajaxReturn($data);
    }




    //查同乡
    public function getCity(){
        $CITY = M('tbl_city')->field('CITY_NAME')->select();
        $city_name = $CITY[0]['CITY_NAME'];
        $data['city_name'] = $city_name;
        $allstu = count($M->field('STU_CITY')->select());
        $data['allstu'] = $allstu;
        $city_count = count($M->where("STU_CITY=$city_id")->select());
        $data['city_count'] = $city_count;
        $city_rate = (round($city_count/$allstu,2)*100).'%';
        $data['city_rate'] = $city_rate;
        $city_boy_count  = count($M->where('STU_CITY=%d and STU_SEX=0 ',$city_id)->select());
        $data['city_boy_count'] = $city_boy_count;
        $city_boy_rate = (round($city_boy_count/$city_count,2)*100).'%';
        $data['city_boy_rate'] = $city_boy_rate;
        $city_girl_count = count($M->where('STU_CITY=%d and STU_SEX=1 ',$city_id)->select());
        $data['city_girl_count'] = $city_girl_count;
        $city_girl_rate = (round($city_girl_count/$city_count,2)*100).'%';
        $data['city_girl_rate'] = $city_girl_rate;
        $this->ajaxReturn($data);
    }



    //查学院
    public function getXy(){
        $xy_all_count = count($M->where("STU_XY=$xy_id")->select());
        $data['xy_all_count'] = $xy_all_count;
        $xy_boy_count = count($M->where("STU_XY=$xy_id and STU_SEX=0")->select());
        $data['xy_boy_count'] = $xy_boy_count;
        $xy_girl_count = count($M->where("STU_XY=$xy_id and STU_SEX=1")->select());
        $data['xy_girl_count'] = $xy_girl_count;
        $xy_boy_rate = (round($xy_boy_count/$xy_all_count,2)*100).'%';
        $data['xy_boy_rate'] = $xy_boy_rate;
        $xy_girl_rate = (round($xy_girl_count/$xy_all_count,2)*100).'%';
        $data['xy_girl_rate'] = $xy_girl_rate;
        $this->ajaxReturn($data);
    }




    //查学校
    public function getSchool(){
        $school_all_count = count($M->where("STU_SEX")->select());
        $data['school_all_count'] = $school_all_count;
        $school_boy_count = count($M->where("STU_SEX=0")->select());
        $data['school_boy_count'] = $school_boy_count;
        $school_girl_count = count($M->where("STU_SEX=1")->select());
        $data['school_girl_count'] = $school_girl_count;
        $school_boy_rate = (round($school_boy_count/$allstu,2)*100).'%';
        $data['school_boy_rate'] = $school_boy_rate;
        $school_girl_rate = (round($school_girl_count/$allstu,2)*100).'%';
        $data['school_girl_rate'] = $school_girl_rate;
        $this->ajaxReturn($data);
    }




    //查星座
    public function getBirth(){
        $stubirth = I('post.STU_BIRTH');
        $info = M('allmsg')->where("STU_BIRTH=$stubirth")->select();
        $M = M('tbl_allmsg');
        $allstu = count($M->field('STU_CITY')->select());
        $star_return = getstar($M,$allstu,$stubirth);
        $data['star_return'] = $star_return;
        $this->ajaxReturn($data);
    }
}