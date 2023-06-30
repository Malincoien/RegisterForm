<?php

$response = array("success" => false, "errors" => array());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];

  // Validate email
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response["errors"]["email"] = "Invalid email format";
  }

  // Validate password
  if (empty($password)) {
    $response["errors"]["password"] = "Password is required";
  }

  // Validate confirm password
  if (empty($confirmPassword) || $password !== $confirmPassword) {
    $response["errors"]["confirm-password"] = "Passwords do not match";
  }

  // If there are no errors, set success to true
  if (empty($response["errors"])) {
    $response["success"] = true;
  }
}

header("Content-Type: application/json");
echo json_encode($response);

?>