
 <?php
 include("inc/header.php");
 ?>

 <?php
 include("inc/aside.php");
 $message4 = ""; 
$message5 = ""; 
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Patients Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Patients</h3>
                <?php echo $message4 ?>
                <?php echo $message5 ?>
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
  
</div>
<!-- ./wrapper -->



<?php
 include("inc/aside.php");
 ?>

<?php  
require ('inc/dbconnect.php');


if(isset($_POST['usubmit'])){

// Variables for user submit form()

$ustatus = $_POST['ustatus'];  
$pid = $_POST['pid'];


// Sql statements start

// Insert data into database

$query = "UPDATE `patients` SET `status`='$ustatus' WHERE patient_id='$pid'";

if($query_run = mysqli_query($conn, $query)){

  $message4 =  "<div class=\"alert alert-info\">
  <a href=\"addpatient.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"check\">&times;</a>
   Patient Added Successfully. <a href=\"addpatient.php\">Click to Add Patient </a></div>";

}else{
 $message5 =  "<div class=\"alert alert-danger\">
    <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Kindly fill the form again</div>";
    }

  
} 
 
?>

 
 <?php
 include("inc/footer.php");
 ?>
