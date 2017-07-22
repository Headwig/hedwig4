<?php
    session_start();
    $s=$_SESSION['username'];
    $r=$_SESSION['rec'];
    $foo = $_POST['msg'];
    $chatid1=$_SESSION['chatid1'];
    // do stuff with params
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="hedwigbeta";
    $con=new mysqli($host,$user,$pass,$db_name);

    $query="INSERT INTO `chat` ( `sender`, `message`, `receiver`, `chatid`) VALUES ( '$s', '$foo', '$r', '$chatid1'); ";
    $run = $con->query($query);

    echo "Hi ";
    echo $foo.$s.$r;



?>