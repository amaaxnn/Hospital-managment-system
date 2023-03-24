<?php
   include ('home.php')
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'links.php' ?>
</head>


<style>
    /* PATIENT FORM START HERE */

    .wrapper{
    top:130px;
    left:25%;
    padding-bottom:50px;
    position: relative;
    max-width: 750px;
    max-height:790px;
    width: 100%;
    background:rgba(240, 249, 252, 0.6);
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
    margin-top:-5%;
    text-align:center;
    position: relative;
    font-size: 22px;
    font-weight: 510;
    color: #333;
}



.wrapper form label{
    color:black;
   
}

.wrapper form .input-box{
  height: 40px;
  margin: 13px 0;
}
form .input-box input{
  height: 80%;
  width: 100%;
  outline: none;
  padding: 0 10px;
  font-size: 16px;

  font-weight: 400;
  color: #1f1e1e;
  border: 1px solid #EEEEEE;
  border-bottom-width: 2.5px;
  border-radius: 4px;
}

.wrapper form .input-box label{
    margin-left:2%;
} 


.input-box input:focus,
.input-box input:valid{
  border-color:#fff;
}

form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}


/* add button css */
.staffsched-btn{
        width: 90%;
        margin-top: 30px;
        margin-bottom:5%;
        max-width: 60px;
        cursor: pointer; 
        border:0px;
        display:inline;
        content:space-beteen; 
        border-radius:7px;  
        
    }

 .staffsched-btn .add-btn {
        margin-top:10px;
        margin-bottom:2%;
        font-size:17px;
        margin-right:2px;
        width:70px;
        margin-left:1%;
        border:0px;
        height:37px;
        max-width:100px;
        background:#2979FF;
        color:white;
        cursor: pointer;
        border-radius:7px;   
    }

  /* this anger link to go back to record list page */
 .wrapper form  .backto a{
  text-align: center;
  margin-left:37%;
  font-size:13px;
  padding:0%;
  margin-top:0%;
  margin-bottom:5%;
  text-decoration:none;

}

/* END HERE */
</style>

<body>

<!-- Room form start here -->
<div class="wrapper">
    
    <form action="#" method="post">
    <h2>ROOMS INFORMATION</h2>
    <div class="backto">
        <a href="managementroom.php">Back to Rooms Record List</a>
    </div>
      <div class="input-box" style="margin-top:3%;" >
        <label for="">Room ID</label>
        <input type="text"name="room_ID" placeholder="Enter Room ID" required>
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Period</label>
        <input type="text" name="r_period" placeholder="Enter Room Period ">
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Room Type</label>
        <input type="text" name="room_type" placeholder="Enter Room Type">
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Patient ID</label>
        <input type="text" name="pat_ID" placeholder="Enter Patient ID">
      </div><br>

      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="Insert" value="ADD">
      </div> <br>
    </form>
</div>
</body>
</html>

<!--  In here php coding start here -->
<?php
              //database connection
            include 'Connection.php';
        //this is to Add the data in database 
           if(isset($_POST['Insert'])){
            
            
            //creating variable
            // fetch the input datas $_POST
            $room_ID=$_POST['room_ID'];
            $r_period=$_POST['r_period'];
            $room_type=$_POST['room_type'];
            $pat_ID=$_POST['pat_ID'];

          //sql query to add the data
      $sql = "INSERT into `room`(`room_ID`, `r_period`, `room_type`, `pat_ID`) 
      VALUES ('$room_ID','$r_period','$room_type','$pat_ID')";
        
        // execute the query
        $result = mysqli_query($con, $sql);

        if($result == TRUE) {
          ?> <!--displaying a pop up message-->
          <script>
             alert("Record has been Insert Successfully");
          </script>
          <?php
        }else{
          ?> <!--displaying a pop up message-->
          <script>
              alert("Data is not added");
          </script>
          <?php
        }
    }
?>

