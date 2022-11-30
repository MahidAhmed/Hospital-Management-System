<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>

<?php
    $db=new Database();
    $fm=new Format();


$id = $_POST['id'];

//echo $id;

if(empty($id)){
$q = "SELECT * FROM doctor";
}else{
$q = "SELECT * FROM doctor where  deptId = '$id'";	
}

$res = $db->select($q);
if($res){
    while($rows = mysqli_fetch_array($res)){
        ?>

 <div class="col-md-3"><a href="consultinfo.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['name']?> </a></div>
       

<?php } } else{
	echo "No doctor Found";
}
?>