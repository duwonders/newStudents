接口文档
1.接口请求方式为POST
2.返回格式
    {
        data:""
    }
3.错误码说明
	100 正确返回	
	200 没有找到
	300 服务器繁忙
	-400 用户登录错误


公共接口
1.获取Banner
    URL: Home/Api/banner
    Request: null;
    Response: 
    {
        {"href": 'http://www.baidu.com', "img": ""},
        {"href": 'http://www.baidu.com', "img": ""},
        {"href": 'http://www.baidu.com', "img": ""},
    }

2.登录
	URL: Home/Api/login/
    Request: {
                stuname:"",
                password:""//身份证后六位
    };
    Response: 
    {
        stuID:1,//
        stuname:XXX,//姓名
    }

用户接口
1.获取个人信息
	URL: Home/Api/getSelf/
    Request: null;
    Response: 
    {
        stu_num:1,//学号
        stuname:XXX//姓名
        xy:经管//学院
        zy:工商管理类//专业
        teacher:XXX,//老师
        qsldh:19,//寝室楼栋号
        qsh:522,//寝室号
        city:重庆,//籍贯        	
    }

2.室友
	URL: Home/Api/getRoommates/
    Request: null;
    Response: 
    {
        stuname:,//室友名字
        qsldh:19,//寝室楼栋号
        qsh:522,//寝室号
        xy:经管,//学院
        zy:工商管理类,//专业
        city:,//籍贯
        roomcount:,//寝室总人数
    }

3.同学
	URL: Home/Api/getClassmates/
    Request: null;
    Response: 
    {
        stuname:,//名字
        sex:,//性别
        city:,//籍贯
        xy:经管//学院
        zy:工商管理类//专业
        class_id:,//班级代号
    }

4.辅导员
	URL: Home/Api/getTeacher/
    Request: null;
    Response: 
    {
        teacher:XXX,//老师
    }

5.寻找志同道合的好友
	URL: Home/Api/getHobbymates/
    Request: null;
    Response: 
    {
        $hobbymatesname:,//与我有共同兴趣爱好的人姓名
        $hobbymateshobby:,//共同兴趣爱好
        $hobbymatescount://与我有共同兴趣爱好的人数
    }

6.同乡
	URL: Home/Api/getCity/
    Request: null;
    Response: 
    {
        $city_name:,//城市名称
        $city_count:,//同乡人数
        $city_rate:,//同乡比例
        $city_boy_count	:,//同乡中男的人数
		$city_boy_rate:,//同乡中男的比例
		$city_girl_count:,//同乡中女的人数
		$city_girl_rate:,//同乡中男的比例
    }

7.学院
	URL: Home/Api/getXy/
    Request: null;
    Response: 
    {
        $xy_name:,//学院名称
        $xy_count:,//学院人数
        $xy_rate:,//学院比例
        $xy_boy_count	:,//学院中男的人数
		$xy_boy_rate:,//学院中男的比例
		$xy_girl_count:,//学院中女的人数
		$xy_girl_rate:,//学院中男的比例
    }


8.学校
	URL: Home/Api/getSchool/
    Request: null;
    Response: 
    {
        $school_count:,//学校总人数
        $school_boy_count	:,//学校中男的人数
		$school_boy_rate:,//学校中男的比例
		$school_girl_count:,//学校中女的人数
		$school_girl_rate:,//学校中男的比例
    }

9.出生年月
	URL: Home/Api/getBirth/
    Request: null;
    Response: 
    {
        $birth_year:,//本人的出生年
		$birth_month:,//本人的出生月
		$birth_count:,//同年同月出生的人数
		$other_birth_count:,//非同年同月出生的人数
		$star_name:,//本人星座名称
		$star_count:,//同星座人数
		$other_star_count:,//不同星座人数
    }