<?php
// define variables and set to empty values
$nameErr = $passwordErr "";
$name = $password "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "enter your name please";
    }
  }
  
  if (empty($_POST["password"])) {
    $emailErr = "password is required";
  } else {
    $email = test_input($_POST["password"]);
    if (!filter_var($password, FILTER_NULL_ON_FAILURE)) {
      $passwordErr = "it seems you know your php. do not try and break the program again.";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
?>
