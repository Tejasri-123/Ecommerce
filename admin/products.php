<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Fuse | Where Style Ignites!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
</head>

<body style="margin-bottom:200px">
    <!--Header-->
    <?php
    include 'header_menu.php';
    // include 'check-if-added.php';
    ?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                    <h1>Hello <?php echo $_SESSION['name']; ?>!</h1>
                    <p>Welcome To Fashion Fuse </p>
                    <!-- <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a> -->

                </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        View Products Data
    </div>
    <!--menu highlights start-->
    <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="women.php"> <img src="../images/WOMEN.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
                    <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                        Women
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3 ">
                <a href="men.php">
                    <img src="../images/MEN.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Men
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="kids.php">
                    <img src="../images/KIDS.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Kids
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="accessories.php">
                    <img src="../images/Accesories.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Accesories
                    </div>
            </div>
            </a>
        </div>
    </div>

    <div id="userDetailsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>User Details</h2>
            <div id="userDetails"></div>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'footer.php' ?>
    <!--footer end-->




</body>
<script>
    function showUserDetails() {
        // Make an AJAX request to fetch user details
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "details.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Display user details in the modal
                document.getElementById("userDetails").innerHTML = xhr.responseText;
                document.getElementById("userDetailsModal").style.display = "block";
            }
        };
        xhr.send();
    }

    // Close the modal when the user clicks the close button
    document.getElementsByClassName("close")[0].onclick = function() {
        document.getElementById("userDetailsModal").style.display = "none";
    };
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {

        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

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