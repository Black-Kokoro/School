<?php include_once '../includes/connection.php'; ?>
<?php
session_start();
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
//    print_r($_SESSION);
//    die;
    $user_name=$_SESSION["user_name"];
    $instructor_name = $_POST['instructor_name'];
    $birth_date = $_POST['birth_date'];
    $age = $_POST['age'];
//    $query = "select  * form code_nationality where nationality_id={$_POST['nationality_code']} ";
//    echo $query;
//    die;
//    mysqli_query($link, $query);
    $nationality_code = $_POST['nationality_code'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile_no'];
    $major_code = $_POST['major_code'];
    $cv = $_POST['cv'];
    $img = $_POST['img'];
    $email = $_POST['email'];
    $query = "insert into instructors(instructor_name,create_date,create_user)
              values('$nationality_name',current_date,'$user_name')";
//    echo $query;
//    die;
    mysqli_query($link, $query);
    header("location:nationalities.php");
    
}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Nationalities</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nationalities</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Insert Nationality</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Instructor Name</label>
                                <input type="text" class="form-control" name="instructor_name" placeholder="Instructor Name">
                            </div>
                            <div class="form-group">
                                <label>Birth Date</label>
                                <input type="text" class="form-control" name="birth_date" placeholder="Birth Date">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <label>Nationality Code</label>
                                <input type="text" class="form-control" name="nationality_code" placeholder="Nationality Code">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <label>Major Code</label>
                                <input type="text" class="form-control" name="major_code" placeholder="Major Code">
                            </div>
                            <div class="form-group">
                                <label>CV</label>
                                <input type="text" class="form-control" name="cv" placeholder="CV">
                            </div>
                            <div class="form-group">
                                <label>Img</label>
                                <input type="text" class="form-control" name="img" placeholder="Img">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
