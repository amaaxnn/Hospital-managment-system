
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>

<style>
.logo-details{
    position: relative;
margin-right: 95%;
margin-top:30px;

}
body{
    margin-top:16px;
}
body form{
    margin-bottom:7%;
}
h1{
    font-weight: 400;
	text-align: center;
	padding-top:0px;
    color:#000;
    padding-bottom:30px;
    font-size:26px;
}
</style>
<div class="logo-details">      
      <img src="images/Background.png" alt="" style="width:65px; height:65px;" > 
</div>
<br><br>
<body background="IMAGES\Cover.jpg">
    <h1>Welcome to Arogya Health Care Hospital</h1>
    <br>
     <form action="login.php" method="post" style="padding-top:-10%;">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['submit'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" class="btn btn-primary"><a href="Index.php">
               Login</a>
          </button>
          <a href="signup.php" class="ca">Create an account</a>

     </form>
</body>
</html>