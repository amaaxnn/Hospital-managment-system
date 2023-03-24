<?php 
  include ('home.php'); // include the home page file 

  include 'Connection.php'; //create the connection file 

  $result=mysqli_query($con,"SELECT * FROM payments"); //this database selecting the table name

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
</head>

<style>

.staff-table{
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
    width:96%;
    height:80vh;
    padding:20px 0 0 0;
    margin-top:90px;
    

}

h1{
    font-size:20px;
    color:black;
    text-align:center;
     margin-top:10%; 
     margin-bottom:-50px;

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
    padding:10px 30px;
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



/* delete button css style */
.back-button3{
    appearance:button;
    background-color:#2962FF;
    border:none;
    border-radius:5px;
    box-sizing:border-box;
    color:#fff;
    text-align:centerl
    cursor: pointer;
    font-weight:450;
    font-size:13px;
    line-height:1;
    overflow:visible;
    padding:11px 8px;
    position:relative;
    text-transform:none;
    transition:all 80ms ease-in-out;
    user-select:none;
    width:fit-content;
    text-decoration:none;
}
</style>

<body>
<!-- staff table start here -->
<div class="staff-table">
    <h1>PAYMENTS MANAGING RECORD LIST</h1>
<button class="back-button3" style="margin-right:85%;"> 
   <a href="Payment.php" style="text-decoration:none; color:white;">BACK</a>
</button>
    <div class="center-table">
        <div class="table-responsive">
            <table>
                <!-- create the table heading name -->
                <thead>
                    <tr> 
                        <th>INVOICE ID</th>
                        <th>PAYMENT TYPE</th>
                        <th>PATIENTS ID</th>
                        <th>TOTAL BILL AMOUNT</th>
                        <th>PAID BILL AMOUNT</th>
                        <th>OUTSTANDING BILL</th>
                        <th colspan="2">OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                             //   merging the data
                       while($row=mysqli_fetch_array($result)){      
                ?>
                        <!-- assign the variabe names -->
                    <tr>
                        <td><?php echo $row['payment_ID']; ?></td>
                        <td><?php echo $row['payment_type']; ?></td>
                        <td><?php echo $row['patient_ID']; ?></td>
                        <td><?php echo $row['payment_totalbill']; ?></td>
                        <td><?php echo $row['payment_paidbill']; ?></td>
                        <td><?php echo $row['outstanding_bill']; ?></td>
                        <td>
                            <!-- update query -->
                            <button class="update-button1" role="button"> 
                                <a href="updatepayment.php?payment_ID=<?php echo $row["payment_ID"];?>" style="text-decoration:none; color:white">UPDATE</a>
                            </button>
                        </td>
                        <td> 
                            <!-- delete query -->
                            <button class="delete-button1" role="button" onclick="return checkDelete()">
                                <a href="Deletepayment.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white">DELETE</a>
                            </button>
                        </td>
                    </tr>
                            <!-- this js function is staff managing delete button -->
                            <script language="JavaScript" type="text/javascript">
                                    function checkDelete(){
                                    return confirm('Are you Want to Delete Record?');
                                }
                            </script>                   
            <?php
                } // in i have close the php query and open it 
            ?>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>