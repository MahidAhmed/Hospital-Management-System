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

<?php include 'inc/header.php';?>
	
		
	
<!--  main -->
    
    
   
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                <label>Name: </label><br>
                <label>Department: </label><br>
                <label>Speciality: </label><br>
                <label>Degree: </label><br>
                <label>Organization: </label><br>
                <label>Workday: </label><br>
                <label>Visiting Time: </label>
                
            </div>
            
            <?php 
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $q = "SELECT * FROM doctor WHERE id='$id'";
                $result = $db->select($q);
                if(mysqli_num_rows($result) > 0){
                    while($rows = mysqli_fetch_array($result)){
                        ?>
            <div class="col-md-6">
                <label><?php echo $rows['name']; ?></label><br>
                <label><?php
                        
                        $i = $rows['deptId'];
                        
                        $query = "SELECT * FROM department WHERE deptId = '$i'";
                        $res = $db->select($query);
                        while($val = mysqli_fetch_array($res)){
                            echo $val['deptName'];
                        }
                        
                    
                    
                    ?> </label><br>
                <label><?php echo $rows['speciality']; ?></label><br>
                <label><?php echo $rows['degree']; ?> </label><br>
                <label><?php echo $rows['organization']; ?></label><br>
                <label><?php echo $rows['workday']; ?></label><br>
                <label><?php echo $rows['visiting_time']; ?> </label><br><br>
                <a class="btn btn-primary btn-lg center" href="appoint.php">Get Appointment</a>
            </div>
            
            
            
            <?php 
                    }
                }
            }
            ?>
        </div>
    </div>
   
<!--    main end-->

	<div class="row footer">
                <marquee behavior="" direction="right"><p>&copy;green hospital</p></marquee>
	</div>
	
<script type="text/javascript" src="js/scrolltop.js"></script>
<script>
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
</script>

</body>
</html>