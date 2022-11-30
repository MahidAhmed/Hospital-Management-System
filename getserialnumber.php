<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>

<?php
    $db=new Database();
    $fm=new Format();


$doctorid = $_POST['doctorid'];
$tdate = $_POST['tdate'];
//echo $tdate;


$ns=1;
$ssquer = "SELECT * from slcreate where doctor_id='$doctorid' AND sdate='$tdate' order by id DESC limit 1";
$ssqresult = $db->select($ssquer);

if($ssqresult){

	while($rows = mysqli_fetch_array($ssqresult)){
	    $currentdoctorserial = $rows['sl'];
	}
	$currentdoctorserial +=1;
    echo $currentdoctorserial;

}else{
  
  $ns = 1;
  echo $ns;

}



?>