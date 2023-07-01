<?php
$conn = new mysqli("localhost", "root", "", "soodavar");
mysqli_query ($conn, "SET CHARACTER SET UTF8");
echo mysqli_error ($conn);
?>