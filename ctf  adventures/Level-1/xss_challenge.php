<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0c0c0c;
            color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-top: 50px;
            letter-spacing: 2px;
        }
        h2 {
            font-size: 1.5rem;
            margin-top: 30px;
            letter-spacing: 1px;
        }
        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        a {
            display: inline-block;
            margin-bottom: 30px;
            padding: 10px 20px;
            background-color: #0099ff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            letter-spacing: 1px;
        }
        .download { background-color: #0099ff; }
        .download:hover {
            background-color: orangered;
        }
        a:hover {
            background-color: #007acc;
        }
        /* Animation for links */
        a:hover {
            animation-name: linkHover;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        @keyframes linkHover {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-5px);
            }
        }
        /* Adjust form size and styling */
        form {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            margin: 0 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #0099ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #007acc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>XSS Challenge</h1>
        <p>This page contains a simulated XSS vulnerability. Your goal is to exploit it and retrieve the flag.</p>
        <form action="" method="post">
            <input type="text" name="comment" placeholder="Leave a comment...">
            <input type="submit" name="submit" value="Post Comment">
        </form>
        <?php
        // Flag
        $flag = "FLAG{exploited_xss_vulnerability}";

        // Check if form is submitted
        if (isset($_POST['submit'])) {
            $comment = $_POST['comment']; // Remove htmlspecialchars to make the form vulnerable
            echo "<p>Your comment: $comment</p>";
            // Vulnerable code (unsafe)
            echo "<p>Thank you for your comment!</p>";
            // Attempt to execute XSS
            echo "<p>Output: $comment</p>";
            // JavaScript to show pop-up and redirect
            echo "<script>";
            echo "alert('XSS vulnerability exploited!');";
            echo "window.location.href = 'congrats.php?challenge=steganography';";
            echo "</script>";
        }
        ?>
    </div>
</body>
</html>
