<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>

<?php
    $db=new Database();
    $fm=new Format();


$id = $_POST['id'];

echo $id;

$q = "SELECT * FROM doctor where  deptId = '$id'";
$res = $db->select($q);
if($res){
    while($rows = mysqli_fetch_array($res)){
        ?>
<option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
<?php } } 
?>