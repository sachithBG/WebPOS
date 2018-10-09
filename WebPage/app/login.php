<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 2/3/18
 * Time: 4:30 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        main{
            margin-top: 10px;
        }
    </style>
</head>
<body>
<main class="container">
    <div class="alert alert-<?= $result ? "success" : "danger" ?>">
        <?= $message ?>
    </div>
    <p>
        Return to <a href="../starter.html">Home</a>
    </p>
</main>
</body>
</html>
