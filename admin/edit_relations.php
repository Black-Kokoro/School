<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from code_relations where relation_id = {$_GET['relation_id']}";
$result  = mysqli_query($link, $query);
$RelationSet = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $relation_name     = $_POST['relation_name'];
    $query     = "update code_relations set relation_name     = '$relation_name'"
            . "                        where relation_id ={$_GET['relation_id']}";             
    mysqli_query($link, $query);
    header("location:relations.php");

}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Relations</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Relations</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Relations</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Relation Name</label>
                                <input class="form-control" placeholder="Relation Name" name="relation_name" value="<?php echo $RelationSet['relation_name'] ?>"> 
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
