<?php
$conn = mysqli_connect("localhost", "root", "", "pharma_project");

if (!$conn) {
    die("Database connection failed");
}
?>


<?php
$conn = mysqli_connect("localhost", "root", "", "pharma_project");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
