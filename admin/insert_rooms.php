<?php include_once '../includes/connection.php'; ?>
<?php
session_start();
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
//    print_r($_SESSION);
//    die;
    $user_name=$_SESSION["user_name"];
    $nationality_name = $_POST['room_name'];
    $query = "insert into code_rooms(room_name,create_date,create_user)
              values('$room_name',current_date,'$user_name')";
//    echo $query;
//    die;
    mysqli_query($link, $query);
    header("location:rooms.php");
    
}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Rooms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Rooms</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Insert Room</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Room Name</label>
                                <input type="text" class="form-control" name="room_name" placeholder="Room Name">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
