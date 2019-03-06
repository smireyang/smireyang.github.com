/* 
	* 메뉴 / 슬라이드배너 / FOOTER
*/
$(document).ready(function() {
    //메뉴
    
    $(".subMenu").hide();
	$(".mainMenu li").hover(function(){
		$(".subMenu").slideDown();
	});
	$(".subMenu").mouseleave(function(){
		$(".subMenu").slideUp();
	});
        
    //슬라이드 배너
    
    var  currentIndex=1;
    
    function showNextSlide(){  
    
    if(currentIndex==1){
        $(".nextbtn").click();
    }else{
         $(".prevbtn").click();
        }
    }

    $(".nextbtn").click(function(){
         if(currentIndex==1){
        $(".sliderVisual").animate({marginLeft: parseInt($(".sliderVisual").css("margin-left"))-1100+"px"},"slow");
        currentIndex=0;
    }else{
    stop();
    }
    });
    
    $(".prevbtn").click(function(){
        if(currentIndex==0){
        $(".sliderVisual").animate({marginLeft: parseInt($(".sliderVisual").css("margin-left"))+1100+"px"},"slow");
        currentIndex=1;
    }else{
      stop();
        }
    });
    
     var main_timer=setInterval(showNextSlide,5000);
    
    $(".sliderVisual, .prevbtn, .nextbtn").mouseover(function(){
        clearInterval(main_timer);
    }).mouseout(function(){
       main_timer=setInterval(showNextSlide,5000);
    });
    
    //이벤트
    
    $(".sliderEvent li:last").prependTo(".sliderEvent");
    $(".sliderEvent").css("margin-left","-595px");
    
    $(".mc_prevbtn").click(function(){
        $(".sliderEvent").animate({
            marginLeft: parseInt($(".sliderEvent").css("margin-left"))+595+"px"
        },"slow",function(){
            $(".sliderEvent").css("marginLeft","-595px");
            $(".sliderEvent li:last").prependTo(".sliderEvent");
        });
    });
    $(".mc_nextbtn").click(function(){
        $(".sliderEvent").animate({
            marginLeft: parseInt($(".sliderEvent").css("margin-left"))-595+"px"
        },"slow",function(){         
            $(".sliderEvent li:first").appendTo(".sliderEvent");
            $(".sliderEvent").css("marginLeft","-595px");
        });
    });
    var mc_timer=setInterval(function(){
        $(".mc_nextbtn").click();
    },5000);
    
    $(".sliderEvent, .mc_prevbtn, .mc_nextbtn").mouseover(function(){
        clearInterval(mc_timer);
    }).mouseout(function(){
        mc_timer=setInterval(function(){
            $(".mc_nextbtn").click();
        },5000);
    });
    
    //추천상품
    
    $(".sliderRecomm li:last").prependTo(".sliderRecomm");
    $(".sliderRecomm").css("margin-left","-595px");
    
    $(".md_prevbtn").click(function(){
        $(".sliderRecomm").animate({
            marginLeft: parseInt($(".sliderRecomm").css("margin-left"))+595+"px"
        },"slow",function(){
            $(".sliderRecomm").css("marginLeft","-595px");
            $(".sliderRecomm li:last").prependTo(".sliderRecomm");
        });
    });
    $(".md_nextbtn").click(function(){
        $(".sliderRecomm").animate({
            marginLeft: parseInt($(".sliderRecomm").css("margin-left"))-595+"px"
        },"slow",function(){         
            $(".sliderRecomm li:first").appendTo(".sliderRecomm");
            $(".sliderRecomm").css("marginLeft","-595px");
        });
    });
    
    var md_timer=setInterval(function(){
        $(".md_nextbtn").click();
    },5000);
    
    $(".sliderRecomm, .md_prevbtn, .md_nextbtn").mouseover(function(){
        clearInterval(md_timer);
    }).mouseout(function(){
        md_timer=setInterval(function(){
            $(".md_nextbtn").click();
        },5000);
    });

    
	// FOOTER 셀렉트
	var navFooter = (function(){
		var footer_timer = null;

		return {
			init: function(){
				var self = this;

				//이벤트설정
				$('.info-group .list > li > a').bind('focus mouseover', function(ev){
					
					$(this).parent('li').addClass('on');
//                     $('.info').hide();
                    $(this).parent('li').find('.info').slideDown("fast");
//                    $(this).parent('li .info').slideUp();
				});
				$('.info-group .list > li').bind('mouseleave', function(ev){
                    $('.info-group .list > li').removeClass('on');
                    $('.info-group > .list > li.on a.tit').css("backgroud-image","../img/upload.png");
                     $('.info').hide();
				});

				//하위메뉴 타임연장
				$('.info-group .list > li a')
					.bind('focus', function(ev){clearTimeout(gnb_timer);})
					.bind('blur', function(ev){gnb_timer = setTimeout(function(){
						$('.info-group .list > li').removeClass('on');
					},1000);});

				//마우스이벤트
				$(document).bind('mouseover.naviGnb', function(e){
					if (!$(e.target).closest('#navFooterGroup').length) {
						$('.info-group .list > li').removeClass('on');
					}
				});
			}
		};
	}());

	navFooter.init();
    
    
    //모바일 슬라이드 배너
    var resizea=$(window).width();
    var  mcurrentIndex=1;
   /* $(window).resize(function(){
        resizea=$(".mb_sliderVisual").width();
        console.log(resizea);
    });*/

    $(".mb_nextbtn").click(function(){
      
      if(mcurrentIndex==1){
        $(".mb_sliderVisual").stop().animate({marginLeft: parseInt($(".mb_sliderVisual").css("margin-left"))-resizea+"px"},"slow");
        mcurrentIndex=0;
    }else{
        return false;
    }
    });
    
     //모바일탭메뉴
    $("ul.panel li:not(#Easy-banking)").hide();
        $("ul.tab li a").click(function() {
            $("ul.tab li a").removeClass("selected");
            $(this).addClass("selected");
            $("ul.panel li").fadeOut("fast");
            $($(this).attr("href")).fadeIn("fast");
            return false;
    });
    
    
    $(".mb_prevbtn").click(function(){
   
    if(mcurrentIndex==0){
        $(".mb_sliderVisual").stop().animate({marginLeft: parseInt($(".mb_sliderVisual").css("margin-left"))+resizea+"px"},"slow");
        mcurrentIndex=1;
    }else{
      return false;
    }
    });
   
    
    //모바일 햄버거 메뉴
    var duration=300;
    var $aside=$(".page-nav>aside");
    //find() - 선택자 안에 있는 요소(태그)를 찾아주는 메서드
    $("header").find(".nav").on("click",function(){ //$(".page-main>aside button").click(function(){});
        console.log(resizea);
        $aside.toggleClass("open");
        if($aside.hasClass("open")){
            $aside.stop().animate({left:"-0px"},duration); // ,"easeOutBack"
            //$(".page-main>aside button").css("display","none");
        }else{
            $aside.stop().animate({left:resizea},duration); // ,"easeInBack"
            //$(".page-main>aside button").find("img").attr("src","btn_open/btn_open.png");
        }
    });
    
     //모바일햄버거서브메뉴
    $("div.allMenuCon>li:not(.nav1)").hide();
        $("ul.allMenuList>li a").click(function() {
            $("ul.allMenuList>li a").removeClass("selected");
            $(this).addClass("selected");
            $("div.allMenuCon").fadeOut("fast");
            $($(this).attr("href")).fadeIn("fast");
            return false;
    });
    
});
    