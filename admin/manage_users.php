<?php include_once '../includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $mobile = $_POST['mobile'];
    $status = $_POST['user_type'];
    $query = "insert into users(email,password,full_name,mobile,user_type)
              values('$email','$password','$full_name','$mobile','$status')";
    mysqli_query($link, $query);
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
            <h1 class="page-header">Manage Users</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email" name="email"> 
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="user_type">
                                    <option>admin</option>
                                    <option>user</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12" id="user">
            <div class="panel panel-default">
                <div class="panel-heading">List Users</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Mobile</th>
                                <th>Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $query  = "select * from users";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>{$row['user_id']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>{$row['full_name']}</td>";
                                echo "<td>{$row['mobile']}</td>";
                                echo "<td>{$row['user_type']}</td>";
                                echo "<td><a href='edit_user.php?user_id={$row['user_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_user.php?user_id={$row['user_id']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
