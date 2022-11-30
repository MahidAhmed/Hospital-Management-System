<?php include 'inc/header.php';?>
<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
    $db=new Database();
    $fm=new Format();
    $q="select * from department";
    $query = $db->select($q);
    $rowCount = $query->num_rows;
?>


	<div class="row ">
		<hr>
        <h2>Consultant List</h2>
        <hr>
        <div class="col-md-12">
     <select name="dept" id="mydepartment">
            <option value="">Select Department </option>
            <?php
            if($rowCount>0){
                
                while($row=$query->fetch_assoc()){
                   echo '<option value="'.$row['deptId'].'">'.$row['deptName'].'</option>';        
              }
            
              }
            ?>
        </select>
     </div>
    </div>
     <br><br>
     <div id="result" class="row" >
         
       <?php
            $q = "SELECT * FROM doctor";
            $res = $db->select($q);
            if($res){
                while($rows = mysqli_fetch_array($res)){
                    ?>

             <div class="col-md-3">
                 <a href="consultinfo.php?id=<?php echo $rows['id'] ?>">
                     <?php echo $rows['name']?></a>
             </div>

            <?php } } else{
                echo "No doctor Found";
            }
            ?>
        
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
                 url: "getdoctorlist.php",
                 data: deptid,
                 cache:false,
                 success: function(data){
                    $('#result').html(data);
                    //console.log(data);
                 }

              })

 });
            

})
</script>
       
	<?php include 'inc/footer.php';?>