
    <?php require_once "../includes/blogSearchFinal.php"?>   
    <link href="../css/blogSearchStyle.css" rel="stylesheet" type="text/css"/>
    <link href="../css/homeBody.css" rel="stylesheet" type="text/css"/>
    <a href="../includes/header.php"></a>
<div style='background-color: #E8E8E8'>
        
        <div class='container-fluid' id='titleCont'> 
    <div id='titleRow'>
        <div class="row">
            <div class='col-md-12'>
                <h2 class='titleText'>Exercise Made Easy</h2>
            </div>    
    </div>
    </div>
    
<div class="card-deck" id="parent">
      <div class="row" id="blogRow">
  <div class="card col-xs-3 col-xs-6 col-xs-12">
    <img class="card-img-top" src="../images/AdobeStock_109806363_Preview.jpg" id="postImage"alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cardio<br></h5>
      <p class="card-text">
          Body Part<br>
          Difficulty<br>
      </p>
      <a href="#" class="btn btn-primary" id="readMore">Read More!</a> 
    </div>
  </div>
      <div class="card col-xs-3 col-xs-6 col-xs-12">
    <img class="card-img-top" src="../images/AdobeStock_109806363_Preview.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Running<br></h5>
      <p class="card-text">
          Body Part: Legs<br>
          Level: Difficult<br>
      </p>
      <a href="#" class="btn btn-primary" id='readMore'>Read More!</a> 
    </div>
  </div>
<div class="card col-xs-3 col-xs-6 col-xs-12">
    <img class="card-img-top" src="../images/AdobeStock_109806363_Preview.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Stretching<br></h5>
      <p class="card-text">
          Body Part: Chest<br>
          Level: Medium<br>
      </p>
      <a href="#" class="btn btn-primary" id='readMore'>Read More!</a> 
    </div>
  </div>
 <div class="card col-xs-3 col-xs-6 col-xs-12">
    <img class="card-img-top" src="../images/AdobeStock_109806363_Preview.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Strength Training<br></h5>
      <p class="card-text">
          Body Part: Arms<br>
          Level: Easy<br>
      </p>
      <a href="#" class="btn btn-primary" id='readMore'>Read More!</a> 
    </div>
</div>

 </div>
</div>
        </div>
</div>
<!-- <?php
//session_start();
//if(isset ($_SESSION["email"]))
//{
//    echo'<h3>Login Success,Welcome -' . $_SESSION["email"] .'<?h3>';
//    echo'<br /><br /><a href="logout.php">Logout<?a>';
//}
// else {
//    //header("location:../validateLogin.php");
//    require_once 'views/admin/login/validateLogin.php';
//}-->
