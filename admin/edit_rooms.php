<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from code_rooms where room_id = {$_GET['room_id']}";
$result  = mysqli_query($link, $query);
$RoomSet = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $nationality_name    = $_POST['room_name'];
    $query     = "update code_rooms set room_name     = '$room_name'"
            . "                        where room_id ={$_GET['room_id']}";             
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
            <li class="active">Edit Rooms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Rooms</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Rooms</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Room</label>
                                <input class="form-control" placeholder="Room Name" name="room_name" value="<?php echo $RoomSet['room_name'] ?>"> 
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
