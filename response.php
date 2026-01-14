<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Response</title>
</head>
<body>
  <h1>Form Response</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $name = htmlspecialchars($_POST["name"]);
      $message = htmlspecialchars($_POST["message"]);

      echo "<p><strong>Name:</strong> $name</p>";
      echo "<p><strong>Message:</strong> $message</p>";
  } else {
      echo "<p>No data received.</p>";
  }
  ?>
</body>
</html>
