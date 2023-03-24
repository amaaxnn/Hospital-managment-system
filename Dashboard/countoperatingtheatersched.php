<?php
include ('Connection.php');

$sql = "SELECT * FROM operating_room_schedules";
                $query = $con->query($sql);

                echo " <h3>".$query->num_rows."</h3>";
?>