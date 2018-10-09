<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 2/4/18
 * Time: 7:20 PM
 */


$id = $_POST['iid'];
$dat =$_POST['datepicker'];
$name = $_POST['iname'];
$type = $_POST['itype'];
$quty= $_POST['iquty'];

$connection = mysqli_connect("127.0.0.1", "root", "1234", "pos_php", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}

$result = $connection->query("INSERT INTO item VALUES ('$id','$name','$type','$quty','$dat')");

$result = (bool) (($connection -> affected_rows) > 0);

if ($result){

    echo "<script>alert('successfully saved')</script>>";
    $message =  "Customer has been successfully saved";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Item.html')</script>";
}else{

    $message = "Customer has not been saved";
    echo "<script> alert('Not saved')</script>>";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/Item.html')</script>";

}

?>