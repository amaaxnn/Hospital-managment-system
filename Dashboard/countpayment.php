<?php
include ('Connection.php');

$sql = "SELECT * FROM payments";
                $query = $con->query($sql);

                echo " <h3>".$query->num_rows."</h3>";
?>
