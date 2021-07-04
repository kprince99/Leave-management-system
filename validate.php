<!DOCTYPE html>
<html>
<head>
<?php 


include 'core.php';
include 'connection.php';
        
  $user = mysqli_real_escape_string($conn, $_POST['uname']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);  
  $pass = md5($pass);       
 
  $sql="SELECT * from empl_sec WHERE Username= '".$user."' and Password = '".$pass."'";

  $result = $conn->query($sql);
if (mysqli_num_rows($result) > 0 )
        {
                $row=  $result -> fetch_assoc();

              if($row['POST']=="Admin)")
            {
                  $_SESSION['id'] = $row['empl_id'];
                    $_SESSION['uname'] = $user;
                    $_SESSION['POST'] = "Admin";
               header("Location: {$home_url}/admin/admin_panel.php");

            }
             else if($row['POST']=="Lect")
            {
                $_SESSION['id'] = $row['empl_id'];
                $_SESSION['uname'] = $user;
                $_SESSION['POST'] = "Lect";
                 header("Location: {$home_url}/Employee/Empl_panel.php");
            }
           else if($row['POST']=="Principal")
            {
                $_SESSION['id'] = $row['empl_id'];
                $_SESSION['uname'] = $user;
                $_SESSION['POST'] = "Principal";
                header("Location: {$home_url}/Principal/pri_panel.php");
            }
      }
               else{
                 $_SESSION['error'] = "Your Username and password is Incorrect";
                 header("Location: {$home_url}login.php");

              }
  ?>
</head>
</html>