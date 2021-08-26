<?php
    session_start();
    if (!isset( $_SESSION['count'])){
        $_SESSION['count'] = 1;
    } else {
        $_SESSION['count']++;
    }
    
    $id = $_SESSION['count'];
    if(isset($_POST['bookbus'])){
        $passenger = $_POST['passengername'];
        $dest = $_POST['dest'];
        $bus = $_POST['bus'];
        if(!empty($passenger) && !empty($dest) && !empty($bus)){
            $servername = "localhost";
            $root = "root";
            $password = "";
            $dbname = "busdb";

            // Create connection
            $conn = mysqli_connect($servername, $root, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO passenger VALUES ($id, '$passenger', '$dest', 50.00, '$bus');";
            $sql .= "UPDATE totalSales SET totalsales = totalsales + 50 WHERE id = 1;";
            mysqli_multi_query($conn, $sql);
        }

        mysqli_close($conn);
    }
?>