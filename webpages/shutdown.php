<?php
// Trigger the shutdown command
system('sudo shutdown now');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shutdown Pi</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ff4500;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            background-color: #ff4500;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.2em;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #ff6347;
        }
    </style>
</head>
<body>
    <h1>Shutting Down...</h1>
    <p>The Pi is shutting down. This may take a few moments.</p>
</body>
</html>
