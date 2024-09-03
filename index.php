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
<script>
function validateForm() 
{ 
  var y = document.forms["form"]["name"].value;
  	var letters = /^[A-Za-z]+$/;
    if (y == null || y == "") 
    {alert("Name must be filled out.");
      return false;}
      var z =document.forms["form"]["college"].value;
      if (z == null || z == "") 
      {alert("college must be filled out.");
        return false;}
        var x = document.forms["form"]["email"].value;
        var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
{alert("Not a valid e-mail address.");
  return false;}
  var a = document.forms["form"]["password"].value;
  if(a == null || a == "")
  {alert("Password must be filled out");
    return false;}
    if(a.length<5 || a.length>25)
    {alert("Passwords must be 5 to 25 characters long.");
      return false;}
var b = document.forms["form"]["cpassword"].value;
if (a!=b){alert("Passwords must match.");
return false;}
}
</script>

</head>

<body>
  <div class="header">
<nav class="navbar navbar-inverse navbar-static-top">
  
  <div class="container-fluid">
    <div class="navbar-header" style="margin-top:0px">
      <a class="navbar-brand"><span class="logo">Test your skill</span></a>
    </div>
<div class="sub1">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="link" data-bs-toggle="modal" data-bs-target="#ModalForm">&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true" ></span>&nbsp;<span class="title1">Sign-in</span></a></li>
</ul>
</div> </div>

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
<div class="bg1">
<div class="box">
  <section class="vh-90 gradient-custom">
  <div class="container py-3 h-90">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-3 pb-2 pb-md-0 mb-md-4">Registration Form</h3>
            
            <form name="form" action="signup.php?q=account.php" onSubmit="return validateForm()" method="POST">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="name" class="form-control input-md" name="name" />
                    <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                  </div>

                </div>
                
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="college" name="college"/>
                    <label for="college" class="form-label">College<span class="text-danger">*</span></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="col-md-12">
                  <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
                <option value="Male">Select Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option> </select>
                <label class="col-md-12 control-label" for="gender"> Gender</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="mob" class="form-control form-control-lg" name="mob" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>
              <div class="col-md-6 mb-4 pb-2">

              <div class="form-outline">
                <input type="password" id="password" class="form-control form-control-lg" name="password" value=""/>
                <label class="form-label" for="password">Password<span class="text-danger">*</span></label>
              </div>

              </div>
              <div class="col-md-6 mb-4 pb-2">
              <div class="form-outline">
                <input type="password" id="cpassword" class="form-control form-control-lg" name="cpassword" />
                <label class="form-label" for="password">ConfirmPassword<span class="text-danger">*</span></label>
              </div>

              </div>

              <div class="mt-2 pt-1">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>

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
        <a href="javascript:void(0);" id="link1" data-bs-toggle="modal" data-bs-target="#developers">Developers</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-1 box4">
       <a href="feedback.php" id="link1" target="_blank">Feedback</a>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
</footer>

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

</body>
</html>
