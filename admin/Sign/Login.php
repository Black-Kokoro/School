<?php
session_start();
include_once '../../includes/connection.php'; ?>
<?php
//session_start();
    //echo $_POST['submit'];
    // die;   
if (isset($_POST['submit'])) {
//    die;
    if(!empty($_POST['password'])&& !empty($_POST['user_name'])){
    // fetch data from Web Form 
        
    $query_sigin   = "select * from users where user_name = '{$_POST['user_name']}' and user_password= '{$_POST['password']}' and user_type='A'";
   
    $result_sigin  = mysqli_query($link, $query_sigin);
$userSet = mysqli_fetch_assoc($result_sigin);
    $user_name     = $userSet['user_name'];
    $user_password  = $userSet['user_password'];
    $user_description = $userSet['user_description'];

//    $mobile    = $userSet['mobile'];
    $comp_id    = $userSet['comp_id'];
    $branch_id    = $userSet['branch_id'];
    $user_type    = $userSet['user_type'];
    $_SESSION["comp_id"]=$comp_id;
    $_SESSION["branch_id"]=$branch_id;
    $_SESSION["user_type"]=$user_type;
    
//         echo $_SESSION["comp_id"].$_SESSION["branch_id"].$_SESSION["user_type"];
//    die;
//    echo $_SESSION["email"];
//    die;
    header("location:../index.php");
    }  else {
        $error = "required username and password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-color: #ff7600;">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="" method="post"   >
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User Name" name="user_name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Login</button>
                                                </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
