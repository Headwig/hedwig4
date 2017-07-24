<?php

 session_start();

    $rec = $_POST['rec'];
    // do stuff with params
$_SESSION["rec"]=$rec;
    echo "Hi ";
    echo $_SESSION["rec"];
    $chatid1=$_SESSION['username'].$_SESSION['rec'];
    $chatid2=$_SESSION['rec'].$_SESSION['username'];
    $s=$_SESSION['username'];
    $r=$_SESSION['rec'];
    $_SESSION["chatid1"]="$chatid1";
    $_SESSION["chatid2"]="$chatid2";
    echo $chatid1.$chatid2;


    $host="localhost";
    $user="root";
    $pass="";
    $db_name="hedwigbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $query="INSERT INTO `chat` ( `sender`,  `receiver`, `chatid` , 'status' ) VALUES ( '$s', '$r', '$chatid1','r'); ";
    $run=$con->query($query);
?>