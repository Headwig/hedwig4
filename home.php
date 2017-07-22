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
             <script type="text/javascript">
        function post(s) {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var returnd = xmlhttp.responseText;
                    document.getElementById("status").innerHTML=returnd;
                }
            }

xmlhttp.open("POST", "ajaxtest.php", true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
var p="rec=" + s;
xmlhttp.send(p);
            
        }
                 
                  function sub() {
            var myText = document.getElementById("msg");
            var s = myText.value;
            var x = new XMLHttpRequest();
            x.onreadystatechange = function() {
                if (x.readyState == 4 && x.status == 200) {
                   var returnd1 = x.responseText;
                    document.getElementById("status1").innerHTML=returnd1;
                }
            }
x.open("POST", "chatdata.php", true);
x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
var p="msg=" + s;
x.send(p);
          document.getElementById("msg").value="";            
        }
                 function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }
        setInterval(function(){ajax()}, 300);
    </script>
        

    </head>

<body onload="ajax();">
    

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
                            echo "<input class='countries_l' type='submit' value='" . $row0['country'] . "' onclick='post(this.value)'  >" ;
                            echo "<br>";
                        }
                        
                    }
         
         
                ?>
    
   
        <div id="container">
    <div id="chat_box">
        <div id="chat"></div>
        <h2>Recent Messages</h2>
    </div>
    </div>
        <textarea name="message" placeholder="Enter Message" id="msg"></textarea>  
            
            <input type="submit" name="submit" value="Send it" id="sendit" onclick='sub()' /> 
<div id='status'></div>
<div id='status1'></div>

    <h4><a href = "logout.php">Sign Out</a></h4>

</body>
</html>

