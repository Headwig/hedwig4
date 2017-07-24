<?php
    session_start();
    $sen=$_SESSION['username'];
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="hedwigbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $query="SELECT DISTINCT sender FROM chatunread WHERE receiver='$sen'";
     $run=$con->query($query);
    while($row=$run->fetch_array() ) :

?>
<html>
    
    <body>
        <div id="notifbar">

            <button  id="<?php echo $row['sender']?>" onclick="myFunction(this)" > You have a new message(s) from <?php echo $row['sender'] ?> </button>
            <br>

</div>
</body>
   
<?php endwhile;?>