<?php
function hoosonbish($field){
  if($field != ""){
    return true;
  } return false;
}
if(isset($_POST['email'])) {
  foreach($_POST as $index => $data){
    if(hoosonbish($data) == false){
      die('hooson baina' . $index);
    }
  }
  if($_POST['password'] != $_POST['password_confirmation']){
    header('Location: /register.php?error=confirmation');
  }
  $username = $_POST['username'];
  $username = $_POST['email'];
  
$serverip = "162.251.80.117";
$username = "apprenti_uyanga";
$password = "bondooloi1208/";
$dbname = "apprenti_uyanga";


$conn = new mysqli($serverip, $username, $password, $dbname);


if ($conn->connect_error) {
  header("Location: /register.php?error=database");
}
//SELECT * FROM `users` WHERE `email` = `little_harry0212@yahoo.com` OR `username` = `uyanga`;
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
} else{
  header("location: /registrer.php?");
}
// ?>