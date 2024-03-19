<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substitution Cipher Challenge</title>
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
    <center><h1>Substitution Cipher Challenge</h1></center>
    <h2>Steps to Decrypt the Substitution Cipher Challenge:</h2>
    <p> Download the Encrypted Message File: Click the link below to download the encrypted message file.</p>
    <p>Download the encrpyted file: <a href="download.php" download class="download"> Download Challenge</a></p>
    <p>Open the Encrypted Message File: Once downloaded, open the file using a text editor or any other appropriate software.</p>
    <p>Decrypt the Message using any available decryption tool available either offline or online to find the encrypted text which unlocks the flag.</p>
    <p></p>
    <p>Submit the Encrypted text collected from the message to complete the ctf challenge.</p>

    <form id="decryptForm" action="" method="post">
        <input type="text" name="encrypted_message" placeholder="Encrypted Message">
        <input type="submit" name="submit" value="Decrypt">
    </form>

    <?php
    // Function to decrypt substitution cipher
    function decrypt_substitution_cipher($encrypted_message, $substitution_mapping) {
        // Decrypt the message
        $decrypted_message = '';
        foreach (str_split($encrypted_message) as $char) {
            if (array_key_exists($char, $substitution_mapping)) {
                $decrypted_message .= $substitution_mapping[$char];
            } else {
                $decrypted_message .= $char;
            }
        }
        return $decrypted_message;
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        $encrypted_message = strtolower($_POST['encrypted_message']); // Convert to lowercase for consistency
        $substitution_mapping = array(
          'a'=>'q', 'b'=>'y', 'c'=>'n', 'd'=>'h', 'e'=>'v', 'f'=>'p', 'g'=>'c', 'h'=>'e', 'i'=>'w', 'j'=>'g',
          'k'=>'b', 'l'=>'z','m'=>'s', 'n'=>'l', 'o'=>'x', 'p'=>'m', 'q'=>'k', 'r'=>'o', 's'=>'d', 't'=>'l',
          'u'=>'f', 'v'=>'r', 'w'=>'t', 'x'=>'u', 'y'=>'j', 'z'=>'a', '_'=>' ',
        );
        $decrypted_message = decrypt_substitution_cipher($encrypted_message, $substitution_mapping);
        echo "<p>Decrypted Message: $decrypted_message</p>";
        
        // Check if the decrypted message is the flag
        if ($decrypted_message === "you got me") {
            echo "<p>Congratulations! You found the flag: FLAG{you_got_me}</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'congrats.php?challenge=xss';
                    }, 3000);
                  </script>";
        } else {
            echo "<p>Sorry, that's not the correct flag. Keep trying!</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'failed.php';
                    }, 3000);
                  </script>";
        }
    }
    ?>
</body>
</html>
