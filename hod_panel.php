<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" type="text/css" href="17017C04035.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
 include 'connection.php';
 include 'core.php'; 

// if($_SESSION['Post']!=='Hod')
// {
//    header('Location: login.php');
// }

?>

<style type="text/css">body *{font-family:Helvetica}</style>
</head>
<body>


	<div class="sidenav">
    <img src="https://cdn2.iconfinder.com/data/icons/perfect-flat-icons-2/512/User_man_male_profile_account_person_people.png" height="200px" width="200px" data-pagespeed-url-hash="3038021413" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
  <a href="17017C04035_9.php">Home</a>
  <button class="dropdown-btn">Option 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="17017C04035_4.php">Add Users</a>
    <a href="17017C04035_20.php">Approve/Reject</a>
  </div>
  <a href="17017C04035_10.php">Reset Password</a>
  <a href="17017C04031.php">Logout</a>
</div>

<p style='text-align:center; font-size:20px; float:right;'>Welcome, <?php echo strtoupper($user); ?></p>
<br>
<div class="table-users">
  
   <?php
  
  ?>
   <table>
  <caption>Statement Summary</caption>
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Full Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Mobile.no</th>
      <th scope="col">Email-id</th>
      <th scope="col">DOB</th>
    </tr>
  </thead>
      <?php
      $sql="SELECT * from 17017c04035_two";
      $rs=$conn->query($sql); 
     while($result=$rs->fetch_assoc()): ?>
   <tr>
          <td data-label="Account"><?php echo $result['E_user'] ?></td>
          <td data-label="Due Date"><?php echo $result['E_pass'] ?></td>
          <td data-label="Amount"><?php echo $result['First']." " .$result['Last']  ?></td>
          <td data-label="Period"><?php echo $result['Post'] ?></td>
          <td data-label="Period"><?php echo $result['Num'] ?></td>
          <td data-label="Period"><?php echo $result['E_mail'] ?></td>
          <td data-label="Period"><?php echo $result['DOB'] ?></td>
      </tr>
    <?php endwhile ?>
   </table>
</div>


</body>

<script>var dropdown=document.getElementsByClassName("dropdown-btn");var i;for(i=0;i<dropdown.length;i++){dropdown[i].addEventListener("click",function(){this.classList.toggle("active");var dropdownContent=this.nextElementSibling;if(dropdownContent.style.display==="block"){dropdownContent.style.display="none";}else{dropdownContent.style.display="block";}});}</script>
</html>