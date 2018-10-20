<?php include_once '../includes/connection.php'; ?>




<?php include_once '../includes/admin_header.php'; ?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   

  

    <div class="row">
       
        <div class="col-lg-12" id="user">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>Product No</th>
                                <th>Cat No</th>
                                <th>Product Name</th>
                                <th>Product Desc</th>
                                <th>Product Image</th>
                                <th>Product price</th>
                            </tr>
                            <?php
                            $query  = "select * from product";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>{$row['product_id']}</td>";
                                echo "<td>{$row['cat_id']}</td>";
                                echo "<td>{$row['product_name']}</td>";
                                echo "<td>{$row['product_name']}</td>";
                                echo "<td>{$row['product_name']}</td>";
                                echo "<td><a href='edit_cat.php?cat_id={$row['cat_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_cat.php?cat_id={$row['cat_id']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            
                        </table>
                        <?php
                                echo "<a href='InsertCat.php'>Add
                                    </a>"                 
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

    
<?php include_once '../includes/admin_footer.php'; ?>