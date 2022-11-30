<?php include "inc/header.php";?>
<?php include "lib/database.php";
	$db = new Database();
?>
	<div class="row about">
		<hr>

		<?php 
			if($_GET['id']){
				//$i=id;
				$q ="select * from service where Sid=$_GET[id]";
				$res = $db->select($q);
				if($res){
					while($row=$res->fetch_assoc()){?>
						<h2><?php echo $row['Stitle'];?></h2><hr><br>
						<p><?php echo $row['Sdescription'];?></p><br>
						
					<?php
				}

				}else{

				}
			}

		?>
		</div>
<?php include "inc/footer.php";?>