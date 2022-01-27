<?php

    $con = new mysqli("localhost", "root", "", "ajaxcrud");

    extract($_POST);

    if(isset($_POST['submit']))
    {
        $q = "insert into ajaxinsert (username, password) values ('$username', '$password')";

        $query = mysqli_query($con, $q);

        header('location:iinserts.php');

    }


?>