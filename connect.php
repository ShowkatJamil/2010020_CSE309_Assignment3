<?php
$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "assignment3";

$conn = mysqli_connect($hostname, $username, $password, $database); //connecting database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = mysqli_real_escape_string($conn, $_POST["fName"]);
    $lName = mysqli_real_escape_string($conn, $_POST["lName"]);
    $pNumber = mysqli_real_escape_string($conn, $_POST["pNumber"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);


    //passing values to database
    $sql = "INSERT INTO contactform (fName, lName, pNumber, email, message) VALUES ('$fName', '$lName', '$pNumber', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
