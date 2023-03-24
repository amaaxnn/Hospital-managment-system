<?php
include 'Connection.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <?php include 'links.php'; ?>
    <title>Arogya Admin</title>
    <link rel="stylesheet" href="css/login.css">

    <!-- FONT GGOGLE LINK -->
    <link rel="stylesheet" href="css/fontawesome.min.css"> 
    <link rel="stylesheet" href="css/style.css">
   

    <!-- GOOGLE FONT FAMILY CSS TEXT STYLE LINK -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<style>
body{
    background-image: url('images/Cover-1.jpg'); 
    background-repeat: no-repeat; 
    background-size: 100% 100%;
}

form h2{
    font-weight: 500;
}
</style>
<body>
<form action="login.php" method="post">
    <!-- login heading  -->
     	<h2>Arogya Login System</h2> 
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name </label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password </label>
     	<input type="password" name="password" placeholder="Password"><br>
        <!-- login button   -->
     	<button type="submit">Login</button>
     </form>

    
</body>
</html>