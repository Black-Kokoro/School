<?php include_once '../includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $major_name = $_POST['major_name'];
    $query = "insert into code_majors(major_name)
              values('$major_name')";
    mysqli_query($link, $query);
    header("location:majors.php");
    
}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Majors</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Majors</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Insert Majors</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Major Name</label>
                                <input type="text" class="form-control" name="major_name" placeholder="Major Name">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
