<?php
include ('home.php'); // this is home page include here

?>
<!-- this is css file link -->
<link rel="stylesheet" href="css/style.css">

<!-- website home part -->
<div class="home-content">

  <!-- patient box panal -->
      <div class="overview-boxes">
      <div class="box">
          <div class="right-side">
            <div class="box-topic">Patients</div>
            <div class="indicator" style="padding-top:20px;">
              <span class="text">
                <!-- This management file  -->
              <a href="managementpatient.php">View Patients Record List ></a>
              <?php 
                include 'countpatient.php'; //this is to show how many patient record has been inserted count numbers
              ?>         
              </span>
            </div>
          </div>
          <i class='bx bx-plus-medical cart' style="margin-right:8px;" ></i>
        </div>

        <!-- this is staff box panel -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Staff</div>
            <div class="indicator" style="padding-top:20px;">
              <span class="text">
                <!-- this staff managment file -->
              <a href="managementstaff.php">View Staff Record List ></a> 
              <?php 
                 include 'countstaff.php'; //this is to show how many staff record has been inserted count numbers
              ?>        
              </span>
            </div>
          </div>
          <!-- this is icon  -->
          <i class='fa fa-users cart two' style="margin-right:8px;" ></i>
        </div>

        <!-- this is staff scehdule box panel -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Staff Schedules</div>
            <div class="indicator" style="padding-top:20px;">
              <span class="text"> 
                  <a href="managementStaffschedule.php">View Staff Schedules Record List ></a>
                <?php 
                    include 'countstaffschedule.php';
                ?>
                </span>
            </div>
          </div>
          <i class='bx bx-pie-chart-alt-2 cart three' style="margin-right:8px;" ></i>
        </div>

        <!-- this is payment invoice box panel -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Payments Invoice</div>
            <div class="indicator" style="padding-top:18px;">
              <span class="text" > 
                <!-- this payment file -->
                  <a href="managementpayment.php">View Payment Record List ></a>
              <?php 
                include 'countpayment.php';
              ?>
            </span>
            </div>
          </div>
          <i class='bx bxs-printer cart four' style="margin-right:1px;"></i>
        </div>
</div>

<div class="home-content">
          <!-- this is room box panel -->
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Rooms</div>
            <div class="indicator" style="padding-top:20px;">            
            <span class="text">
              <!-- this maangemnt room file -->
                <a href="managementroom.php">View Rooms Record List ></a>
                <?php 
                    include 'countroom.php'; //room count display file 
                ?>
            </span>
            </div>
          </div>
          <i class='bx bxs-door-open cart' style="margin-right:8px;"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Doctors</div>
            <div class="indicator" style="padding-top:20px;">
              <span class="text"> 
                  <a href="managementdoctors.php">View Doctors Record List ></a> 
                  <?php 
                   include 'countdoctors.php';
                   ?>
                </span>
            </div>
          </div>
          <i class='fa fa-user-md cart two'style="margin-right:8px;" ></i>
         
        </div>
      <!-- this is operating room box panel -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Operating Theater</div>
            <div class="indicator" style="padding-top:20px;">
              <span class="text">
                   <a href="managementoperatingtheater.php">View Operating Room Record List></a>
                   <?php 
                      include 'countoperatingtheater.php';
                    ?>
              </span>
            </div>
          </div>
          <i class='bx bx-heart cart three' style="margin-right:8px;"></i>
          
        </div>

        <!-- tis is oprerating box panel  -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Operating Room Schedules</div>
            <div class="indicator">
              <span class="text" >
                <!-- this management O / R schedule file here -->
                   <a href="managementOperatingtheatrschd.php">View Operating Room Schedules Record List ></a>
                   <?php 
                       include 'countoperatingtheatersched.php';
                    ?>
                </span>
            </div>
          </div>
          <i class='bx bx-pie-chart-alt-2 cart four' style="margin-right:8px;" ></i>

        </div>
</div>
  </section>

  <!-- panel part code end here -->


 