
<?php
$contact = new mysqli("localhost","Imranul Khair","","Contact");

if ($contact -> connect_errno) {
  echo "Failed to connect to MySQL: " . $contact -> connect_error;
  exit();
}

$contact -> query("INSERT INTO Contact_table (name, email, message) VALUES (?, ?, ?)");

echo "Thank you";

$contact -> close();
?>