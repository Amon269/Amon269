<?php

// Define variables
$name = "Ariho Amon";
$dob = "2001-12-05";
$homeAddress = "Rukungiri";

// Calculate age
$today = new DateTime();
$dobDate = new DateTime($dob);
$age = $today->diff($dobDate);

// Welcome message
echo "Welcome home, $name, $homeAddress, Today, you are " . $age->y . " years old.";

?>
