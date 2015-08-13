(function(target1,target2){//第一个 登录 第二个 爱好QQ手机 注意 须在HTML文件id=“qq_d”后面的12个A标签的父元素DIV 加上id="post_behavior"
    var user_name_c = document.getElementById("user_name"),
        password_c = document.getElementById("password"),
        phone_d = document.getElementById("phone_d"),
        qq_d = document.getElementById("qq_d"),
        b_d = document.getElementById("behavior_d"),
        div01 = document.getElementById("user_name_d"),
        div02 = document.getElementById("password_d"),
        sub = document.getElementById("login_sub"),
        big = document.getElementById("login_page_father"),
        notice = document.getElementById("warming"),
        logo = document.getElementById("login_logo"),
        skip = document.getElementById("skip"),
        yes = document.getElementById("yes"),
        close = document.getElementById("close"),
        wap = document.getElementById("wap"),
        login = document.getElementById("login"),
        login1 = document.getElementById("login1"),
        login2 = document.getElementById("login2"),
        xhr = ajaxObject.createXhr(),
        send,
        b_arr = [false,false],
        userTest = /[0-9]+/,
        passwordTest = /\s+/,
        b_c = true,
        timer;
        eventHandler.addEvent(window,"resize",function(){
            if(big.style.display == "none") return;
            clearTimeout(timer);
            timer = setTimeout(function(){
                big.style.top = (document.documentElement.clientHeight - 280)/2 + "px";
            },300)
        })
        eventHandler.addEvent(user_name_c,"blur",function(){
         if(this.value.match(userTest)!=null&&this.value.match(userTest)[0].length != 10 || this.value.length != 10){
            if(this.value != ""){
                this.style.border = "2px solid #FF3030";
            }else{
                this.style.border = "none";
            }
            b_arr[0] = false;
        }else{
            this.style.border = "2px solid #50930c";
            b_arr[0] = true;
        }
    })
        eventHandler.addEvent(password_c,"blur",function(){
         if(this.value.length == 0||this.value.length < 6||passwordTest.test(this.value)){
            if(this.value != ""){
                this.style.border = "2px solid #FF3030";
            }else{
                this.style.border = "none";
            }
            b_arr[1] = false;
        }else{
            this.style.border = "2px solid #50930c";
            b_arr[1] = true;
        }
    })
        eventHandler.addEvent(sub,"click",function(){
            if(b_arr[0] && b_arr[1]){
                // send = ajaxObject.encode({"user_name":user_name_c.value,"password":password_c.value});//帐号密码
                // ajaxObject.POST(xhr,send,target1,function(x){//发送
                //     if(x != true){
                //         alert(url);
                //         return false;
                //     }else{
                         logo.src = "Public/image/finish.png";
                        animation.move(big,{"height":"460","top":(document.documentElement.clientHeight - 460)/2 + ""},500);
                        animation.move(div01,{"left":"-100","opacity":"0"},500);
                        setTimeout(function(){
                                animation.move(div02,{"left":"-100","opacity":"0"},500);
                            },150)
                        setTimeout(function(){
                                animation.move(sub,{"left":"-100","opacity":"0"},500);
                            },300);
                        animation.move(phone_d,{"top":"72","opacity":"1.0"},1000);
                        animation.move(qq_d,{"top":"132","opacity":"1.0"},1000);
                        animation.move(skip,{"top":"380","opacity":"1.0"},1000);
                        animation.move(yes,{"top":"380","opacity":"1.0"},1000);
                        animation.move(b_d,{"top":"192","opacity":"1.0"},1000,function(){
                            div01.style.display = "none";
                            div02.style.display = "none";
                            sub.style.display = "none";
                        });
                    // }
                // });
            }else{
                if(!b_c){
                    return;
                }
                notice.style.display = "block";
                b_c = false;
                animation.move(notice,{"top":"110","opacity":"1.0"},1000,
                    function(){
                        animation.move(notice,{"top":"80","opacity":"0"},1000,function(){
                            notice.style.top = "140px";
                            notice.style.display = "none";
                            b_c = true;
                        })
                    }
                    );
            }
        })

    if(login){
    	eventHandler.addEvent(login,"click",function(){
    	    wap.style.display = "block";
    	    big.style.display = "block";
    	    animation.move(big,{"top":"300","opacity":"1.0"},500,function(){
    	        if (parseFloat(getStyle(big,"top")) > 280) {
    	            animation.move(big,{"top":"200"},300,function(){
    	                animation.move(big,{"top":"280"},300);
    	            });
    	        };
    	    });
    	})
    }else if(login1&&login2){
    	eventHandler.addEvent(login1,"click",function(){
    	    wap.style.display = "block";
    	    big.style.display = "block";
    	    animation.move(big,{"top":"300","opacity":"1.0"},500,function(){
    	        if (parseFloat(getStyle(big,"top")) > 280) {
    	            animation.move(big,{"top":"200"},300,function(){
    	                animation.move(big,{"top":"280"},300);
    	            });
    	        };
    	    });
    	});
    	eventHandler.addEvent(login2,"click",function(){
    	    wap.style.display = "block";
    	    big.style.display = "block";
    	    animation.move(big,{"top":"300","opacity":"1.0"},500,function(){
    	        if (parseFloat(getStyle(big,"top")) > 280) {
    	            animation.move(big,{"top":"200"},300,function(){
    	                animation.move(big,{"top":"280"},300);
    	            });
    	        };
    	    });
    	})
    }
    eventHandler.addEvent(close,"click",function(){
        wap.style.display = "none";
        animation.move(big,{"top":"-280","opacity":"0"},1000,function(){
            big.style.display = "none";
        })
    })
    var post_beh = document.getElementById("post_behavior"),
     	stu_tel = document.getElementById("phone"),
     	stu_qq = document.getElementById("qq"),
     	sub = document.getElementById("yes"),
    	xhr = ajaxObject.createXhr(),
    	josn,
    	value01,
    	value02,
    	beh_arr = [];
    eventHandler.live(post_beh,post_beh.children,"click",function(e){
    	if(this.check == undefined){
    		this.check = true;
    	}
    	if(this.check){
    		if(beh_arr.length > 2){
    			return;
    		}
    		this.style.background = "rgb(255,134,54)";
    		beh_arr.push(this.innerHTML);
    		this.check = false;
    	}else{
    		this.style.background = "rgb(92,179,220)";
    		for(var i = 0;i < beh_arr.length;i++){
    			if(beh_arr[i] == this.innerHTML){
    				beh_arr.splice(i,1);
    			}
    		}
    		this.check = true;
    	}
    	return false;
    });
    window.beh_arr = beh_arr;
    eventHandler.addEvent(sub,"click",function(e){
    	value01 = stu_tel.value;
    	value02 = stu_qq.value;
    	json = {"stu_tel":value01,"stu_qq":value02};//手机QQ
    	for(var i = 0;i < beh_arr.length;i++){
    		json["beh_arr" + i] = beh_arr[i];//爱好
    	}
    	json = ajaxObject.encode(json);
    	ajaxObject.POST(xhr,json,target2,function(res){
    		alert(res);
    	});
    	return false;
    });
})("aw","aw");






