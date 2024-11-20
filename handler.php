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
    if (isset($_POST['iterations']) && is_numeric($_POST['iterations'])) {
        $iterations = (int)$_POST['iterations'];

        if ($iterations < 1) {
            echo "<p>Error: The number of iterations must be a positive integer.</p>";
            exit;
        }

        // Calculate Pi using the Leibniz formula
        $pi_value = 0;
        for ($i = 0; $i < $iterations; $i++) {
            $pi_value += ((-1) ** $i) / (2 * $i + 1);
        }
        $pi_value *= 4;

        // Output the calculated value of Pi
        echo "<h1>Calculated Value of Pi:</h1>";
        echo "<p>" . number_format($pi_value, 6) . "</p>"; // Print result with 6 decimal places
    } else {
        echo "<p>Error: Invalid input. Please enter a valid number of iterations.</p>";
    }
    ?>
</body>
</html>
