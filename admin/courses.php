<?php include_once '../includes/connection.php'; ?>




<?php include_once '../includes/admin_header.php'; ?>   

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   

  

    <div class="row">
       
        <div class="col-lg-12" id="user">
            <div class="panel panel-default">
                <div class="panel-heading">Courses</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Days Code</th>
                                <th>No Of Hours</th>
                                <th>Total Hours</th>
                                <th>Instructor </th>
                                <th>Hours From</th>
                                <th>Hours To</th>
                                <th>Course Image</th>
                                
                                
                            </tr>
                            <?php
                            $query  = "select * from course";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){

                             $query2  = "select * from instructors where instructor_id={$row['instructor_id']}";
                             $result2 = mysqli_query($link, $query2);
                            $row2    = mysqli_fetch_assoc($result2);
                                    echo "<tr>";
                                    echo "<td>{$row['course_id']}</td>";
                                    echo "<td>{$row['course_name']}</td>";
                                    echo "<td>{$row['start_date']}</td>";
                                    echo "<td>{$row['end_date']}</td>";
                                    echo "<td>{$row['days_code']}</td>";
                                    echo "<td>{$row['hours_no']}</td>";
                                    echo "<td>{$row['total_hours']}</td>";
                                    echo "<td>{$row2['instructor_name']}</td>";
                                    echo "<td>{$row['hour_from']}</td>";
                                    echo "<td>{$row['hour_to']}</td>";
                                    echo "<td><img src='../img/courses/{$row['course_img']}' width='200' height='200'></td>";
                                    echo "<td><a href='delete_courses.php?course_id={$row['course_id']}'>delete</a></td>";
                                    echo "<td><a href='edit_courses.php?course_id={$row['course_id']}&instructor_id={$row['instructor_id']}'>Edit</a></td>";
                                    echo "</tr>";
                            }
                            
                            ?>
                            
                        </table>
                        <?php
                                echo "<a href='insert_courses.php'>Add
                                    </a>"                 
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div>
    

<?php include_once '../includes/admin_footer.php'; ?>