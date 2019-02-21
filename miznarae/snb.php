<?php 
    $pageName = basename($_SERVER['PHP_SELF']);
    
    // 미즈나래 소개 , greeting.php, doctor.php, map.php
    // 진료안내 , medical.php, delivery.php
    // 난임센터, infertility.php
    // 상담/예약 consult.php, reserve.php
    // 증명서발급 certificate.php, non-reimbursement.php
    // 고객서비스 아직없음

    $menu=array(
        array(
            "name"=>"미즈나래 소개",
            "href"=>"greeting.php",
            "sub"=>
            array(
                array(
                    "name"=>"인삿말",
                    "href"=>"greeting.php"
                )
                ,array(
                    "name"=>"병원 둘러보기",
                    "href"=>"facilities.php"
                )
                ,array(
                    "name"=>"의료진 안내",
                    "href"=>"doctor.php"
                )
                ,array(
                    "name"=>"찾아오시는 길",
                    "href"=>"map.php"
                )
            )
        )
        ,
        array(
            "name"=>"진료안내",
            "href"=>"medical.php",
            "sub"=>
            array(
                array(
                    "name"=>"산부인과",
                    "href"=>"medical.php"
                )
                ,array(
                    "name"=>"감성분만",
                    "href"=>"delivery.php"
                )
            )
        )
        ,
        array(
            "name"=>"난임센터",
            "href"=>"infertility.php",
            "sub"=>
            array(
                array(
                    "name"=>"난임이란",
                    "href"=>"infertility.php"
                )
                ,array(
                    "name"=>"임신성공 사례",
                    "href"=>"case.php"
                )
            )
        )
        ,
        array(
            "name"=>"상담/예약",
            "href"=>"consult.php",
            "sub"=>
            array(
                array(
                    "name"=>"온라인 상담",
                    "href"=>"consult.php"
                )
                ,array(
                    "name"=>"온라인 예약",
                    "href"=>"reserve.php"
                )
            )
        )
        ,
        array(
            "name"=>"증명서 발급",
            "href"=>"certificate.php",
            "sub"=>
            array(
                array(
                    "name"=>"증명서 발급",
                    "href"=>"certificate.php"
                )
                ,array(
                    "name"=>"비급여항목 안내",
                    "href"=>"non-reimbursement.php"
                )
            )
        )
        ,
        array(
            "name"=>"고객서비스",
            "href"=>"news.php",
            "sub"=>
            array(
                array(
                    "name"=>"병원소식",
                    "href"=>"news.php"
                )
                ,array(
                    "name"=>"보도자료",
                    "href"=>"media.php"
                )
                ,array(
                    "name"=>"QnA",
                    "href"=>"qna.php"
                )
                ,array(
                    "name"=>"병원이용후기",
                    "href"=>"reviews.php"
                )
            )
        )
    );

    $flag=false;
    foreach ($menu as $menu_item) {
        if($flag) break;
        foreach ($menu_item["sub"] as $sub_item){
            if($pageName==$sub_item["href"]){
                $current_sub_menu_name=$sub_item["name"];//현재 페이지 이름 저장;
                $sub_menu=$menu_item["sub"];//현재 페이지 그룹 저장
                $current_menu_name = $menu_item["name"]; //현재 페이지그룹의 이름 저장
                $flag=true;
                break;
            }
        }
    }

?>

<div class="snb">
    <div class="snb__wrap">
        <ul class="snb__container">
            <li class="snb__home"><a href="index.php"><i class="fas fa-home"></i></a></li>
            <li class="snb__depth1"><a href="#">
            <?php echo $current_menu_name; ?>
             <i class="fas fa-angle-down"></i></a>
                <ul class="snb__dropdown snb__depth1-menu">
                    <?php
                        // dpeth1 메뉴 출력
                        foreach ($menu as $menu_item) {
                            echo "<li><a ";
                            
                            if($menu_item["name"]==$current_menu_name){
                                echo "class='snb__selected' ";
                            }
                            
                            echo "href='", $menu_item["href"], "'>", $menu_item['name'], "</a></li>";
                        }
                        ?>
                </ul>
            </li>
            
            <li class="snb__depth2"><a href="#"><strong>
            <?php 
                echo $current_sub_menu_name;
            ?>
            </strong><i class="fas fa-chevron-circle-down"></i></a>
                <ul class="snb__dropdown snb__depth2-menu">
                    <?php 
                        // dpeth2 메뉴 출력
                        foreach ($sub_menu as $sub_menu_item) {
                            echo "<li><a ";

                            if($sub_menu_item["name"]==$current_sub_menu_name){
                                echo "class='snb__selected' ";
                            }

                            echo "href='", $sub_menu_item["href"], "'>", $sub_menu_item['name'], "</a></li>";
                        }
                    ?>

                </ul>
            </li>
        </ul>
    </div>
</div>