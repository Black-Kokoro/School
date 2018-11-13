<?php include_once '../includes/connection.php'; ?>
<?php
$query   = "select * from product where product_id = {$_GET['product_id']} and cat_id={$_GET['cat_id']}";
$result  = mysqli_query($link, $query);
${ProductSet} = mysqli_fetch_assoc($result);
$query1   = "select * from categories where cat_id = {$_GET['cat_id']}";
$result1  = mysqli_query($link, $query1);
${ProductSet1} = mysqli_fetch_array($result1);
if (isset($_POST['submit'])) {
    // fetch data from Web Form 
    $cat_id = $_POST['cat_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_image = $_POST['product_image'];
    $product_price = $_POST['product_price'];
    $query     = "update product set product_name     = '$product_name'"
            . "                     ,product_desc     = '$product_desc'"
            . "                     ,product_image     = '$product_image'"
            . "                     ,product_price     = '$product_price'"
            . "                        where product_id ={$_GET['product_id']}  and cat_id={$_GET['cat_id']}";             
    mysqli_query($link, $query);
    header("location:Products.php");

}
?>
<?php include_once '../includes/admin_header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Products</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Products</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Products</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Categoury Id</label>
                                <input class="form-control" placeholder="Categoury Id" name="cat_id" disabled="disabled" value="<?php echo $ProductSet['cat_id'] ?>"</output>
                            </div>
                             <div class="form-group">
                                <label>Categoury Desc</label>
                                <input class="form-control" placeholder="Categoury Desc" name="cat_name" disabled="disabled" value="<?php echo $ProductSet1['cat_name'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label>product name</label>
                                <input class="form-control" placeholder="productname" name="product_name" value="<?php echo $ProductSet['product_name'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label>product desc</label>
                                <input class="form-control" placeholder="product desc" name="product_desc" value="<?php echo $ProductSet['product_desc'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label>product image</label>
                                <input class="form-control" placeholder="product image" name="product_image" value="<?php echo $ProductSet['product_image'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label>product price</label>
                                <input class="form-control" placeholder="product price" name="product_price" value="<?php echo $ProductSet['product_price'] ?>"> 
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>                          
                        </form>
                    </div>                    
                </div>
            </div>
        </div><!-- /.panel-->
        
    </div><!-- /.col-->

    <?php include_once '../includes/admin_footer.php'; ?>		
