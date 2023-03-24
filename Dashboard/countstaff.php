<?php
include ('Connection.php');

$sql = "SELECT * FROM staffs";
                $query = $con->query($sql);

                echo " <h3>".$query->num_rows."</h3>";
?>
