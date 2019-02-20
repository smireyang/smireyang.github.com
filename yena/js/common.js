$(function(){
    $("dd").hide();
    $("body").append("<div id='glayLayer'></div><div id='overLayer'></div>");

    $("#glayLayer").click(function () {
        $(this).hide();
        $("#overLayer").hide();
    });

    $("dt").click(function () {
        $("#glayLayer").show();
        $("#overLayer").show().html("<img src='images/cancel.svg' class='close' width='25' />" + $("+dd", this).html()/*).css({
            marginTop: "-" + $("#overLayer").height() / 2 + "px",
            marginLeft: "-" + $("#overLayer").width() / 2 + "px"
        }*/);

        $("#overLayer img.close").click(function () {
            $("#glayLayer").hide();
            $("#overLayer").hide();
        });
        return false;
    });

    if ($.browser.msie && $.browser.version < 7) {
        $(window).scroll(function () {
            $("#glayLayer").get(0).style.setExpression("top", "$(document).scrollTop()+'px'");
            $("#overLayer").get(0).style.setExpression("top", "($(document).scrollTop()+$(window).height()/2)+'px'");
        });
    };
    
    //sub-nav
    $(function(){
	$("#subbtn").click(function(){
		$("#sub-nav").slideToggle();
	});
    });
});
