
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

     <!-- GOOGLE FONT FAMILY CSS TEXT STYLE LINK -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

     
</head>
<style>
.logo-details{
     margin-right: 95%;
     padding-top:80px;
     padding-bottom:0%;  
}
</style>
<div class="logo-details">      
      <img src="images/Background.png" alt="" style="width:65px; height:65px;" > 
</div>
<body background="IMAGES\Cover.jpg" style="margin-top:5px;">
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
          <!-- registration data getting codoing to assig nthe names -->
     	<?php if (isset($_GET['error'])) { ?> 
               <!-- if datas not correct this error messge is showing  -->
     		<p class="error"><?php echo $_GET['error']; ?></p> 
     	<?php } ?>
                    <!-- is it user and pass coreect popup message showing created an account  -->
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
               <!-- registration form here -->
          <label>Name</label>
          <!-- getting and fetching the datas -->
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
                    <!-- username fetching  -->
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>
                    <!-- confirm re enter passwords -->
          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

          <button type="submit" class="btn btn-primary">
               SignUp
          </button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
<br>
<br><br>
<footer>
     <!-- website bottom footer -->
<div class="bottom">
     <p>Copyright © 2022 <a href="#">By Mohamed</a> All rights reserved</p>
   </div>
 </footer>
</body>
</html>