<!-- in here i have include home and table files -->
<?php 
 include ('home.php');

 $selectquery="SELECT * from patients"
?>
<script src="javascript/jquery.min.js"></script>
<script src="javascript\bootstrap.bundle.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    
</head>

<style>

/* pateint table record css style start here */
.patient-table{
    width:100%;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    
}

/* .patient-table .center-table{
    margin-top:70px;
} */

.center-table{
    width:90%;
    height:80vh;
    padding:10px 0 0 0;
    margin-top:50px;
    

}

h1{
    font-size:20px;
    color:black;
    text-align:center;
     margin-top:10%; 
     margin-bottom:-30px;

}

table{
    
    border-collapse:collapse;
    background-color:#fff;
    border-radius:10px;
    margin:auto;
    border:0px;

}

th,td{
    border:1px solid #f2f2f2;
    padding:12px 30px;
    text-align:center;
    color:grey;
    border:0px;

}

th{
    color:#000;
    text-transform:uppercase;
    font-weight:500;
    background-color:#ECEFF1;
}

td{
    color:#616161;
    font-size:14px;
    background-color:#FAFAFA;
}

/* update button css style */
.update-button1{
    appearance:button;
    background-color:#2962FF;
    border:none;
    border-radius:5px;
    box-sizing:border-box;
    color:#fff;
    cursor: pointer;
    font-weight:450;
    font-size:13px;
    line-height:1;
    overflow:visible;
    padding:10px 7px;
    position:relative;
    text-align:center;
    text-transform:none;
    transition:all 80ms ease-in-out;
    user-select:none;
    width:fit-content;
    text-decoration:none;
}

/* delete button css style */
/* update button css style */
.delete-button1{
    appearance:button;
    background-color:#F44336;
    border:none;
    border-radius:5px;
    box-sizing:border-box;
    color:#fff;
    cursor: pointer;
    font-weight:450;
    font-size:13px;
    line-height:1;
    overflow:visible;
    padding:10px 7px;
    position:relative;
    text-align:center;
    text-transform:none;
    transition:all 80ms ease-in-out;
    user-select:none;
    width:fit-content;
    text-decoration:none;
}


</style>
<body>

<div class="patient-table">
    <h1>PATIENTS MANAGING RECORD LIST</h1>
    <div class="center-table">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PATIENT NAME</th>
                        <th>BIRTH DATE</th>
                        <th>ADDRESS</th>
                        <th>MOBILE</th>
                        <th>DOCTOR NAME</th>
                        <th colspan="2">OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    // create connection
                    include 'Connection.php';
                    // database table name
                    $selectquery = "select * from patients ";
                    // execting the query
                    $query = mysqli_query($con,$selectquery);

                    $nums = mysqli_num_rows($query);
                    // assigning merging the table datas
                    while($row = mysqli_fetch_array($query)){
                    ?>

                    <!-- creating the DB data name -->
                    <tr>
                        <td><?php echo $row['Pat_ID']; ?> </td>
                        <td><?php echo $row['Pat_Name']; ?> </td>
                        <td><?php echo $row['Pat_DOB']; ?> </td>
                        <td><?php echo $row['Pat_Addrss']; ?> </td>
                        <td><?php echo $row['Pat_Teleno']; ?> </td>
                        <td><?php echo $row['Doc_Name']; ?> </td>
                        <td>
                            <!-- update button -->
                            <button class="update-button1" role="button">
                                <a href="Updatepatient.php?Pat_ID=<?php echo $row['Pat_ID']; ?>" 
                                style="text-decoration:none; color:white">UPDATE</a>
                            </button>
                        </td>
                                <!-- delete button -->
                        <td> 
                            <button class="delete-button1" role="button" onclick="return checkDelete()">
                                <a href="Deletepatient.php?id=<?php echo $row['id']; ?>" 
                                style="text-decoration:none; color:white">DELETE</a>
                            </button>
                        </td>

                        <!-- this js function is patient managing delete button -->
                        <script language="JavaScript" type="text/javascript">
                            function checkDelete(){
                            return confirm('Are you Want to Delete Record?');
                            }
                        </script>
                    </tr>
                <?php
                }
                ?>
                <!-- management php code end here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>