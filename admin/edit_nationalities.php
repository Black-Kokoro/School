<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from code_nationality where nationality_id = {$_GET['nationality_id']}";
$result  = mysqli_query($link, $query);
$NationalitySet = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $nationality_name    = $_POST['nationality_name'];
    $query     = "update code_nationality set nationality_name     = '$nationality_name'"
            . "                        where nationality_id ={$_GET['nationality_id']}";             
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
            <li class="active">Edit Nationalities</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Nationalities</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nationalities</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Major Nationalities</label>
                                <input class="form-control" placeholder="Nationality Name" name="nationality_name" value="<?php echo $NationalitySet['nationality_name'] ?>"> 
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
