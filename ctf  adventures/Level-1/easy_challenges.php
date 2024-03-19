<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Challenges</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0c0c0c;
            color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
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
    </style>
</head>
<body>
    <h1>Cybersecurity Challenges</h1>
    <h2>Challenge 1: Decrypt a Simple Substitution Cipher</h2>
    <p>Description: You have intercepted a secret message encrypted using a simple substitution cipher. Your task is to decrypt the message and find the hidden flag.</p>
    <a href="substitution_challenge.php">Cipher Challenge</a>

    <h2>Challenge 2: Identify and Exploit a Basic XSS Vulnerability</h2>
    <p>Description: A mock website has a vulnerability that allows attackers to inject malicious scripts. Your goal is to exploit this vulnerability and retrieve the flag.</p>
    <a href="xss_challenge.php">XSS Challenge</a>

    <h2>Challenge 3: Decode a Steganography Image</h2>
    <p>Description: An image file contains a hidden message encoded using steganography. Your task is to extract the hidden message and reveal the flag.</p>
    <a href="steganography_challenge.php">Steganography Challenge</a>

    <h2>Challenge 4: Conduct Open-Source Intelligence (OSINT) Investigation</h2>
    <p>Description: You are provided with limited information about a target individual. Your objective is to gather additional information from publicly available sources and find the flag.</p>
    <a href="osint_challenge.php">OSINT Challenge</a>
    <script>
        // Function to speak the text
        function speakText(text) {
            var alerts = text.split("Alert:");
            alerts = alerts.filter(function (str) { return str.trim() !== ""; });

            function speakNext(index) {
                if (index < alerts.length) {
                    var utterance = new SpeechSynthesisUtterance(alerts[index].trim());
                    utterance.onend = function () {
                        speakNext(index + 1);
                    };
                    window.speechSynthesis.speak(utterance);
                }
            }

            speakNext(0);
        }

        // Call the speakText function with the lockout message when the page loads
        window.onload = function() {
            speakText(`<?php echo htmlspecialchars("
                Welcome to our Cybersecurity capture the flag challenges.
                Here you maximize your ability.
                "); ?>`);
        };
    </script>
</body>
</html>
