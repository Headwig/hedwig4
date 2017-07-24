<?php
    session_start();
    if(isset($_SESSION['chatid1']))
    {
            
             $c= $_SESSION["chatid1"];
            $cc=  $_SESSION["chatid2"];
            
    }
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="hedwigbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    echo "Hello".$c.$cc;

        function formatDate($date){
    return date('g:i a',strtotime($date));
    
}
    
    $query="SELECT *  FROM chat WHERE (chatid='$c' OR chatid='$cc')  ";
    $run=$con->query($query);
    while($row=$run->fetch_array() ) :

?>
    <html>
<body>
        <div id="chat_data">

    <span style="color:green"><?php echo $row['sender']?></span>:
    <span style="color:brown"><?php echo $row['message']?> Message for ( </span>
    <span style="color:brown"><?php echo $row['receiver']?>) </span>

    <span style="float:right"><?php echo formatDate($row['date'])?></span>
</div>
</body>
<?php endwhile;?>
</html>    
    


