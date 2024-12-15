<?php
// Get the filename from the URL parameter
if (isset($_GET['file'])) {
    $file = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['file']); // Sanitize input
    $filePath = "/home/david/Desktop/pihut_3d_tree_red_leds/{$file}.py";

    // Check if the file exists before executing
    //if (file_exists($filePath)) {
        system('sudo pkill -9 python');
        shell_exec("sudo python3 $filePath >/dev/null 2>&1 &");
    //} else {
    //    echo "<p style='color: red;'>Invalid file specified or file does not exist.</p>";
    //}
} else {
    echo "<p style='color: red;'>No file specified.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Tree Lights</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ff6347;
            font-size: 2em;
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
    <script>
        // Redirect to index.html after 3 seconds
        setTimeout(() => {
            window.location.href = "index.html";
        }, 3000);
    </script>
</head>
<body>
    <h1>Lights Updated!</h1>
    <p>Returning to the main menu in 3 seconds...</p>
    <a href="index.html">Go to Index Now</a>
</body>
</html>
