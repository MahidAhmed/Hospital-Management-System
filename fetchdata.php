<?php
    include 'lib/database.php';
$db= new database();
    
    $department = $_POST['department'];
    if(isset($_POST['department'])){
        
        $q = "SELECT * FROM department where deptName =".$_POST['department']."";
          $res = $db->select($q);
            if(mysqli_num_rows($res) > 0){
             while($rows = mysqli_fetch_array($res)){
               
         
                 $qu ="select * from doctor where deptId =".$rows['deptId']."";
                    $query =$db->select($qu);
                    $rowcount = $query->num_rows;
                    if($rowcount>0){
                        while($row=$query->fetch_assoc()){
                            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        }
                    }else{
                        echo '<option value="">Doctor Not Available</option>';
                    }


                      } }
        
       
    }
?>