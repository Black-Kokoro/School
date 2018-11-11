<?php include_once '../includes/connection.php'; ?>




<?php include_once '../includes/admin_header.php'; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   

  

    <div class="row">
       
        <div class="col-lg-12" id="user">
            <div class="panel panel-default">
                <div class="panel-heading">References Relations</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Relation Name</th>
                            </tr>
                            <?php
                            $query  = "select * from code_nationality";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>{$row['nationality_id']}</td>";
                                echo "<td>{$row['nationality_name']}</td>";
                                echo "<td><a href='edit_relations.php?relation_id={$row['nationality_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_relations.php?relation_id={$row['nationality_id']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            
                        </table>
                        <?php
                                echo "<a href='insert_relations.php'>Add
                                    </a>"                 
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

    
<?php include_once '../includes/admin_footer.php'; ?>