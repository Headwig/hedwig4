<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        echo "Hello ".$_SESSION["username"]."<br>";
    }
    else
    {
        header("location: index.php");
    }
?>
<html>
    <head>
        <title>Hedwig</title>
        <script src="js/home.js"></script>    
        
<script>
    setInterval(function(){ajax()}, 800);
function myFunction(ff) {
    alert(ff.id+"home.php");
    document.getElementById(ff.id).click(); // Click on the checkbox
}
</script> 

    </head>

<body onload="ajax(); " >
    

    <?php
                    $myusername=$_SESSION["username"];
                    
                    $host="localhost";
                    $user="root";
                    $pass="";
                    $db_name="hedwigbeta";
                    $con=new mysqli($host,$user,$pass,$db_name);
                    $qry = "SELECT country FROM login WHERE NOT (country = '$myusername')";
                    $res = mysqli_query($con, $qry);
                    if(mysqli_num_rows($res)>0){
                        
                        while($row0=mysqli_fetch_assoc($res)){
                            echo "<input class='countries_l' type='submit' value='" . $row0['country'] . "' id='".$row0['country']."' onclick='post(this.value)'  >" ;
                            echo "<br>";
                        }
                        
                    }
         
         
                ?>
    <div id='notification'></div>
   
        <div id="container">
    <div id="chat_box">
        <div id="chat"></div>
        <h2>Recent Messages</h2>
    </div>
    </div>
        <textarea name="message" placeholder="Enter Message" id="msg"></textarea>  
            <input type='checkbox' name='veb' id='veb' >
            <input type="submit" name="submit" value="Send it" id="sendit" onclick='sub()' /> 
<div id='status'></div>
<div id='status1'></div>

    <h4><a href = "logout.php">Sign Out</a></h4>

</body>
</html>

