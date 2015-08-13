<?php
	function fuck(){
		echo "lalala";
	}

	function getstar($M,$allstu,$birth){
		$birth_year = explode('-', $birth)[0];
		$birth_month = explode('-', $birth)[1];
		$birth_day = explode(' ', explode('-', $birth)[2])[0];
		//$res= $M->query("select count(STU_CITY) from tbl_allmsg where YEAR(STU_BIRTH)=$birth_year and MONTH(STU_BIRTH)=$birth_month");
		$birth_where['YEAR(STU_BIRTH)'] = "$birth_year";
		$birth_where['MONTH(STU_BIRTH)'] = "$birth_month";
		$res = $M->where($birth_where)->field('count(STU_CITY)')->select();
		$birth_count = $res[0]['count(STU_CITY)'];
		$other_birth_count = $allstu - $birth_count;
		$stars = array(
					'1'=>array('begin'=>'120','end'=>'218','star'=>'水瓶座'),
					'2'=>array('begin'=>'219','end'=>'320','star'=>'双鱼座'),
					'3'=>array('begin'=>'321','end'=>'420','star'=>'白羊座'),
					'4'=>array('begin'=>'421','end'=>'520','star'=>'金牛座'),
					'5'=>array('begin'=>'521','end'=>'621','star'=>'双子座'),
					'6'=>array('begin'=>'622','end'=>'722','star'=>'巨蟹座'),
					'7'=>array('begin'=>'723','end'=>'822','star'=>'狮子座'),
					'8'=>array('begin'=>'823','end'=>'922','star'=>'处女座'),
					'9'=>array('begin'=>'923','end'=>'1023','star'=>'天枰座'),
					'10'=>array('begin'=>'1024','end'=>'1122','star'=>'天蝎座'),
					'11'=>array('begin'=>'1123','end'=>'1221','star'=>'射手座'),
					'12'=>array('begin'=>'1222','end'=>'119','star'=>'摩羯座'),
				);
		$sum = ($birth_month*100) + $birth_day;
		for($i=1; $i<12; $i++) {
			//讨论前11中情况
			if( ($sum >= $stars[$i]['begin']) && ($sum <= $stars[$i]['end']) ) {
				$star_id = $i;
				break;
			}
			//讨论最后一种特殊情况
			if( $sum >= 1122 || $sum<= 119) {
				$star_id = 12;
				break;
			}
		}
			
		$star_name = $stars[$star_id]['star'];
		$begin = $stars[$star_id]['begin'];
		$end = $stars[$star_id]['end'];
		if($star_id>=1 && $star_id<=11) {
			$star_where = "MONTH(STU_BIRTH)*100+DAY(STU_BIRTH) BETWEEN $begin AND $end";
			$result = $M->where("$star_where")->field('count(STU_NUM)')->select();
		}
		else {  //特殊情况
			$star_where="MONTH(STU_BIRTH)*100+DAY(STU_BIRTH) >= 1222 OR MONTH(STU_BIRTH)*100+DAY(STU_BIRTH) <= 119";
			$result = $M->where("$star_where")->field('count(STU_NUM)')->select();
		}
		$star_count = $result[0]['count(STU_NUM)'];
		$other_star_count = $allstu - $star_count;
		$star_return['birth_count'] = $birth_count;
		$star_return['other_birth_count'] = $other_birth_count;
		$star_return['star_name'] = $star_name;
		$star_return['star_count'] = $star_count;
		$star_return['other_star_count'] = $other_star_count;
		return $star_return;  
	}
	
	function getHobbymates($stuname){
			$my_hobby = M('hobby')->where("STU_NAME='$stuname'")->select();
			$my_hobby1 = $my_hobby[0]['HOBBY1'];
			$my_hobby2 = $my_hobby[0]['HOBBY2'];
			$my_hobby3 = $my_hobby[0]['HOBBY3'];
			$hobby_where = "HOBBY1 IN ('$my_hobby1','$my_hobby2','$my_hobby3') OR HOBBY2 IN ('$my_hobby1','$my_hobby2','$my_hobby3') OR HOBBY3 IN ('$my_hobby1','$my_hobby2','$my_hobby3')";
			$all_hobby = M('hobby')->where("$hobby_where")->select();
			$hobbymates = array();
			$hobbymates['count'] = count($all_hobby) - 1;
			
			//有相同兴趣爱好的人可能会太多了，不能一一展示，只取前10个人
			if($hobbymates['count'] < 10)
				$max = $hobbymates['count'] + 1;
			else 
				$max = 10;
			$flag = 0;
			for($x=0; $x<$max; $x++) {
				if($all_hobby[$x]['STU_NAME'] != $stuname) {
					$hobbymates[$x]['name'] = $all_hobby[$x]['STU_NAME'];	
					if($all_hobby[$x]['HOBBY1'] == $my_hobby1 || $all_hobby[$x]['HOBBY1'] == $my_hobby2 || $all_hobby[$x]['HOBBY1'] == $my_hobby3)
						$hobbymates[$x]['hobby'][1] = $all_hobby[$x]['HOBBY1'];
					if($all_hobby[$x]['HOBBY2'] == $my_hobby1 || $all_hobby[$x]['HOBBY2'] == $my_hobby2 || $all_hobby[$x]['HOBBY2'] == $my_hobby3)
						$hobbymates[$x]['hobby'][2] = $all_hobby[$x]['HOBBY2'];
					if($all_hobby[$x]['HOBBY3'] == $my_hobby1 || $all_hobby[$x]['HOBBY3'] == $my_hobby2 || $all_hobby[$x]['HOBBY3'] == $my_hobby3)
						$hobbymates[$x]['hobby'][3] = $all_hobby[$x]['HOBBY3'];
				} else {
					$flag = 1;
				}
			}
			//考虑到如果他本人在数据的前10条中，那么页面就只能显示9个人，现在再加一个
			if($flag == 1 && $hobbymates['count'] >= 10) {
				$hobbymates[10]['name'] =  $all_hobby[10]['STU_NAME'];
				if($all_hobby[10]['HOBBY1'] == $my_hobby1 || $all_hobby[10]['HOBBY1'] == $my_hobby2 || $all_hobby[10]['HOBBY1'] == $my_hobby3)
						$hobbymates[10]['hobby'][1] = $all_hobby[10]['HOBBY1'];
				if($all_hobby[10]['HOBBY2'] == $my_hobby1 || $all_hobby[10]['HOBBY2'] == $my_hobby2 || $all_hobby[10]['HOBBY2'] == $my_hobby3)
						$hobbymates[10]['hobby'][2] = $all_hobby[10]['HOBBY2'];
				if($all_hobby[10]['HOBBY3'] == $my_hobby1 || $all_hobby[10]['HOBBY3'] == $my_hobby2 || $all_hobby[10]['HOBBY3'] == $my_hobby3)
						$hobbymates[10]['hobby'][3] = $all_hobby[10]['HOBBY3'];
			}
			return $hobbymates;
	}
