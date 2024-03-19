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
        .fail {
            margin-top: 100px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }
        .try-again-icon {
            color: #ff0000;
            font-size: 5rem;
            margin-bottom: 20px;
            animation: checkAppear 0.5s ease-in-out forwards, checkSpin 2.5s ease-in-out infinite alternate;
        }
        .congratulations {
            font-size: 2rem;
            animation: bounce 3s ease infinite;
        }
        .next-button {
            background-color: red;
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
            background-color: blue;
        }

        .home-button{
            background-color: blue;
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
        .home-button:hover {
            background-color: orangered;
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

        @keyframes failAppear {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
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
        .animation-paused .try-again-icon {
            animation-play-state: paused;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="fail">
            <div class="try-again-icon">&#8635;</div>
            <h1 class="congratulations">Quest Failed!</h1>
            <p>You've failed to complete the quest please try again.</p>
            <a href="substitution.php" class="next-button">Retry</a>
            <a href="index.php" class="home-button">Go back Home</a>
        </div>
    </div>

    <script>
        // Function to pause try again icon animation
        function toggleAnimation() {
            var failElement = document.querySelector('.fail');
            congratsElement.classList.toggle('animation-paused');
        }
    </script>
</body>
</html>
