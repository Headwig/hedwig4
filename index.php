<?php
   session_start();
$db = mysqli_connect("localhost","root","","hedwigbeta");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       #echo $_SESSION['username'];
      
      $myusername = mysqli_real_escape_string($db,$_POST['country']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       #echo $myusername . "   <br> ".$mypassword;
      
    $sql = "SELECT id FROM login WHERE country = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
       $row=mysqli_fetch_assoc($result);
       #echo $row['id'];
      $count = mysqli_num_rows($result);
       
     if(mysqli_num_rows($result)==1)
    {
                echo $myusername . "   <br> ".$mypassword;
                    $_SESSION["username"]="$myusername";


         header("location: home.php");
      }else {
         $error;
         echo "<div class='imgcontainer' >";
            echo "Your Username or Password is invalid . Please try again ." ;
             
             echo "</div>";

     }
   }
 mysqli_close($db);

?>

<!DOCTYPE html>
<html>
<head>
</head>
    
<title>Log In here !</title>

<body>
<form action="" method="post">
<br><br>
  <div class="container">
    <label><b>Country</b></label>
    <input type="text"  name="country" required>
      <br><br><br>
    <label><b>Password</b></label>
    <input type="password"  name="password" required>
      <br><br><br>
    <button type="submit" >Login</button>
      <br><br>
            <a href="forgetpw.php" class="butt">Forgot Password</a>

      <br><br>
  </div>    
    </form>
</body>


</html>