<?php

$servername = "MYSQL5011.Smarterasp.net";
$username = "9fcc63_innspub";
$password = "valid1000!";
$dbname = "db_9fcc63_innspub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$gettarget = $_GET["target"];
$ftarget = (explode('_',$gettarget));
$post_id = $ftarget[1];
$target = $ftarget[0];


$sql = "SELECT meta_value FROM in_postmeta WHERE post_id=$post_id AND meta_key='dc'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $count = $row["meta_value"] + 1;


        $sql = "UPDATE in_postmeta SET meta_value=$count WHERE post_id=$post_id AND meta_key='dc'";

        if (mysqli_query($conn, $sql)) {
            header("Location: " . $target); // redirect to target URL
        }


    }
} else {
    header("Location: " . $target); // redirect to target URL
}
$conn->close();

?>