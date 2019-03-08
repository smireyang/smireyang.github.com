<?php

session_start(); 

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}

unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['usernick']);
unset($_SESSION['userlevel']);

echo"<script>
        location.href='../index.php';
    </script>";
?>
