$(function () {
    var $window = $(window); //window 객체
    // var $navArea = $(".header__nav-area"); //서브, 메인 네비게이션
    var $gnb = $('.gnb'); //메인 네비게이션
    var $logoArea = $('.header__logo-area');
    var $header = $('.header');

    var $snb = $('.snb');
    var $snbWrap = $('.snb__wrap');

    // gnb hover
    $('.gnb__item a').mouseover(function () {
        var target = $(this).attr('data-target');

        $('.sub__item').hide();
        $('.gnb__item a').removeClass("gnb__item--active");

        $('.sub__item:nth-child(' + target + ')').show();
        $(this).addClass("gnb__item--active");

        $('.sub').stop().slideDown("fast");
        // $('.snb__dropdown').stop();
    });

    // gnb leave
    $('.header__nav-area').mouseleave(function () {
        $('.sub').stop().slideUp("fast");
        $('.gnb__item a').removeClass("gnb__item--active");
    });

    //snb hover, leave
    $('.snb__depth1, .snb__depth2').mouseover(function(){
        $(this).find('.snb__dropdown').stop().slideDown("fast");
    }).mouseleave(function(){
        $(this).find('.snb__dropdown').stop().slideUp("fast");
    });



    // 햄버거-> 모바일 메뉴 
    $('.hamburger__checkbox').click(function () {
        if ($(this).is(":checked")) {
            $('.mobile-nav').slideDown("fast");
        } else {
            $('.mobile-nav').slideUp("fast");
        }
    });

    //모바일메뉴 아코디언
    $('.mobile-nav__1depth-item > a').click(function () {
        var $sub = $(this).find('+ .mobile-nav__2depth');

        if ($sub.is(":hidden")) {
            $(this).find('.mobile-nav__arrow').addClass("mobile-nav__arrow--up");
            $sub.stop().slideDown("fast");
        } else {
            $(this).find('.mobile-nav__arrow').removeClass("mobile-nav__arrow--up");
            $sub.stop().slideUp("fast");
        }

    })

    function alignSubmenu() {
        var width = $('.gnb ul').width();
        $('.sub .header__wrap').css("width", width + "px");
        // $('.sub').css("top", $gnb.offset().top + $gnb.height() + 2 + "px");
    }

    function resetUi() {
        $header.css("padding-top", 0);
        $snb.css("padding-top", 0);
        $snbWrap.removeClass("snb__wrap--sticky");
    }

    function stickyNav() {
        if($snb.length==0) return; //서브메뉴가 없는 경우
        var stickyPoint = $snb.offset().top;

        if ($window.scrollTop() > stickyPoint) {
            var padding = $snbWrap.height();
            $snb.css("padding-top", padding);
            $snbWrap.addClass("snb__wrap--sticky");
        } else {
            resetUi();
        }
    }

    function stickyHeader() {
        var padding = $logoArea.height();
        $logoArea.addClass("header__logo-area--sticky");
        $header.css("padding-top", padding);
    }

    function uiChange() {
        if ($window.width() >= 768) {
            $header.css("padding-top", 0);
            $logoArea.removeClass("header__logo-area--sticky");
            stickyNav();
            alignSubmenu();
            $('.mobile-nav').hide();
            $('.hamburger__checkbox').prop("checked", false);

            var width = $('.snb__depth1').width();
            var width2 = $('.snb__depth2').width();

            $('.snb__depth1-menu').css("width",width+"px");
            $('.snb__depth2-menu').css("width",width2+"px");
            
        } else {
            $('.sub').hide();
            stickyHeader();
        }
    }

    $window.resize(function () {
        uiChange();
    });

    $window.scroll(function () {
        uiChange();

    });

    uiChange();
});