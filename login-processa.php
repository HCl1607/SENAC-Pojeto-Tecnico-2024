<?php
include("connection.php");

//var_dump($_REQUEST);
if (isset($_POST['user'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC );



    $count = mysqli_num_rows($result);
    if ($count ==1) {
        header("Location: welcome.php");
    } else {
        `<script>
        window.location.href = "index.php";
        alert("login failed. Please try again")
        </script>`;
    }
    
}

?>