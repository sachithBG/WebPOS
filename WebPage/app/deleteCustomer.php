<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 2/5/18
 * Time: 8:16 AM
 */

if(!isset($_POST['cid'])){
    echo "Enter valid information";
}

$id = $_POST['cid'];

$connection = mysqli_connect("127.0.0.1", "root", "1234", "pos_php", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}

$result = $connection->query("DELETE FROM customer WHERE cid='$id'");

$result = (bool) (($connection -> affected_rows) > 0);

if ($result){
    echo "<script> alert('Customer has been successfully deleted')</script>>";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Add%20Customer.html')</script>";

    $message = "Customer has been successfully deleted";

}else{
    echo "<script> alert('Customer has not been deleted')</script>>";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Add%20Customer.html')</script>";

    $message =  "Customer has not been deleted";
}

?>