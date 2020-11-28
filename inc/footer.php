<footer class="main-footer">
    <strong>Copyright &copy; 2020 | Powered By <a href="themarketingmagnetltd.com" target="_blank">Marketing Magnet Ltd</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <script>
     $('#butt').click(function(){
            var leader_id = $('input[name=file]').val();
            console.log(leader_id);
            });
  </script>
  
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


  function pickRow(value){
      

      $('#patient_id').val(value.patient_id)
      $('#p_fname').val(value.p_fname)
      $('#ship_address').val(value.ship_address)
      $('#dob').val(value.dob)
      $('#clinical_conditions').val(value.clinical_conditions)
      $('#treatment_option').val(value.treatment_option)
      $('#status').val(value.status)
      $('#notes').val(value.notes)
      $('#other').val(value.other)
      $('#startdate').val(value.startdate)
      $('#ustatus').val(value.ustatus)
      
    }

    function pickRows(value){
      

      $('#drname').val(value.drname)
      $('#email').val(value.email)
      $('#phone').val(value.phone)
      $('#qualification').val(value.qualification)
      $('#practice').val(value.practice)
      $('#address').val(value.address)
      $('#CreatedAt').val(value.CreatedAt)
     
      
    }
   

</script>

<!-- Modal For Doctors -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">About Doctor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="display"></div>
      <img src="dist/img/dentist.PNG"">
          <form role="form" action="social_media_reports.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="dayrep" class="form-control" id="drname" value="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="consumer" class="form-control" id="email" readonly>
                </div>
                <div class="form-group">
                  <label for="">Contact No</label>
                  <input type="text" name="operator" class="form-control" id="phone" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Qualification</label>
                  <input type="text" name="operator" class="form-control" id="qualification" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Practice</label>
                  <input type="text" name="ctype" class="form-control" id="practice" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Location</label>
                  <input type="text" name="ctype" class="form-control" id="address" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Joined</label>
                  <input type="text" name="ctype" class="form-control" id="CreatedAt" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>
<!-- 
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Registered</label>
                  <input type="text" name="ctype" class="form-control" id="DateReported" readonly>
                  <input type="hidden" name="SocialMediaReportID" class="form-control" id="SocialMediaReportID" readonly>
                </div>           -->
                             
              
            </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" name="resolution_submit" class="btn btn-primary btn-md">Submit</button>
              </div> -->
            </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal For Patients -->



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog modal-dialog-centered" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">About Patient</h3>
                
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <div class="display"></div>
      <img src="dist/img/userim.PNG"">
      
      <form action="viewpatients.php" method="POST">
      <div class="form-group">
                  <label for="">Patient ID:</label>
                  <input type="text" name="pid" class="form-control" id="patient_id" value="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Patient Name:</label>
                  <input type="text" name="consumer" class="form-control" id="p_fname" readonly>
                </div>
                <div class="form-group">
                  <label for="">Date of Birth</label>
                  <input type="text" name="operator" class="form-control" id="dob" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Clinical Conditions</label>
                  <input type="text" name="operator" class="form-control" id="clinical_conditions" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Others</label>
                  <input type="text" name="ctype" class="form-control" id="other" readonly>
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Treatment Option</label>
                  <input type="text" name="ctype" class="form-control" id="treatment_option" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Ship to Address</label>
                  <input type="text" name="ctype" class="form-control" id="ship_address" readonly>
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">General Notes</label>
                  <input type="text" name="ctype" class="form-control" id="notes" readonly>
                </div> 
                
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" name="ctype" class="form-control" id="dob" readonly>
                </div>    -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Start Date</label>
                  <input type="text" name="ctype" class="form-control" id="startdate" readonly>
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Current Status</label>
                  <input type="text" name="ctype" class="form-control" id="status" readonly>
                </div>
                             
        <!-- <div class="form-group">
                  <label for="">Update Status</label>
                  <select name="ustatus" class="form-control">
                  <option></option>
                  <option value="Awaiting">Awaiting Review</option>
                  <option value="Reviewed">Reviewed</option>
                  <option value="Approved">Approved</option>
                  <option value="Send Additional Info">Send Additional Info</option>
                  <option value="Completed">Completed</option>
                  <option value="Pending">Pending</option>
                  <option value="In Treatment">In Treatment</option>
                  <option value="Archive">Archive</option>
                </select>
          </div>
                <div class="box-footer">
                <button type="submit" name="usubmit" class="btn btn-primary btn-md">Submit</button>
              </div> -->
        </form>
            
      </div>

    </div>
  </div>
</div>
<script>
  (function ( $ ) {
 
    $.fn.imagePicker = function( options ) {
        
        // Define plugin options
        var settings = $.extend({
            // Input name attribute
            name: "",
            // Classes for styling the input
            class: "form-control btn btn-default btn-block",
            // Icon which displays in center of input
            icon: "glyphicon glyphicon-plus"
        }, options );
        
        // Create an input inside each matched element
        return this.each(function() {
            $(this).html(create_btn(this, settings));
        });
 
    };
 
    // Private function for creating the input element
    function create_btn(that, settings) {
        // The input icon element
        var picker_btn_icon = $('<i class="'+settings.icon+'"></i>');
        
        // The actual file input which stays hidden
        var picker_btn_input = $('<input type="file" name="'+settings.name+'" />');
        
        console.log(settings.name);
        
        // The actual element displayed
        var picker_btn = $('<div class="'+settings.class+' img-upload-btn"></div>')
            .append(picker_btn_icon)
            .append(picker_btn_input);
            
        // File load listener
        picker_btn_input.change(function() {
            if ($(this).prop('files')[0]) {
                // Use FileReader to get file
                var reader = new FileReader();
                
                // Create a preview once image has loaded
                reader.onload = function(e) {
                    var preview = create_preview(that, e.target.result, settings, picker_btn_input);
                    $(that).html(preview);
                }
                
                // Load image
                reader.readAsDataURL(picker_btn_input.prop('files')[0]);
            }                
        });

        return picker_btn
    };
    
    // Private function for creating a preview element
    function create_preview(that, src, settings, picker_btn_input) {
        
            // The preview image
            var picker_preview_image = $('<img src="'+src+'" class="img-responsive img-rounded" />');
            
            // The remove image button
            var picker_preview_remove = $('<button class="btn btn-link"><small>Remove</small></button>');
            
            console.log(settings.name);
            
            // The preview element
            var picker_preview = $('<div class="text-center"></div>')
                .append(picker_preview_image)
                .append(picker_preview_remove)
                .append(picker_btn_input);

            // Remove image listener
            picker_preview_remove.click(function() {
                var btn = create_btn(that, settings);
                $(that).html(btn);
            });
            
            return picker_preview;
    };
    
}( jQuery ));

$(document).ready(function() {
    $('.img-picker').imagePicker({name: 'images[]'});
});

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
</script>
</body>
</html>
