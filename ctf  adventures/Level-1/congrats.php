<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
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
        .congrats {
            margin-top: 100px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }
        .checkmark {
            color: #00ff00;
            font-size: 5rem;
            margin-bottom: 20px;
            animation: checkAnimation 2.5s ease-in-out infinite alternate;
        }
        .congratulations {
            font-size: 2rem;
            animation: bounce 3s ease infinite;
        }

        .next-button {
            background-color: green;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }
        .next-button:hover {
            background-color: orangered;
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

        /* Keyframes */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes checkAnimation {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        /* Animation class when button clicked */
        .animation-paused .checkmark {
            animation-play-state: paused;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkmark">&#10004;</div>
        <h1>Congratulations!</h1>
        <p>You have successfully completed a challenge.</p>
        <?php
        error_reporting(E_ALL); 
        ini_set('display_errors', 1);
        // Get the completed challenge from the URL parameter
        $completed_challenge = $_GET['challenge'] ?? '';

        // Define an array of challenges with their corresponding next challenge links
        $next_challenges = [
            'substitution' => 'substitution_challenge.php',
            'xss' => 'xss_challenge.php',
            'steganography' => 'steganography_challenge.php',
            'osint' => 'osint_challenge.php', 
            'complete' => 'complete.php' 
        ];

        // Check if the completed challenge exists in the array
        if (array_key_exists($completed_challenge, $next_challenges)) {
            // Display the link to the next challenge based on the completed challenge
            echo "<a href='{$next_challenges[$completed_challenge]}'>Next Challenge</a>";
        } else {
            // Display a default link if the completed challenge is not found
            echo "<a href='index.php'>Back to Home</a>";
        }
        ?>
    </div>
</body>
</html>
