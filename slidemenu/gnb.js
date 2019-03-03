$(function(){
	var gnbLi = $("#mainMenu>li");
	var ul = $("#mainMenu>li>ul");
	var headerMin = $("#headerWrap").height();
	var headerMax = ul.innerHeight() + headerMin;	
	var state = false;
	var speed = 150;
	gnbLi.on("mouseenter keyup",function(){
		if(!state){
			$("#headerWrap").stop().animate({height:headerMax},speed,function(){
				ul.stop().fadeIn(speed);
			});
			state = true;
		}
		ul.removeClass("on");
		$(this).find("ul").addClass("on");
	});
	gnbLi.mouseleave(function(){
		$(this).find("ul").removeClass("on");
	});   
	$("#header").mouseleave(function(){
		ul.stop().fadeOut(speed,function(){
			$("#headerWrap").stop().animate({height:headerMin},speed);            
		});
		state = false;
	});
	$("#header .close").focus(function(){
		ul.stop().fadeOut(speed,function(){
			$("#headerWrap").stop().animate({height:headerMin},speed);            
		});
		state = false;
	});
});