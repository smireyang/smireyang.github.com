<?php 
echo "
<script>
    var quick_max_width = 1200;
    var quick_min_top = 580;
</script>
";
?>


<div class="quick-menu">
    <ul>
        <li class="icon-box">
            <a href="medical.php" class="icon-box__container">
                <i class="icon-font icon-box__icon">&#xe800;</i>    
                <div class="icon-box__text">진료안내</div>
            </a>
        </li>
        <li class="icon-box">
            <a href="consult.php" class="icon-box__container">
                <i class="icon-font icon-box__icon">&#xe801;</i>    
                <div class="icon-box__text">상담</div>
            </a>
        </li>
        <li class="icon-box">
            <a href="reserve.php" class="icon-box__container">
                <i class="icon-font icon-box__icon">&#xe802;</i>    
                <div class="icon-box__text">예약</div>
            </a>
        </li>
        <li class="icon-box">
            <a href="certificate.php" class="icon-box__container">
                <i class="icon-font icon-box__icon">&#xe803;</i>    
                <div class="icon-box__text">증명서</div>
            </a>
        </li>

    </ul>
</div>

<script>
    
    var window_height = $(window).height();
    var $quick_menu = $(".quick-menu");
    
    var quick_menu_width = $(".icon-box").css("width");
    var quick_menu_width = quick_menu_width.replace("px","")*1;

    var quick_menu_gap = 50;

    var break_point = quick_max_width+(quick_menu_width+quick_menu_gap)*2;

    $(function (){
        $(window).scroll(function () {
            $quick_menu.stop();
            var top = $(document).scrollTop() + (window_height/2);

            if(top<quick_min_top){
                top=quick_min_top;
            }

            $quick_menu.animate( { "top": top + "px" }, 800 );
        });
        

        $(window).resize(function () {
            window_height = $(window).height();
            var window_width = $(window).width();
            
            
            if (window_width >=break_point) {
                $quick_menu.css("right",((window_width-quick_max_width)/2)-(quick_menu_width+quick_menu_gap)+"px");
            }else{
                $quick_menu.css("right",quick_menu_gap+"px");
            }
        });

        var top = $(document).scrollTop() + (window_height/2);

        if(top<quick_min_top){
            top=quick_min_top;
        }

        $quick_menu.css("top",top+"px");

    });



</script>