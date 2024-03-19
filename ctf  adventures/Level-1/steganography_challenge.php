<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steganography Challenge</title>
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
    <h1>Steganography Challenge</h1>
    <p>This page contains an image with a hidden message. Your task is to decode the hidden message and retrieve the flag.</p>
    <img src="hidden_message.jpg" alt="Hidden Message Image">
    <?php
    // Flag
    $flag = "FLAG{hidden_message}";

    // Function to decode steganography
    function decode_steganography() {
        // Simulated function to decode steganography
        return "Decoded message";
    }

    // Decode the hidden message
    $decoded_message = decode_steganography();
    echo "<p>Decoded Message: $decoded_message</p>";

    // Check if decoded message matches the flag
    if ($decoded_message === $flag) {
        echo "<p>Congratulations! You have found the flag: $flag</p>";
        echo "<script>
                    setTimeout(function(){
                        window.location.href = 'congrats.php?challenge=osint';
                    }, 3000);
                  </script>";
    } else {
        echo "<p>Sorry, the decoded message does not match the flag.</p>";
    }
    ?>
</body>
</html>
