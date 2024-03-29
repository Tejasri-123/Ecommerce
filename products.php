<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FashionFuse | Where Style Ignites!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';

    ?>
    <!--header ends -->
    <div class="container" style="margin-top:85px">
        <!--jumbutron start-->
       
        
        <div class="pd">
            <h1>Welcome to FashionFuse!</h1>
            <p>Where you can find all varieties of clothes</p>
            <div class="row text-center" >
            <div class="col-md-3 col-6 py-3">
            <div class="mx-auto p-2 text-white"  id="banner_content"style="border-radius: 0.5rem;">
                    <h2>Women</h2>       
        </div>
        </div>
        <div class="col-md-3 col-6 py-3">
        <div class="mx-auto p-2 text-white"  id="banner_content"style="border-radius: 0.5rem;">
                    <h2>Men</h2>       
        </div>

        </div>

        <div class="col-md-3 col-6 py-3">
        <div class="mx-auto p-2 text-white"  id="banner_content"style="border-radius: 0.5rem;">
                    <h2>Kids</h2>       
        </div>

        </div>

        <div class="col-md-3 col-6 py-3">
        <div class="mx-auto p-2 text-white"  id="banner_content"style="border-radius: 0.5rem;">
                    <h2>Accessories</h2>       
        </div>

       </div>


</div>
        </div>
        <div>
        
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="products">

            <?php
            include 'includes/common.php';
            $sql = "SELECT * FROM `products` ORDER BY `category`";

            $result = mysqli_query($con, $sql);

            while ($res = mysqli_fetch_assoc($result)) {

                $name = $res['name'];
                $price = $res['price'];
                $picture = $res['picture'];
                echo '<div class="col-md-3 col-6 py-3">
            <div class="card">
                <img src="' . $picture . '" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>' . $name . '</h6>
                    <h6>Price: Rs ' . $price . '</h6>';

                if (!isset($_SESSION['jwt_token'])) {
                    echo '<p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>';
                } else {
                    if (check_if_added_to_cart($res['id'])) {
                        echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                    } else {
                        echo '<p><a href="cart-add.php?id=' . $res['id'] . '" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>';
                    }
                }

                echo '</div>
        </div>
    </div>';
            }
            ?>
        </div>
    </div>
        </div>
    <!--menu list ends-->
   <!--footer -->
   <?php include 'includes/footer.php' ?>
    <!--footer end-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>


</html>