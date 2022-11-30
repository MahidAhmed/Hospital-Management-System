<?php
include 'lib/database.php';
$db = new Database();
$output ='';
$sql = "select * from doctor where deptId='".$_POST['deptId']."' order by name";
$result = $db->select($sql);
$output = '<option value="">Doctor</option>';
while($row=mysqli_fetch_array(result)){
    $output .='<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
echo $output;
?>