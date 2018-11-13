<?php include_once '../includes/connection.php'; ?>




<?php include_once '../includes/admin_header.php'; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   

  

    <div class="row">
       
        <div class="col-lg-12" id="user">
            <div class="panel panel-default">
                <div class="panel-heading">Instructors</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Instructors Name</th>
                                <th>Instructors Birth Date</th>
                                <th>Instructors Age</th>
                                <th>Instructors Nationality</th>
                                <th>Instructors Address</th>
                                <th>Instructors Mobile No.</th>
                                <th>Instructors Major</th>
                                <th>Instructors CV</th>
                                <th>Instructors Image</th>
                                <th>Instructors Email</th>
                            </tr>
                            <?php
                            $query  = "select a.* from instructors a";

                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                $query_nat  = "select * from code_nationality where nationality_id= {$row['nationality_code']}";
                            $result_nat = mysqli_query($link, $query_nat);
                            $row_nat    = mysqli_fetch_assoc($result_nat);
                            
                            $query_maj  = "select x.major_name from code_majors x where x.major_id= {$row['major_code']}";
                            $result_maj = mysqli_query($link, $query_maj);
                            $row_maj    = mysqli_fetch_assoc($result_maj);
                                echo "<tr>";
                                echo "<td>{$row['instructor_name']}</td>";
                                echo "<td>{$row['birth_date']}</td>";
                                echo "<td>{$row['age']}</td>";
                                echo "<td>{$row_nat['nationality_name']}</td>";
                                echo "<td>{$row['address']}</td>";
                                echo "<td>{$row['mobile_no']}</td>";
                                echo "<td>{$row_maj['major_name']}</td>";
                                echo "<td>{$row['cv']}</td>";
                                echo "<td>{$row['img']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td><a href='edit_instructors.php?instructor_id={$row['instructor_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_instructors.php?instructor_id={$row['instructor_id']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            
                        </table>
                        <?php
                                echo "<a href='insert_instructors.php'>Add
                                    </a>"                 
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

    
<?php include_once '../includes/admin_footer.php'; ?>