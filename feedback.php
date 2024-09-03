<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

</head>

<body>
<div class="bg1">
  <div class="header">
<nav class="navbar navbar-inverse">
  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="logo">Test your skill</span></a>
    </div>
    <div class="topnav-right">
    <?php
 include_once 'config.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="navbar-right sub1 btn title3" data-bs-toggle="modal" data-bs-target="#ModalForm" id="feedbutton"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="sub1 btn title3" id="feedbutton"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="index.php" class=" btn sub1 title3" id="feedbutton"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

</nav></div>


<!-- Modal Form -->
<div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <!-- Login Form -->
        <form action="login.php?q=index.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Log-in</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="email">Email-id<span class="text-danger">*</span></label>
                <input type="text" name="email1" class="form-control" id="email1" placeholder="Enter Email-id">
            </div>

            <div class="mb-3">
                <label for="Password">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>
          </div>
          <div class="modal-footer pt-4">                  
          <input type="submit" name="login" value="Login" class="btn btn-primary" />
          </div>
      </form>
    </div>
  </div>
</div>

<div class="feedback">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(images/bg5.png); min-height:430px; border-radius:15px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:mansikotak1706@gmail.com" style="color:yellow; background-color:lightbrown;">mansikotak1706@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the enteries below:-</p>
<form role="form"  method="post" action="feedbackphp.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->
<br>
<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->
<br>
<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div><br>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end--></div>


<footer class="bg-dark text-center text-lg-start" style="color:yellow">
  <!-- Grid container -->
  <div class="container ">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-5 box2">
   <a href="javascript:void(0);" id="link1" data-bs-toggle="modal" data-bs-target="#login">Admin login</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-5 box3">
        <a href="javascript:void(0);"id="link1" data-bs-toggle="modal" data-bs-target="#developers">Developers</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
</footer>
</div>
<!--admin login modal -->
<div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <!-- Login Form -->
        <form role="form" method="post" action="admin.php?q=index.php">
          <div class="modal-header">
            <h5 class="modal-title"> Admin Log-in</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="email">Admin Email-id</label>
                <input type="text" name="email2" class="form-control" id="email2" placeholder="Enter Email-id">
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>
            
          </div>
          <div class="modal-footer pt-4">                  
          <input type="submit" name="login" value="Login" class="btn btn-primary" />
          </div>
      </form>
    </div>
  </div>
</div>


<!--developer modal -->
<div class="modal fade" id="developers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Developed By</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>
		<div class="row">
		 <div class="col-md-5">
		<a  style="color:#202020; font-family:'typo' ; font-size:18px" >Mansi Kotak</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9054298900</h4>
		<h5 style="font-family:'typo' font-size:16px">mansikotak1706@gmail.com</h5>
		</p>
      </div>
     
    </div>
  </div>
</div>
