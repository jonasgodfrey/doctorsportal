
 <?php
 include("inc/header.php");
 ?>

 <?php
 include("inc/aside.php");
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dentist</li>
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
                <h3 class="card-title">List of Dentists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Doctors id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Qualification</th>
                    <th>Practice</th>
                    <th>Address</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                            require('inc/dbconnect.php');
                           
                            $sql = "SELECT `id`, `drname`, `email`, `phone`, `qualification`, `practice`, `address` FROM `doctorsprofile`  WHERE qualification='dentist' ORDER BY id DESC";
                            $result = $conn->query($sql);
                            // $counter = 1;

                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                            

                                echo "<tr>
                                
                                <td>".$row["id"]."</td>
                                <td>".$row["drname"]."</td>
                                <td>".$row['email']."</td>                               
                                <td>".$row['phone']."</td>
                                <td>".$row['qualification']."</td>                                
                                <td>".$row['practice']."</td>
                                <td>".$row['address']."</td>
                               
                                

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
                    <th>Doctors id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Qualification</th>
                    <th>Practice</th>
                    <th>Address</th>
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
 include("inc/footer.php");
 ?>
