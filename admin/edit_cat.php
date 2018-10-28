<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from categories where cat_id = {$_GET['cat_id']}";
$result  = mysqli_query($link, $query);
$CatSet = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $cat_name     = $_POST['cat_name'];
    $query     = "update categories set cat_name     = '$cat_name'"
            . "                        where cat_id ={$_GET['cat_id']}";             
    mysqli_query($link, $query);
    header("location:categories.php");

}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Categouries</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Categouries</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Categouries</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Categoury Name</label>
                                <input class="form-control" placeholder="Categoury Name" name="cat_name" value="<?php echo $CatSet['cat_name'] ?>"> 
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
