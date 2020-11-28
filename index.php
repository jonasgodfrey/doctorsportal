
 <?php
 include("inc/header.php");
 
if(!loggedin()){
  header('Location: login.php');
}else{
         
           
 
            include("inc/aside.php");

            $result1 = mysqli_query($conn,"SELECT * FROM `doctorsprofile`");
            $report = mysqli_num_rows($result1);

            $result2 = mysqli_query($conn,"SELECT * FROM   `patients` ");
            $report2 = mysqli_num_rows($result2);

            $result3 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'Pending'");
            $report3 = mysqli_num_rows($result3);

            $result4 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'Completed'");
            $report4 = mysqli_num_rows($result4);

            $result5 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'Awaiting'");
            $report5 = mysqli_num_rows($result5);

            $result6 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'In Treatment'");
            $report6 = mysqli_num_rows($result6);

            $result7 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'Approved'");
            $report7 = mysqli_num_rows($result7);

            $result8 = mysqli_query($conn,"SELECT * FROM `patients` WHERE status = 'Archive'");
            $report8 = mysqli_num_rows($result8);

            

   
}    
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $report2;?></h3>

                <p>Patients</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $report3; ?></h3>

                <p>Pending</p>
              </div>
              <div class="icon">
                <i class="fa fa-address-card "></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $report4; ?></h3>

                <p>Completed</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
              <h3><?php echo $report5; ?></h3>

                <p>Awaiting Review</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
              <h3><?php echo $report6; ?></h3>

                <p>In-treatment</p>
              </div>
              <div class="icon">
                <i class="fa fa-address-card"></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
              <h3><?php echo $report7; ?></h3>

                <p>Approved</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="viewpatients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- Main row -->
        <div class="row">
      
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Patients</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>PatientID</th>
                    <th>Patient</th>
                    <th>Ship to Office</th>
                    <th>DOB</th>
                    <th>Clinical Conditions</th>
                    <th>Treatment Options</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                           
                            $sql = "SELECT `patient_id`, `p_fname`, `p_lname`, `p_mname`, `gender`, `ship_address`, `dob`, `clinical_conditions`, `other`, `notes`,
                            `treatment_option`, `status`, `startdate` FROM `patients` ORDER BY `patient_id` DESC";
                            $result = $conn->query($sql);
                            // $counter = 1;

                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                                $ustatus ="<a href='javascript:;' onClick='pickRow(" . json_encode($row) .")' 
                                data-toggle='modal' data-target='#exampleModal2' class='btn btn-success btn-sm' id='resolvedbtn' style='width:100%'>
                                <span class='spinner-grow spinner-grow-sm'></span>
                                <i class='fa fa-eye'></i></a>";


                                echo "<tr>
                                <td>".$row["patient_id"]."</td>
                                <td>".$row["p_fname"]."</td>
                                <td>".$row['ship_address']."</td>                               
                                <td>".$row['dob']."</td>
                                <td>".$row['clinical_conditions']."</td>                                
                                <td>".$row['treatment_option']."</td>
                                <td>".$row['status']."</td>
                                <td>".$row['startdate']."</td>
                                <td>".$ustatus."</td>
                               
                                

                                </tr>";
                                // $counter++;

                              }

                            }
                            else{
                              echo "0 result";
                            }
                            ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>PatientID</th>
                    <th>Patient</th>
                    <th>Ship to Office</th>
                    <th>DOB</th>
                    <th>Clinical Conditions</th>
                    <th>Treatment Options</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <?php
 include("inc/aside.php");
 ?>
 <?php
 include("inc/footer.php");
 ?>
