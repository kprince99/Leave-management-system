<?php
// include_once 'core.php'; 
// include_once 'connection.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/425aca6d49.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

html,
body {
  height: 100%;
  width: 100%;
  font-family: 'Nunito', sans-serif;
  display: flex;
  background: #ebedef;
}

a {
  text-decoration: none;
}

p{
  position:relative;
  text-align: center;
  top: 2.5rem;
  font-size: 20px;
  font-weight: 700;
}


#sidebar {
  padding: 20px 0;
  background-color: #4723d9;
  width: 300px;
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: 250ms ease-in;
  transition: 250ms ease-in;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

#sidebar .navbar-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 10px 20px;
}

#sidebar .navbar-header .brand-logo {
  font-size: 1.5em;
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: 250ms ease-in;
  transition: 250ms ease-in;
  visibility: visible;
}

i
{color: #AFA5D9;
margin-right: 5px;}

.nav-link{
  color: #AFA5D9;
  transition: .3s;
}

.nav-link:hover{
    color: #F7F6FB;
}


 .nav-item {
  padding: 0.5rem 0rem .5rem 2.5rem;
   margin-bottom: 1.5rem;
  cursor: pointer;
}

 .nav-item:hover{
  color: #F7F6FB;
  border-left: 2px solid #fff;

}

.navbar-body .log
{
    bottom: 10px;
    list-style: none;
    position:absolute;
}

#main-content {
  display: flex;
}

#main-content .check-box {
  cursor: pointer;
  padding: 18px;
  flex: 1;
  
}

#main-content .check-box .line {
  width: 20px;
  height: 2px;
  background-color: #212121;
  margin: 4px 0;
  display: block;
}

#checkbox {
  display: none;
}

#checkbox:checked ~ #sidebar {
  width: 0;
  -webkit-animation: sidebarAnim 500ms;
          animation: sidebarAnim 500ms;
}

#checkbox:checked ~ #sidebar .nav-item {
  -webkit-transform: translateX(-200px);
          transform: translateX(-200px);
}

#checkbox:checked ~ #sidebar .brand-logo {
          transform: translateX(-200px);
         visibility: hidden;
}

#checkbox:checked ~ #sidebar .navbar-header {
  visibility: hidden;
}

nav {
    width:100%;
    height: 60px;
    box-shadow:  0 0 10px rgba(0,0,0,0.5);
    list-style: none;    /*gets rid of bullet points*/ 
    text-align: left;
    flex: 1;
    padding: 0px 10px 0px 10px; 
    background: #fff;
  
}

.dropbtn {
  padding: 4px;
  background: #fff;
  border: none;
  outline: none;
  cursor: pointer;
}

.dropbtn img
{
  border-radius: 50%;
  width: 40px;
  height: 40px;
}

.dropbtn i
{
    color: black;
}

#main-content .account
{

    flex: 1;
    margin: 0 auto;
    align-items: flex-end;
    justify-content: flex-end;
    display: flex;
}

/* #triangle {
    width: 0;
    height: 0;

    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-bottom: 100px solid red;
} */

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  border-radius: 5px;
  right: 0;
  background-color: #f1f1f1;
  min-width: 140px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* .dropdown-content::before
{
    content:"";
    height:0;
    width:0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid black;
    position:absolute;
    top: 20px;
    left:50%;
    margin:0 0 0 -3px;
    z-index:100;
} */

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

@-webkit-keyframes sidebarAnim {
  0% {
    width: 220px;
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
    visibility: visible;
  }
  50% {
    width: 220px;
  }
  100% {
    width: 0;
    opacity: 0;
    -webkit-transform: translateX(-220px);
            transform: translateX(-220px);
    visibility: hidden;
  }
}

@keyframes sidebarAnim {
  0% {
    width: 220px;
    opacity: 1;
    transform: translateX(0);
    visibility: visible;
  }
  50% {
    width: 220px;
  }
  100% {
    width: 0;
    opacity: 0;
    transform: translateX(-220px);
    visibility: hidden;
  }
}

.all
{
  position: relative;
  width: 100%;
}
.content-wrapper
{
  height: auto;
  padding: 20px;
  position: relative;
}

.page-title
{
  display: flex;
  line-height: 36px;
  background: #fff;
  padding: 15px;
  border-radius: 5px;
}

.page-title i
{
  background: linear-gradient(to right, #da8cff, #9a55ff);
  padding: 10px;
  border-radius: 5px;
  color: #fff;
}

.box
{
   display: flex;
   border-radius: 5px;
   padding: 30px 0px;
   flex-wrap: wrap;
    gap: 20px;
   flex-direction: row;
  
}

.box .box-row
{ 
  flex: 1;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  height: 100px;
  position: relative;
  display: flex;
  border-radius: 5px;
   background: #fff;
}

.inside-box
{
  display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
padding: 15px;
}

.heads
{
  font-size: 0.88rem;
  color: #9B5DE5;
}
.big-head
{
  font-size: 2.5rem;

}

    </style>

<body>
    <input type="checkbox" name="checkbox" id="checkbox">
    <aside id="sidebar">
        <header class="navbar-header">
            <a href="#" class="brand-logo" style="margin-bottom: 2rem; color:#fff;"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </header>
        <main class="navbar-body">
            <ul>
                <li class="nav-item">
                    <i class="fas fa-user"></i><a href="" class="nav-link">User Details</a>
                </li>
                <li class="nav-item">
                    <i class="far fa-envelope-open"></i><a href="" class="nav-link">  Leaves </a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-unlock-alt"></i><a href="" class="nav-link"> Reset Password </a>
                </li>
                <li class="nav-item log">
                    <i class="fas fa-sign-out-alt"></i><a href="<?php echo '{home_url}logout.php'; ?>" class="nav-link">Logout </a>
                </li>
            </ul>
        </main>
    </aside>
    

      <div class="all">
    <nav>  
    <main id="main-content">
        <label for="checkbox" class="check-box">
            <span class="line line1"></span>
            <span class="line line3"></span>
            <span class="line line2"></span>
          </label>
        <div class="account">
          <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn"><img src="https://i.pinimg.com/originals/ca/76/0b/ca760b70976b52578da88e06973af542.jpg" id="nav-img"></button>
             <div id="myDropdown" class="dropdown-content" >
                <a href="#home"><i class="far fa-user-circle"></i>Edit Profile</a>
                <a href="#project"><i class="fas fa-cog"></i>Settings</a>
            </div>
        </div>
      </div>
    </main> 
</nav>

    <div class="content-wrapper">
      <div class="page-title">
      <i class="fas fa-home"></i>
      <h3>Dashboard</h3>
      </div>
         

     <div class="box">
          <div class="box-row">

          <div class="inside-box">
          <h3 class="heads"> No of Users</h3>
              <h1 class="big-head">500k</h1> 
            </div>
             </div>

     <div class="box-row">
         
        <div class="inside-box">
          <h3 class="heads"> Approved Leaves</h3>
              <h1 class="big-head">20</h1>
      </div>
    </div> 


        <div class="box-row">
         
        <div class="inside-box">
          <h3 class="heads"> Approved Leaves</h3>
              <h1 class="big-head">20</h1>
      </div>
    </div> 

        <div class="box-row">
        <div class="inside-box">
          <h3 class="heads">Rejected Leaves</p>
              <h1 class="big-head">2</h1>
      </div>
    </div> 
   </div>

</body>

<script type="text/javascript">
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#nav-img')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</html>