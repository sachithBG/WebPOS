<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 2/4/18
 * Time: 9:21 PM
 */
$iid = $_POST['iid'];
$cid = $_POST['cid'];
$oid = $_POST['oid'];
$odat =$_POST['datepicker'];
//$odat = 'a';
$name = $_POST['cname'];
$qunty = $_POST['quty'];
//$total = $_POST['total'];
$price = $_POST['uprice'];
$quhand= $_POST['quhand'];
$ides= $_POST['ides'];

$connection = mysqli_connect("127.0.0.1", "root", "1234", "pos_php", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}
//echo "<script>alert('error')</script>>";

$result1 = $connection->query("INSERT INTO corder VALUES ('$oid','$iid','$qunty','$odat')");
//$result2 = $connection->query("INSERT INTO order_Details VALUES ('$oid','$iid','$ides','$quhand','$price','12332','$dat')");
//$result3 = $connection->query("INSERT INTO item VALUES ('$id','$name','$tel','$address','$dat')");

$result1 = (bool) (($connection -> affected_rows) > 0);
//$result2 = (bool) (($connection -> affected_rows) > 0);

if ($result1){

    echo "<script>alert('successfully saved')</script>>";
    $message =  "Customer has been successfully saved";
    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
}else{
    $message = "Customer has not been saved";
    echo "<script> alert('Not saved')</script>>";
//   echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
}
//if ($result2){
//
//    echo "<script>alert('successfully saved')</script>>";
//    $message =  "Customer has been successfully saved";
//    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
//}else{
//
//    $message = "Customer has not been saved";
//    echo "<script> alert('Not saved')</script>>";
//    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
//
//}
//if ($result3){
//
//    echo "<script>alert('successfully saved')</script>>";
//    $message =  "Customer has been successfully saved";
//    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
//}else{
//
//    $message = "Customer has not been saved";
//    echo "<script> alert('Not saved')</script>>";
//    echo "<script>window.location.replace('http://localhost/Document/POS/Pos-page/starter.html')</script>";
//
//}
?>