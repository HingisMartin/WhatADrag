<?php
include('config.php');
session_start();

if (isset($_POST['sub'])) {
        //no empty field
    if (empty($_POST["gname"])|| empty($_POST['pname'])) 
        {   
           if(empty($_POST["gname"]))
               {
                $gnoErr = "ENTER GROUP ID !!";
                echo "$gnoErr";
               }
           if(empty($_POST["pname"]))
               {
                  $gnoErr="ENTER PASSWORD !!";
                  echo "$gnoErr";
               }
               //no user name present
        echo "<script>document.getElementById('gno')=$gnoErr; </script>";
        } 
    else {
        //store id in session n check for password
        $gno=$_POST['gname'];
        $pass=md5($_POST['pname']);
        $sql="SELECT gpassword FROM `stgroup` WHERE GRID='$gno'";
        $dbpass_query=mysqli_query($conn,$sql);

          //Fetch result 
        $my_id_array=mysqli_fetch_assoc($dbpass_query);
        $dbpass=$my_id_array['gpassword'];

        if($pass==md5($dbpass)){                   // change it
            echo "success"; 
            //session_register("gno");
            $_SESSION['id'] = $gno;
            header("location: STUDENT.php");
            }
        else {
         $error = "Your Password is invalid";
         header("location: login.html");
      }
     }
  }                  // DELETE IT
?>
</body>
</html>