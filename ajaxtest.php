<?php

 session_start();

    $rec = $_POST['rec'];
    // do stuff with params
$_SESSION["rec"]=$rec;
    echo "Hi ";
    echo $_SESSION["rec"];
    $chatid1=$_SESSION['username'].$_SESSION['rec'];
    $chatid2=$_SESSION['rec'].$_SESSION['username'];
    
    $_SESSION["chatid1"]="$chatid1";
    $_SESSION["chatid2"]="$chatid2";
    echo $chatid1.$chatid2;
?>