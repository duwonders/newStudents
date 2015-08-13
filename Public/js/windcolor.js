
    function bind(fn,context,ag){
        return function(){
            fn.call(context,ag)
        }
    }


    function constant(target,json,speed,callback){
        var timeScale = 1000 / 60,
            count = speed / timeScale,
            begin;

        if(target.timer){
            // console.log(1);
            clearTimeout(target.timer);
        }

        //设初值
        for(var key in json){
            if(window.getComputedStyle){
                begin = parseFloat(window.getComputedStyle(target,null)[key]);
            }else{
                begin = parseFloat(target.currentStyle[key]);
            }
            target[key] = (json[key] - begin) / count;
        }

        target.timer = setInterval(function(){
            var oldValue,newValue;

            var stop = true;

            for(var key in json){
                //运动算法
               if(window.getComputedStyle){
                    oldValue = parseFloat(window.getComputedStyle(target,null)[key]);
                }else{
                    oldValue = parseFloat(target.currentStyle[key]);
                }

                if(oldValue != json[key]){
                    stop = false;
                }

                if(target.addEventListener && Math.abs(oldValue - json[key]) < 1){
                    target.style[key] = json[key] + "px";
                }else if(!target.addEventListener &&  Math.abs(oldValue - json[key]) < 25){
                    target.style[key] = json[key] + "px";
                }else{
                    newValue = oldValue + target[key];
                    target.style[key] = newValue + "px";
                }
            }

            if(stop){
                clearInterval(target.timer);
                typeof callback == "function" && callback();
            }

        },timeScale);
    }
    
    (function(){//回到顶部
        var go_top = document.getElementById("go_top");
        function top(speed){
            var timeScale = 1000/60,
                timer,
                speed = speed / timeScale;
                y = window.scrollY || document.documentElement.scrollTop,
                xy = y / speed;
            if(!timer){

                timer = setInterval(function(){
                    if(window.scrollY < 100 || !window.scrollY && document.documentElement.scrollTop < 100){
                    window.scrollTo(0,0);
                    clearInterval(timer);
                    timer = null;
                }
                    window.scrollTo(0,y = y - xy);
                },timeScale)
            }
        }
        eventHandler.addEvent(go_top,"click",function(e){
            top(200);
            return false;
        })
    })();
    
    (function(){//Top渐隐
        var go_top = document.getElementById("go_top"),
            b = true;
        eventHandler.addEvent(window,"scroll",function(e){
            if(window.scrollY > 100 ||!window.scrollY && document.documentElement.scrollTop > 100){
                if(b){
                    b = false;
                    animation.move(go_top,{"bottom":"200","opacity":"1.0"},300);
                }
            }else{
                if(!b){
                    b = true;
                    animation.move(go_top,{"bottom":"100","opacity":"0"},300);
                }
            }
        })
    })();


    (function(speed,num){//顶部渐隐
        var oheader = document.getElementById("header"),
            timer,
            timeScale = 1000/60,
            count = speed / timeScale,
            x = num / count,
            bCount = true,
            exp = /[0-9]+/,
            IeFileter,
            number;
        eventHandler.addEvent(window,"scroll",function(e){
            if(window.scrollY > 300 ||!window.scrollY && document.documentElement.scrollTop > 300){
                if(!bCount) return false;
                bCount = false;
                clearInterval(timer);
                oheader.className = "header fixed";
                if(oheader.addEventListener){
                    oheader.style.opacity = 0;
                }else{
                    oheader.style.filter = "alpha(opacity=0)";
                    //filter:alpha(opacity=50);
                }
                
                oheader.style.top = "0px";
                timer = setInterval(function(){
                    if(oheader.addEventListener){
                        oheader.style.opacity = parseFloat(oheader.style.opacity) + x + "";
                    }else{
                        IeFileter = oheader.style.filter;
                        number = IeFileter.match(exp)[0];
                        oheader.style.filter = "alpha(opacity=" +  (parseFloat(number) + x*100) + ")";
                        number = oheader.style.filter.match(exp)[0];
                    }
                    if(oheader.addEventListener && oheader.style.opacity >= "1"){
                        clearInterval(timer);
                    }else if(number >= 100){
                        clearInterval(timer);
                    }
                },timeScale);
            }else{
                if(bCount) return false;
                bCount = true;
                clearInterval(timer);
                timer = setInterval(function(){
                    if(oheader.addEventListener){
                        oheader.style.opacity = parseFloat(oheader.style.opacity) - x + "";
                    }else{
                        IeFileter = oheader.style.filter;
                        number = IeFileter.match(exp)[0];
                        oheader.style.filter = "alpha(opacity=" +  (parseFloat(number) - x*100) + ")";
                        number = oheader.style.filter.match(exp)[0];
                    }
                    if(oheader.addEventListener&& oheader.style.opacity <= "0"){
                        clearInterval(timer);
                        oheader.className = "header";
                        oheader.style.opacity = 1;
                        oheader.style.filter = "alpha(opacity=100)";
                    }else if(number <= 10){
                        clearInterval(timer);
                        oheader.className = "header";
                        oheader.style.opacity = 1;
                        oheader.style.filter = "alpha(opacity=100)";
                    }
                },timeScale);
            }
        })
    })(500,1);
  (function(){//云动画
        var c1 = document.getElementById("cloud01"),
            c5 = document.getElementById("cloud04");
        if(!c1.addEventListener) return "IE8.........";
        function c1R(){
            animation.move(c1,{"left":100},5000,c1L);
        }
        function c1L(){
            animation.move(c1,{"left":-70},5000,c1R);
        }
        function c5R(){
            animation.move(c5,{"right":50},5000,c5L);
        }
        function c5L(){
            animation.move(c5,{"right":20},5000,c5R);
        }
        c1R();
        c5R();
            
    })();


    (function(){//登录
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
                send = ajaxObject.encode({"user_name":user_name_c.value,"password":password_c.value});
                //ajaxObject.POST(xhr,send,"xxx.php");
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
        })
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
         eventHandler.addEvent(close,"click",function(){
            wap.style.display = "none";
            animation.move(big,{"top":"-280","opacity":"0"},1000,function(){
                big.style.display = "none";
            })
        })
    })();
    (function (){
        var opage_ul = document.getElementById("color_ul"),
            opage = document.querySelectorAll(".page_mid"),
            obtn = opage_ul.getElementsByTagName("a");
            for(var i = 0; i<opage.length;i++){
                var index = 2;
                obtn[i].onclick = (function (i){       
                    return function(){
                        opage[index].style.display = "none";    
                        opage[i].style.display = "block";
                        obtn[index].removeAttribute("class","page_active");
                        obtn[i].setAttribute("class","page_active");
                        index = i;
                        if(i == 0){
                          ostuturn();
                        }
                        else if(i == 1){
                          oteaturn(0);
                        }
                        else if(i == 2){
                          opicturn(0);
                        }
                        else if(i == 3){
                          ovideoturn(0,1,1,2);
                        }
                    }
                })(i);
            }
            var stu = document.getElementById("stu").getElementsByTagName("a");
                function ostuturn(){
                  for(var i = 0;i < stu.length; i++){
                    var num = i+1;
                    stu[i].style.background="url('Public/image/person_"+ num +".png') no-repeat 50% 50%";
                    stu[i].style.backgroundSize = "cover";
                  }
                }
            var opic_btn = document.getElementById("pic_btn"),
                opic = document.getElementById("pic_main"),
                main_page = opic.querySelectorAll(".page_fix"),
                opicbtn = opic_btn.querySelectorAll(".page_bottom_li"),
                opicbtnstyle = opic_btn.getElementsByTagName("a");
                opicpre = opic_btn.querySelectorAll(".page_bottom_li_special")[0],
                opicnex = opic_btn.querySelectorAll(".page_bottom_li_special")[1],
                opicindex = 0,
                oimg0 = document.getElementById("win_img_1"),
                oimg1 = document.getElementById("win_img_2"),
                oimg2 = document.getElementById("win_img_3"),
                oimg3 = document.getElementById("win_img_4"),
                img0  = oimg0.getElementsByTagName("a"),
                img1  = oimg1.getElementsByTagName("a"),
                img2  = oimg2.getElementsByTagName("a"),
                img3  = oimg3.getElementsByTagName("a");
                function opicturn(page){
                  if( page < 0 ){
                    page = 0;
                  }
                  else if(page > 3){
                    page = 3;
                    opicindex = 2;
                  }
                  else if(page == 0){
                    for(var i = 0;i < img0.length;i++){
                      img0[i].style.background = "url('Public/image/color_"+ i +".jpg') no-repeat 50% 50%";
                      img0[i].style.backgroundSize = "cover";
                    }                
                  }
                  else if(page == 1){
                    for(var i = 0;i < img1.length;i++){
                      var num = i+8;
                      img1[i].style.background = "url('Public/image/color_"+ num +".jpg') no-repeat 50% 50%";
                      img1[i].style.backgroundSize = "cover";
                    }
                  }
                  else if(page == 2){
                    for(var i = 0;i < img2.length;i++){
                      var num = i+16;
                      img2[i].style.background = "url('Public/image/color_"+ num +".jpg') no-repeat 50% 50%";
                      img2[i].style.backgroundSize = "cover";
                    }
                  }
                  else if(page == 3){
                    for(var i = 0;i < img3.length;i++){
                      var num = i+24;
                      img3[i].style.background = "url('Public/image/color_"+ num +".jpg') no-repeat 50% 50%";
                      img3[i].style.backgroundSize = "cover";
                    }
                  }
                  
                  main_page[opicindex].style.display = "none";
                  main_page[page].style.display = "block";
                  opicbtnstyle[opicindex+1].removeAttribute("class","page_bottom_spe");
                  opicbtnstyle[page+1].setAttribute("class","page_bottom_spe");
                  opicindex = page;

                }
                  opicpre.onclick = function (){
                    opicturn(opicindex-1)
                  }  ;
                  opicnex.onclick = function (){
                    opicturn(opicindex+1)
                  }  ;
                  opicbtn[0].onclick = function (){
                    opicturn(0)
                  }  ;
                  opicbtn[1].onclick = function (){
                    opicturn(1)
                  }  ;
                  opicbtn[2].onclick = function (){
                    opicturn(2)
                  }  ;
                  opicbtn[3].onclick = function (){
                    opicturn(3)
                  }  ;
            var teacher_btn = document.getElementById("teacher_choose"),
                oteacher = document.getElementById("teacher_page"),
                teacher_page = oteacher.querySelectorAll(".page_fix"),
                oteabtn = teacher_btn.querySelectorAll(".page_bottom_li"),
                oteabtnstyle = teacher_btn.getElementsByTagName("a");
                oteapre = teacher_btn.querySelectorAll(".page_bottom_li_special")[0],
                oteanex = teacher_btn.querySelectorAll(".page_bottom_li_special")[1],
                oteaindex = 0,
                oteacher1 =  document.getElementById("teacher_1"),
                oteacher2 =  document.getElementById("teacher_2"),
                oteacher3 =  document.getElementById("teacher_3"),
                teacher1  = oteacher1.getElementsByTagName("a"),
                teacher2  = oteacher2.getElementsByTagName("a"),
                teacher3  = oteacher3.getElementsByTagName("a");

                function oteaturn(page){
                  if( page < 0 ){
                    page = 0;
                  }
                  else if(page > 2){
                    page = 2;
                    oteaindex = 1;
                  }
                  else if(page == 0){
                      for(var i = 0;i < teacher1.length;i++){
                        var num = i+1;
                      teacher1[i].style.background = "url('Public/image/teacher_"+ num +".jpg') no-repeat 50% 50%";
                      teacher1[i].style.backgroundSize = "cover";
                    } 
                  }
                  else if(page == 1){
                      for(var i = 0;i < teacher2.length;i++){
                        var num = i+9;
                      teacher2[i].style.background = "url('Public/image/teacher_"+ num +".jpg') no-repeat 50% 50%";
                      teacher2[i].style.backgroundSize = "cover";
                    } 
                  }
                  else if(page == 2){
                      for(var i = 0;i < teacher3.length;i++){
                        var num = i+17;
                      teacher3[i].style.background = "url('Public/image/teacher_"+ num +".jpg') no-repeat 50% 50%";
                      teacher3[i].style.backgroundSize = "cover";
                    } 
                  }
                  teacher_page[oteaindex].style.display = "none";
                  teacher_page[page].style.display = "block";
                  oteabtnstyle[oteaindex+1].removeAttribute("class","page_bottom_spe");
                  oteabtnstyle[page+1].setAttribute("class","page_bottom_spe");
                  oteaindex = page;
                }
                  oteapre.onclick = function (){
                    oteaturn(oteaindex-1)
                  }  ;
                  oteanex.onclick = function (){
                    oteaturn(oteaindex+1)
                  }  ;
                  oteabtn[0].onclick = function (){
                    oteaturn(0)
                  }  ;
                  oteabtn[1].onclick = function (){
                    oteaturn(1)
                  }  ;
                  oteabtn[2].onclick = function (){
                    oteaturn(2)
                  }  ;
            var ovideo = document.getElementById("choose_video"),
                turn_video = ovideo.querySelectorAll(".page_fix"),
                ovideo_btn = document.getElementById("video_btn"),
                ovideobtn = ovideo_btn.getElementsByTagName("a"),
                ovideo = document.getElementById("video"),
                ovideo1 = document.getElementById("video1"),
                video = ovideo.getElementsByTagName("a"),
                video1 = ovideo1.getElementsByTagName("a");
              function ovideoturn(a,b,x,y){
                turn_video[a].style.display = "block";
                turn_video[b].style.display = "none";
                ovideobtn[x].setAttribute("class","page_bottom_spe");
                ovideobtn[y].removeAttribute("class","page_bottom_spe");
                if(a == 0){
                    for(var i = 0;i < video.length;i++){
                      video[i].style.background = "url('Public/image/video.png') no-repeat 50% 50%";
                    }
                }
                else if(a == 1){
                    for(var i = 0;i < video1.length;i++){
                      video1[i].style.background = "url('Public/image/video.png') no-repeat 50% 50%";
                    }
                }
              } 
                ovideobtn[0].onclick = function (){
                  ovideoturn(0,1,1,2);
                } 
                ovideobtn[1].onclick = function (){
                  ovideoturn(0,1,1,2);
                } 
                ovideobtn[2].onclick = function (){
                  ovideoturn(1,0,2,1);
                } 
                ovideobtn[3].onclick = function (){
                  ovideoturn(1,0,2,1);
                } 
              opicturn(0);
    })();
