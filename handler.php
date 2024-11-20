<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $myVariable = "";
  if (isset($_POST['myVariable'])) {
    $myVariable = $_POST['myVariable'];
  }
  echo "<h1>My Program</h1>\n";
  echo "<p>My Variable is = " . $myVariable . "</p>\n";
  ?>

</body>

</html>
<?php
// Ensure the user input is valid
if (isset($_POST['iterations']) && is_numeric($_POST['iterations'])) {
  $iterations = (int) $_POST['iterations'];

  // Make sure the input is positive
  if ($iterations < 1) {
    echo "Error: The number of iterations must be a positive integer.";
    exit;
  }

  // Calculate pi using the Leibniz formula
  $pi_value = 0;
  for ($i = 0; $i < $iterations; $i++) {
    $pi_value += ((-1) ** $i) / (2 * $i + 1);
  }
  $pi_value *= 4;

  // Output the calculated value of pi
  echo number_format($pi_value, 6); // Print result with 6 decimal places
} else {
  echo "Error: Invalid input. Please enter a valid number of iterations.";
}
?>
