$(function () {
    //navi
	$(".sub-navi").hide();
	$(".nav li").hover(function(){
		$(".sub-navi").show();
	});
	$(".sub-navi").mouseleave(function(){
		$(".sub-navi").hide();
	});
    
    //header고정
    $("header").each(function(){
        var $window=$(window),
            $header=$(this),
            headerOffsetTop=$header.offset().top;

            $window.on("scroll",function(){
                if($window.scrollTop()>headerOffsetTop){
                    $header.addClass("sticky");
                }else{
                    $header.removeClass("sticky");
                }
        });
        $window.trigger("scroll");
    });
	
     //message
        
        //slide 클래스를 가진 요소마다 작업을 수행
        $(".message").each(function(){
            var $slides=$(this).find('a'), //모든 슬라이드
                slideCount=$slides.length, //슬라이드 갯수
                currentIndex=0; //현재 슬라이드를 나타내는 인덱스
                //console.log($slides);
        
        //첫번째 슬라이드에 페이드 인으로 표시
        $slides.eq(currentIndex).fadeIn();
            
        //5초 마다 showNextSlide 함수를 실행
        setInterval(showNextSlide,3000);
            
        //다음 슬라이드를 표시하는 함수
        function showNextSlide(){
            //다음 표시 할 슬라이드의 인덱스
            //(만약 마지막 슬라이드라면 처음으로 돌아 가기)
            var nextIndex=(currentIndex+1)%slideCount;
            
            //현재 슬라이드 페이드 아웃
            $slides.eq(currentIndex).fadeOut();
            
            //다음 슬라이드 페이드 인
            $slides.eq(nextIndex).fadeIn();
            
            //현재 슬라이드 인덱스를 업데이트
            currentIndex=nextIndex;
            }
        });
    
    //배너
	$("#banner").each(function () {
		var $slide = $(this).find("li"),
			allSlide = $slide.length,
			allSlideWidth = allSlide * 100 + "%",
			slideWidth = 100 / allSlide + "%";

		$("#banner_wrap").css("width", allSlideWidth);
		$("#slide li").css("width", slideWidth);
		
		$("#slide li:last").prependTo("#slide");
		$("#banner_wrap").css("margin-left","-100%");
		$("#prevbtn,#nextbtn").hide();
		$("#banner_wrap").hover(function(){
			$("#prevbtn,#nextbtn").show();
		});
		$("#banner").mouseleave(function(){
			$("#prevbtn,#nextbtn").hide();
		});
		$("#prevbtn").click(function(){
			$("#banner_wrap").animate({marginLeft:"-200%"},"fast",function(){
				$("#banner_wrap").css("margin-left","-100%");
				$("#slide li:first").appendTo("#slide");
			});
		});
		$("#nextbtn").click(function(){
			$("#banner_wrap").animate({marginLeft:"-200%"},"fast",function(){
				$("#banner_wrap").css("margin-left","-100%");
				$("#slide li:last").prependTo("#slide");
			});
		});
		
		var timer = setInterval(function() {
				$("#nextbtn").click();
			}, 3000);
			$("#prevbtn img,#nextbtn img").click(function() {
				clearInterval(timer);
			});
		
	});
    
    
    //서브탭메뉴
    $("ul.panel li:not(#tabs-1)").hide();
        $("ul.menu-list li a").click(function() {
            $("ul.menu-list li a").removeClass("selected");
            $(this).addClass("selected");
            $("ul.panel li").fadeOut("fast");
            $($(this).attr("href")).fadeIn("fast");
            return false;
    });
    
    //Top
    $(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('.scroll-up').fadeIn();
		}
		else{
			$('.scroll-up').fadeOut();
		}
	});
	$('.scroll-up a').on("click", function(){
		$('body, html').animate({
			scrollTop: 0
		}, 200);
		return false;
	});
	
});
