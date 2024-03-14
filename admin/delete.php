<?php
include "common.php";
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $query = "DELETE FROM `products`  WHERE id = '$id'";
    $stmt = $con->prepare($query);
    if ($stmt) {
        if ($stmt->execute()) {

            echo "<script>alert('Product Deleted Successfully')</script>";
            // echo " <script>document.location='men.php'</script>";
            if ($_GET['category'] == 'men') {
                echo "<script>document.location.href='men.php'</script>";
            } elseif ($_GET['category'] == 'women') {
                echo "<script>document.location.href='women.php'</script>";
            } 
            elseif ($_GET['category'] == 'kids') {
                echo "<script>document.location.href='kids.php'</script>";
            }
                elseif ($_GET['category'] == 'accessories') {
                    echo "<script>document.location.href='accessories.php'</script>";
        } 

        } else {
            echo "Product is cant be deleted because some one is ordered the product ";

        }    
    }
}
?>