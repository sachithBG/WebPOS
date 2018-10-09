<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 2/4/18
 * Time: 8:26 PM
 */

$id = $_POST['sid'];
$dat =$_POST['datepicker'];
$name = $_POST['sname'];
$tel = $_POST['stel'];
$address= $_POST['saddr'];

$connection = mysqli_connect("127.0.0.1", "root", "1234", "pos_php", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}

$result = $connection->query("INSERT INTO supplier VALUES ('$id','$name','$tel','$address','$dat')");

$result = (bool) (($connection -> affected_rows) > 0);

if ($result){

    echo "<script>alert('successfully saved')</script>>";
    $message =  "Customer has been successfully saved";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Add%20Customer.html')</script>";
}else{

    $message = "Customer has not been saved";
    echo "<script> alert('Not saved')</script>>";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Add%20Customer.html')</script>";

}

?>