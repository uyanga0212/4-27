<?php
// function hoosonbish($field){
//   if($field != ""){
//     return true;
//   } return false;
// }
// if(isset($_POST['email'])) {
//   foreach($_POST as $index => $data){
//     if(hoosonbish($data) == false){
//       die('hooson baina' . $index);
//     }
//   }
//   if($_POST['password'] != $_POST['password_confirmation']){
//     header('Location: /register.php?error=confirmation');
//   }
//   $username = $_POST['username'];
//   $username = $_POST['email'];
  
$serverip = "162.251.80.117";
$username = "apprenti_uyanga";
$password = "bondooloi1208/";
$dbname = "apprenti_uyanga";


$conn = new mysqli($serverip, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `users`";
for($x = 0; $x<100; $x++){
  $sql = "INSERT INTO `users` (`email`, `password`, `name`, `username`) VALUES ('i+$x@apprentice.mn', 'new2021+$x', 'uyanga+$x', 'uyanga0212+$x')";
  echo $x;
  $hariu = $conn->query($sql);
  if($conn->query($sql) === TRUE){
    echo "+" . "<br>";
  }else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



// if($hariu->num_rows > 0){
//   while($egnee = $hariu->fetch_assoc()){
//     print_r($egnee);
//     echo "<hr>";
//   }
// }else {
//   echo "0 result";
// }
$conn->close();
//for($x=0; $x<100; $x++){
//   $sql = "INSERT INTO users (email, password, name, username) VALUES ('i+1$x@apprentice.mn', 'adkja;lkdfj+1$x', 'Apprentice MGL')";
//   echo $x;
// }
// // $hariu = $conn->query($sql);
// if($conn->query($sql) === TRUE){
//   echo "+" . "<br>";
// } else {
//   echo "Error: " . $sql . "<hr>" . $conn->error;
//   die();
// }
// }

// $sql = "SELECT * FROM `users` WHERE `email` = `$email`";
// $result = $conn->query($sql);
// if($result->num_rows > 0){
//   header("location: /registrer.php?error=email");
// }

// $sql = "SELECT * FROM `users` WHERE `username` = `$username`";
// $result = $conn->query($sql);
// if($result->num_rows > 0){
//   header("location: /registrer.php?error=username");
// }

// $_POST[''];

// $insertSql = "INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUE ('')";
// $result = $conn->query($insertSql);
// if($result ===TRUE){
//   //login user
//   header('Location: /profile.php');
// } else {
//   header("location: /registrer.php?error=unknown");
// }
// $conn->close();
// } else{
//   header("location: /registrer.php?");
// }







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

// ?>