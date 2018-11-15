<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from course where course_id = {$_GET['course_id']} and instructor_id={$_GET['instructor_id']}";

$result  = mysqli_query($link, $query);

$ProductSet = mysqli_fetch_assoc($result);

//$query1   = "select * from instructors where instructor_id = {$_GET['instructor_id']}";
//$result1  = mysqli_query($link, $query1);
//$ProductSet1 = mysqli_fetch_array($result1);


$query11 = "select * from instructors where instructor_id = {$_GET['instructor_id']}";
$result11 = mysqli_query($link, $query11);
$InsructersSet11 = array();
while ($row = mysqli_fetch_assoc($result11)) {
    $InsructersSet11[] = $row;
}


if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    
    

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
    
//    echo $course_img;
//die;
    
      $query = "UPDATE course SET course_name='$course_name'"
             . ",start_date='$start_date',end_date='$end_date',days_code='$days_code',hours_no='$hours_no'"
             . ",total_hours='$total_hours',instructor_id='$instructor_id',hour_from='$hour_from',hour_to='$hour_to'"
             . "course_img=v'$course_img' "
             . "WHERE course_id={$_GET['course_id']} and instructor_id={$_GET['instructor_id']}";
             
             ECHO $query;
             DIE;
    
//    $cat_id = $_POST['cat_id'];
//    $product_name = $_POST['product_name'];
//    $product_desc = $_POST['product_desc'];
//    $product_image = $_POST['product_image'];
//    $product_price = $_POST['product_price'];
//    $query     = "update product set product_name     = '$product_name'"
//            . "                     ,product_desc     = '$product_desc'"
//            . "                     ,product_image     = '$product_image'"
//            . "                     ,product_price     = '$product_price'"
//            . "                        where product_id ={$_GET['product_id']}  and cat_id={$_GET['cat_id']}";             
    mysqli_query($link, $query);
    header("location:courses.php");

}
?>
<?php include_once '../includes/admin_header.php'; ?>

<!--<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">-->
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Courses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Courses</h1>
        </div>
    </div><!--/.row-->


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
                                <input type="text" class="form-control" name="course_name"  value="<?php echo $ProductSet['course_name'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" name="start_date"  value="<?php echo $ProductSet['start_date'] ?>">
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" class="form-control" name="end_date"  value="<?php echo $ProductSet['end_date'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Days Code</label>
                                <input type="text" class="form-control" name="days_code"  value="<?php echo $ProductSet['days_code'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Hours No</label>
                                <input type="text" class="form-control" name="hours_no"  value="<?php echo $ProductSet['hours_no'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Total hours</label>
                                <input type="text" class="form-control" name="total_hours" value="<?php echo $ProductSet['total_hours'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Hours From</label>
                                <input type="time" class="form-control" name="hour_from"  value="<?php echo $ProductSet['hour_from'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Hours To</label>
                                <input type="time" class="form-control" name="hour_to"  value="<?php echo $ProductSet['hour_to'] ?>">
                            </div>
                              <div class="form-group">
                                <label>Course image</label>
                                <input type="file" class="form-control" name="course_img"  value="<?php echo $ProductSet['course_img'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->

    </div><!-- /.col-->
    <?php include_once '../includes/admin_footer.php'; ?>		
