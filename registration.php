<?php
$serverip = "162.251.80.117";
$username = "apprenti_uyanga";
$password = "bondooloi1208/";
$dbname = "apprenti_uyanga";


$conn = new mysqli($serverip, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
die('connected holbogdson');

// $sql = "SELECT * FROM `users`";
// $hariu = $conn->query($sql);

// if ($hariu->num_rows > 0) {
//   // output data of each row
//   while($egnee = $hariu->fetch_assoc()) {
//     print_r($egnee);
//     echo "<hr>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();

// if(isset($_POST['email'])) {
//     print_r($_POST);
// }
// ?>