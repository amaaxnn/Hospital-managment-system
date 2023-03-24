<?php
include ('Connection.php');

$sql = "SELECT * FROM patients"; 
                $query = $con->query($sql);

                echo " <h3>".$query->num_rows."</h3>";
?>
