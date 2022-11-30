<?php include "inc/header.php";?>
<?php include "lib/database.php";
    $db = new Database();
?>
    <div class="row about">
        <hr><h2>NEWS</h2>
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