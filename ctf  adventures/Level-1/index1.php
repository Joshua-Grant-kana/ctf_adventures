<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Challenges</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px;
        }
        .challenge {
            flex-basis: calc(33.33% - 20px);
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
        }
        .challenge img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
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
            margin-bottom: 10px;
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
    <h1>Cybersecurity CTF Challenges</h1>
    <div class="container">
        <div class="challenge">
            <h2>Substitution Cipher</h2>
            <img src="img/sub.png">
            <p>Description: You have intercepted a secret message encrypted using a simple substitution cipher. Your task is to decrypt the message and find the hidden flag.</p>
            <a href="substitution.php">Cipher Challenge</a>
        </div>
        <div class="challenge">
            <h2>XSS Vulnerability</h2>
            <img src="img/xss.jpg">
            <p>Description: A mock website has a vulnerability that allows attackers to inject malicious scripts. Your goal is to exploit this vulnerability and retrieve the flag.</p>
            <a href="xss_challenge.php">XSS Challenge</a>
        </div>
        <div class="challenge">
            <h2>Steganography</h2>
            <img src="img/osint.webp">
            <p>Description: An image file contains a hidden message encoded using steganography. Your task is to extract the hidden message and reveal the flag.</p>
            <a href="steganography_challenge.php">Steganography Challenge</a>
        </div>
        <div class="challenge">
            <h2>OSINT Investigation</h2>
            <img src="img/OSINT.jpg">
            <p>Description: You are provided with limited information about a target individual. Your objective is to gather additional information from publicly available sources and find the flag.</p>
            <a href="osint_challenge.php">OSINT Challenge</a>
        </div>
    </div>

    <!-- Link Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
