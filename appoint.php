<?php include 'lib/session.php';
        Session::init();
?>
<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>

<?php
    $db=new Database();
    $fm=new Format();
?>

<?php include "inc/header.php"; ?>
	
	<div class="row">
		<hr>
		<h2>Online Appointment Form</h2><hr>
        <?php

       
if(isset($_POST['submit'])){
    $department =mysqli_real_escape_string($db->link, $_POST['department']);
    $name = mysqli_real_escape_string($db->link,$_POST['name']);
    $phone_number =mysqli_real_escape_string($db->link, $_POST['phone_number']);
    $gender = mysqli_real_escape_string($db->link,$_POST['gender']);
    $appoint_date =mysqli_real_escape_string($db->link, $_POST['appoint_date']);
    $doctor = mysqli_real_escape_string($db->link,$_POST['doctor']);
    $email = mysqli_real_escape_string($db->link,$_POST['email']);
    $address = mysqli_real_escape_string($db->link,$_POST['address']);
    $age = mysqli_real_escape_string($db->link,$_POST['age']);
    $sl = mysqli_real_escape_string($db->link,$_POST['sl']);
    
    if($department == '' || $name == '' || $phone_number == '' || $gender == '' || $appoint_date == '' || $doctor == '' || $email == '' || $address == '' || $age == ''){
        echo "<span style='color:red;'>field must not be empty!</span>";
    }else{
        $query = "INSERT INTO patient values('', '$name', '$phone_number', '$gender', '$email', '$address', '$age', '$department', '$doctor', '$appoint_date')";
        $result = $db->insert1($query);
                     /*serial */
        

        $siquery = "INSERT INTO slcreate  values('','$doctor','$appoint_date',$sl)";
        $insertserial = $db->insert1($siquery);
        

        if($insertserial){
            echo "data inserted successfully";
        }else{
            echo "something is wrong!";
        }
    }
    
    
}
?>
        <form action="appoint.php" method="post">
		
            <div class="col-md-6">

                    <label>Department</label>
                            

                    <div class="block">
                        
                        <select  id="mydepartment" name="department" style="width:100%; padding:8px;" required="1">
                            <option value="" selected="selected">Select Department</option>
                            <?php
                            $q = "SELECT * FROM department";
                            $res = $db->select($q);
                            if(mysqli_num_rows($res) > 0){
                                while($rows = mysqli_fetch_array($res)){
                                    ?>
                            
                            <option value="<?php echo $rows['deptId']; ?>"><?php echo $rows['deptName']; ?></option>
                            <?php
                                    
                                }
                            }
                                
                            ?>
                            
                         </select>
                        </div>
                        
                        <label>Doctor</label>

                        <div class="block">
                            <select id="appointment_form_docs" name="doctor" style="">
                                <option class="doc-dept-0" value="">Select Doctor</option>
                                
                            </select>

                        </div>
                            
                           

                    <label>Full Name</label>

                    <div class="block">

                        <input class="text_input form-control" name="name" type="text" value="" />

                    </div>

                    <!-- <label>Patients Date of Birth</label>

                    <div class="block">

                        <input class="text_input" type="text" name="date_of_birth" value="" />

                    </div> -->

                    <label>Phone Number</label>

                    <div class="block">

                        <input class="text_input form-control" name="phone_number" type="text" value="" />

                    </div>

                    <label>Gender</label>

                    <div class="block">

                        <select id="appointment_form_genders" name="gender" style="width:100%; padding:11px;">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                       <!--  <input id="appointment_form_gender" class="text_input" name="gender" type="hidden" value="" /> -->

                    </div>

                    <label>Expected Appointment Date</label>

                    <div class="block">

                        <input id="date_of_appointment_dis" class="text_input form-control" name="appoint_date" type="date" value="" />

                    </div>
            </div>
            <div class="col-md-6">

                

                <label>E-mail</label>

                <div class="block">

                    <input class="text_input form-control" type="text" name="email" value="" />

                </div>

                <label>Address</label>

                <div class="block">

                    <input class="text_input form-control" type="text" name="address" value="" />

                </div>

                <label>Age</label>

                <div class="block">

                    <input class="text_input form-control" type="text" name="age" value="" />

                </div>

                <label>Your Serial:</label>

                <div class="block">

                    <input id="serial_date" class="text_input form-control" type="text" name="sl" value="" readonly="1" />

                </div>


            </div>
            
            <div class="row">
                <div class="col-md-3 col-md-offset-5">
                 <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Submit"  style="margin-top: 14px;">

                </div>
            </div>
            
            </form>
		
		
		
	</div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
<script>

   $(document).ready(function(){

           $('#mydepartment').on('change', function() {
              var value = $(this).val();
              //alert(value);
            
            
            var deptid = 'id='+value;

            //alert(deptid);
             $.ajax({
                 
                 type: "POST",
                 url: "getdoctor.php",
                 data: deptid,
                 cache:false,
                 success: function(data){
                    $('#appointment_form_docs').html(data);
                    //console.log(data);
                 }

              })

 });  

      $('#date_of_appointment_dis').on('change', function() {
              
              var date = new Date($('#date_of_appointment_dis').val());
              var d = date.getDate();
              var m = date.getMonth() + 1; //Month from 0 to 11
              var y = date.getFullYear();
              var rdate =  '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);

              var doctorid = $('#appointment_form_docs').val();

               var dateresultn = 'doctorid='+doctorid+'&tdate='+rdate;

            //alert(deptid);
             $.ajax({
                 
                 type: "POST",
                 url: "getserialnumber.php",
                 data: dateresultn,
                 cache:false,
                 success: function(data){
                    $('#serial_date').val(data);
                    console.log(data);
                 }

              })

             // alert(doctorid);

 });
            

})



   </script>
	<?php include "inc/footer.php"?>
    
