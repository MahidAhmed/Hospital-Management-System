<?php include 'inc/header.php'; ?>
<?php include "lib/database.php";
	$db = new Database();
?>
	<div class="row service">
		<hr>
 		<?php
 			if($_GET['id']){
            $query = "select * from instrment where id=$_GET[id]";
            $result = $db->select($query);
            if($result){
                while($row=$result->fetch_assoc()){?>
                    <div>
                    	<h2><?php echo $row['title'];?></h2><hr><br>
                        <h4><?php echo $row['name'];?></h4><br>
                        <p><?php echo $row['description'];?></p><br>
						<img src="image/<?php echo $row['image'];?>"/>

                    </div>
             <?php   }
            }

        }
        ?>
		
		</div>
	<div class="row footer">
                <marquee behavior="" direction="right"><p>&copy;green hospital</p></marquee>
	</div>


</body>
</html>