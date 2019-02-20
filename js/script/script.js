$(document).ready(function(){

/* page_1 */

var window_Width = $(window).width();   
    
    var menuon = "off";
    
    $(".btn span").on("click",function(){
        
        if(menuon == "off"){
            $(".btn span").transition({
            perspective: '100px',
            rotateY: '180deg'
});
            $("#contents_1").animate({
            "left":"0%"
        }, 600);
            menuon = "on";
        } else{
            $(".btn span").transition({
            perspective: '100px',
            rotateY: '0deg'
});
            $("#contents_1").animate({
            "left":"-30%"
        }, 600);
            menuon = "off";
        }
    });

/* page1_bg */
    
     var bg = "off";
    
    $(".content").on("click",function(){
        
        if(bg == "off"){
            $("#contents_bg1").fadeOut();
            $("#contents_bg1_s").fadeIn(); 
            bg = "on";
            $(".logo,.content").css("color","#fff");
            $(".logo").css("opacity","1");
            $(".content").css("opacity","0.9");
            $(".logo>img").attr("src","img/logo-w.png");
        } else{
            $("#contents_bg1").fadeIn();
            $("#contents_bg1_s").fadeOut();
            bg = "off";
             $(".logo,.content").css("color","#000");
             $(".logo,.content").css("opacity","0.7");
             $(".logo>img").attr("src","img/logo.png");
        }
    });
    
    
/* page2_bg */
    
     var bg_r = "off";
    
    $(".logo_right").on("click",function(){
        
        if(bg_r == "off"){
            $("#contents_bg2").fadeOut();
            $(".effect_2").hide();
            $("#contents_bg2_s").fadeIn();
            $(".effect_2_s").fadeIn();
            
            bg_r = "on";
            $(".logo_right").find("i").attr("class","fas fa-chevron-circle-left");
        } else{
            $("#contents_bg2").fadeIn();
            $(".effect_2").fadeIn();
            $("#contents_bg2_s").fadeOut();
             $(".effect_2_s").hide();
            bg_r = "off";
            $(".logo_right").find("i").attr("class","fas fa-chevron-circle-right");
        }
    });
    
/* page3_bg */
    
var bg1_l = "off";
    
 $("#page3_1 .logo").on("click",function(){
        
        if( bg1_l == "off"){
            $("#contents_bg3").fadeOut();
            $(".effect_3").hide();
            $(".about").hide();
            $(".effect_3_title").hide();
            $("#contents_bg3_s").fadeIn();
            $(".effect_3_s").fadeIn();
            $(".effect_3_title_s").fadeIn();
             bg1_l = "on";
        } else{
            $("#contents_bg3").fadeIn();
            $(".effect_3").fadeIn();
            
            $(".about").fadeIn();
            $(".effect_3_title").fadeIn();
            $(".effect_3_title_s").hide();
            $("#contents_bg3_s").fadeOut();
            $(".effect_3_s").hide();
             bg1_l = "off";
        }
    });
       
    
    
  
/* slide */
    
var num = 0;

var timer = setInterval(function(){

var before;

    if(num < 3){
       num = num+1;
       before=num-1;

    } else{
        num = 0;
        before =3; /*마지막 슬라이드 번호 지정*/
    }
        
var slide_width;
        
    if(window_Width >= 1280){
       slide_width = "500px";
    } else{
        slide_width = "100%";
    }

    $("#slide_box li").eq(num).css({
        "left":slide_width
    }).show();

    $("#slide_box li").eq(before).animate({
        "left":"-"+slide_width
    }, 500);

    $("#slide_box li").eq(num).animate({
        "left":"0px"
    }, 500);

    $("#slide_control li").removeClass("cur");
    $("#slide_control li").eq(num).addClass("cur");

    },4000);


    $("#slide").mouseover(function(){

    clearInterval(timer);
    });

    $("#slide").mouseout(function(){

    timer = setInterval(function(){

var before;
 
    if(num < 3){
       num = num+1;
       before=num-1;

    } else{
        num = 0;
        before =3;
    }

    $("#slide_box li").eq(num).css({
        "left":"500px"
    }).show();

    $("#slide_box li").eq(before).animate({/**/
        "left":"-500px"
    }, 500);

    $("#slide_box li").eq(num).animate({
        "left":"0px"
    }, 500);

    $("#slide_control li").removeClass("cur");
    $("#slide_control li").eq(num).addClass("cur");

},4000);

/*slide control*/
    
 $("#slide_control li").click(function(){

var indexNum = $("#slide_control li").index(this);

    if(num < indexNum){
      $("#slide_box li").eq(indexNum).css("left","500px").show();
        $("#slide_box li").eq(num).show().animate({
            "left" : "-500px"    
        },500); 
        $("#slide_box li").eq(indexNum).animate({
            "left" : "0px"    
        },500);
        num = indexNum;
    } else if(num > indexNum){
        $("#slide_box li").eq(indexNum).css("left","-500px").show();
        $("#slide_box li").eq(num).show().animate({
            "left" : "500px"    
        },500); 
        $("#slide_box li").eq(indexNum).animate({
            "left" : "0px"    
        },500);
        num = indexNum;
    } else{
        $("#slide_box li").eq(indexNum).css("left","0px").show();
    }

    $("#slide_control li").removeClass("cur");
    $("#slide_control li").eq(indexNum).addClass("cur");

 });
}); 

/* sub slide */
var btn_num = 0;
      $("#next_btn").on("click",function(){

        if(btn_num < 2){
           btn_num = btn_num+1;
        } else{
            btn_num = 0;
        }

        $("#sub_area ul").eq(btn_num).css({
            "left":"640px"
        }).show();

        $("#sub_area ul").eq(btn_num-1).animate({
            "left":"-640px"
        }, 500);

        $("#sub_area ul").eq(btn_num).animate({
            "left":"0px"
        }, 500);

    });
    
/* -> nextBtn 클릭이벤트 종료*/
   
    $("#pre_btn").click(function (){

        if(btn_num > 0){
            btn_num = btn_num-1;/* 결과 : 3~0*/   
        } else{
            btn_num = 2;
        }
       
        $("#sub_area ul").eq(btn_num).css({
            "left":"-640px"
        }).show();
       
        if(btn_num == 2){
           var curNum = 0;
        } else{
          curNum = btn_num+1;
        }
        $("#sub_area ul").eq(curNum).animate({
            "left":"640px"
        },500);
        
        $("#sub_area ul").eq(btn_num).animate({
            "left":"0px"
        }, 500);
    
    });
    
/* contents_window btn  */  
    
    $("#bottom_btn").click(function(){
        
        $("#contents_bottom").hide();
        $("#contents_window").slideDown();
        
        $("#contents_control").css({
            "top":"500px",
            "z-index":"9999"
        });
    });
    
    $("#top_btn").on("click",function(){
        $("#contents_bottom").show();
        $("#contents_window").hide();
        $("#contents_control").css({
            "top":"100px"
        });
        
    });
 
    
/* 이미지 슬라이드 끝 */
 
});