<?php
    session_start();
    $sen=$_SESSION['username'];
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="hedwigbeta";
    $con=new mysqli($host,$user,$pass,$db_name);
    $query="SELECT DISTINCT sender FROM chat WHERE receiver='$sen' and status='u'";
     $run=$con->query($query);
    while($row=$run->fetch_array() ) :

?>
<html>
    <script>
    

</script> 
    <body>
        <div id="notifbar">
            <?php if ($sen== 'EB') { ?>
            <button  id="<?php echo $row['sender']?>" onclick="myFunction(this)" > You have a new message(s) from <?php echo $row['sender'] ?> </button>
            <br>
            <?php } else { ?>
                                <button  id="<?php echo $row['sender']?>" onclick="myFunction(this)" > You have a new message(s) who chose the via EB option 
                                    <?php echo $row['sender'] ?> </button>
                                <br>
            <?php } ?>
    

                        }

</div>
</body>
   
<?php endwhile;?>