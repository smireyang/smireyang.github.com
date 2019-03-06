   <meta charset="utf-8">
    <title>SBank</title>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
			var mobileKeyWords=new Array('iPhone','iPod','BlackBerry',
			'Android','Windows CE','Windows CE;','LG','MOT','SAMSUNG',
			'SonyEricsson','Mobile','symbian','Opera Mobi','Opera Mini','IEmobile');
			for(var word in mobileKeyWords){
				if(navigator.userAgent.match(mobileKeyWords[word]) !=null){
					window.location.href="m/index.php";
					break;
				}
			}
		</script>