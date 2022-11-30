<?php include "inc/header.php";?>
<?php include "inc/slider.php";?>

<?php include "lib/database.php";
    $db = new Database();
?>	<hr>
	<div class="row">
                <marquee behavior="" direction="left"><h3 style="color:red";>HERE FOR YOU - 24 HOURS SERVICE</h3></marquee>
	</div><hr>
	<div class="row">
		
		<div class="col-md-6 bbox2">
			<h2>Consultant List</h2>
			<p>Here at PDCL we have individual doctor's lists. Click read more below to see services and current timetable for our doctors. </p>
			<a href="consultant.php"><button>Read more </button></a>
		</div>
		<div class="col-md-6 bbox3">
			<h2>Make An Appointment</h2><hr>
			<p>by phone: +88 09617444222</p><hr>
			<p>by mobile: +88 01776664342</p><hr>
			<p>By Form : <a href="appoint.php">Fill the form</a></p>
		</div>
	</div>

	 <div class="row service">
       
        <hr>

        <?php
            $query = "select * from news";
            $result = $db->select($query);
            if($result){
                while($row=$result->fetch_assoc()){?>
                    <div class="col-md-2">
                       <h4> <?php echo $row['date'];?></h4>
                    </div>
                    <div class="col-md-10">
                        <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['description'];?></p>

                    </div>
             <?php   }
            }


        ?>
        </div>

<?php include "inc/footer.php";?>