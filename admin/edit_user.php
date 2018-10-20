<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from users where user_id = {$_GET['user_id']}";
$result  = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $full_name = $_POST['full_name'];
    $mobile    = $_POST['mobile'];
    $status    = $_POST['user_type'];
    $query     = "update users set email     = '$email',
                                   password  = '$password',
                                   full_name = '$full_name',
                                   mobile    = '$mobile',
                                   user_type = '$status'
                                   where user_id ={$_GET['user_id']}";             
    mysqli_query($link, $query);
    header("location:manage_users.php#user");

}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Users</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Users</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email" name="email" value="<?php echo $userSet['email'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $userSet['password'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" value="<?php echo $userSet['full_name'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $userSet['mobile'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="user_type">
                                    <option <?php echo $userSet['user_type'] == 'admin' ? 'selected': ''; ?>>admin</option>
                                    <option <?php echo $userSet['user_type'] == 'user' ? 'selected': ''; ?>>user</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
