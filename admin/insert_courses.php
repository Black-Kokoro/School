<?php include_once '../includes/connection.php'; ?>
<?php
session_start();
if (isset($_POST['submit'])) {
    echo '<pre>';
//    print_r($_FILES);//contain
//    die;
    if($_FILES['course_img']['error']==0){
        $tmp_name=$_FILES['course_img']['tmp_name'];
        $name=$_FILES['course_img']['name'];
        $path="../img/courses/";
        move_uploaded_file($tmp_name, $path.$name);
        
    }
    
    ECHO $name;
    DIE;
    
   
    
   
    // fetch data from Web Form 
    $comp_id=$_SESSION["comp_id"];
    $branch_id=$_SESSION["branch_id"];
    $user_name=$_SESSION["user_name"];
    $course_name = $_POST['course_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $days_code = $_POST['days_code'];
    $hours_no = $_POST['hours_no'];
    $total_hours = $_POST['total_hours'];
    $instructor_id = $_POST['instructor_id'];
    $hour_from = $_POST['hour_from'];
    $hour_to = $_POST['hour_to'];
    $end_date = $_POST['end_date'];
    $course_img = $name;
    
        $query = "INSERT INTO course( comp_id, branch_id, course_name, start_date, end_date,"
                . " days_code, hours_no, total_hours, instructor_id, hour_from, hour_to, create_date, create_user, course_img) "
                . "VALUES ($comp_id,$branch_id,'$course_name','$start_date','$end_date',"
                . "'$days_code','$hours_no','$total_hours','$instructor_id','$hour_from','$hour_to',current_date,'$user_name','$course_img')";
//
//        echo $query;
//        die;
//    $query = "insert into product( cat_id, product_name, product_desc, product_image, product_price)
//              values('$cat_id','$product_name','$product_desc','$product_image','$product_price')";
    mysqli_query($link, $query);



    header("location:courses.php");
}

$query11 = "select * from instructors";
$result11 = mysqli_query($link, $query11);
$InsructersSet11 = array();
while ($row = mysqli_fetch_assoc($result11)) {
    $InsructersSet11[] = $row;
}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Courses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Courses</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Insert Courses</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Instructor Id</label>
                                <select name="instructor_id" class="form-control"/>
                                <?php
                                foreach ($InsructersSet11 as $Instructor){
                                    echo "<option value='{$Instructor['instructor_id']}'>{$Instructor['instructor_name']}</option>";
                                }
                                
                                ?>
                                </select>
                                </div>

                            

                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" name="course_name" placeholder="course_name">
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" name="start_date" placeholder="start_date">
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="end_date">
                            </div>
                            <div class="form-group">
                                <label>Days Code</label>
                                <input type="text" class="form-control" name="days_code" placeholder="days_code">
                            </div>
                            <div class="form-group">
                                <label>Hours No</label>
                                <input type="text" class="form-control" name="hours_no" placeholder="hours_no">
                            </div>
                            <div class="form-group">
                                <label>Total hours</label>
                                <input type="text" class="form-control" name="total_hours" placeholder="total_hours">
                            </div>
                            <div class="form-group">
                                <label>Hours From</label>
                                <input type="time" class="form-control" name="hour_from" placeholder="hour_from">
                            </div>
                            <div class="form-group">
                                <label>Hours To</label>
                                <input type="time" class="form-control" name="hour_to" placeholder="hour_to">
                            </div>
                              <div class="form-group">
                                <label>Course image</label>
                                <input type="file" class="form-control" name="course_img" placeholder="Course image">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->

    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
