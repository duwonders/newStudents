<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->display();
    }


    public function login(){
      if($_POST['username'] != null){
        $username = I('username');// 获取学号
        $password = I('password');// 获取生分证
        if($result = M('allmsg')->query("SELECT * FROM `tbl_allmsg` WHERE STU_NUM='$username' AND STU_SFZH='$password'")){
          session('userMessage', $result[0]);
          $modle = M("hobby");
          $where = ['STU_NAME' => $_SESSION['userMessage']['STU_NAME'],];
          if($modle->where($where)->select()){
            $data['is_hobby'] = 1;
          }
           //查看是否已填兴趣爱好
          $data['status'] = 1;
          $this->ajaxReturn($data, 'json');
        }else{
          $data['status'] = 0;
          $this->ajaxReturn($data, 'json');
        }
      }else{
        $data['status'] = 0;
        $this->ajaxReturn($data, 'json');
      }
    }
//登陆方法
    public function logOut(){
      if($_SESSION){ 
        session('userMessage',null);
        $this->redirect("Index/index"); 
        return;
      }else{
        $this->redirect("Index/index"); 
        return;
      }
    }
//退出登陆方法
    public function insertMsg(){
      if(I('post.') != null){
        $qq = I('qq_num');
        $phone = I('phone_num');
        $hobby1 = I('hobby1');
        $hobby2 = I('hobby2');
        $hobby3 = I('hobby3');
        $name = $_SESSION['userMessage']['STU_NAME'];
        $modle = M("hobby");
        $dat["STU_NAME"] = $name;
        $dat["QQ"] = $qq;
        $dat["PHONE"] = $phone;
        $dat["HOBBY1"] = $hobby1;
        $dat["HOBBY2"] = $hobby2;
        $dat["HOBBY3"] = $hobby3;
         // $sql = "INSERT INTO `tbl_hobby`(STU_NAME,QQ,PHONE,HOBBY1,HOBBY2,HOBBY3)VALUES('$name','$qq','$phone','$hobby1','$hobby2','$hobby3')";
        if($result = $modle->add($dat)){
          $data['status'] = 1;
          $this->ajaxReturn($data, 'json');
        }else{
          $data['status'] = 0;
          $this->ajaxReturn($data, 'json');
        }
      }else{
        $data['status'] = 0;
        $this->ajaxReturn($data, 'json');
      }
    }
//插入兴趣爱好方法
//     public function hign(){
//       if($_SESSION['userMessage']){
//         echo "<script>window.location.href='??????'</script>";
//       }else{
//         echo "<script>window.location.href='index.php?m=Home&c=Index&a=index'</scirpt>";
//       }
//     }
// //登陆大声嗨的验证端口

}