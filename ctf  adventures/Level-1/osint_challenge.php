<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSINT Challenge</title>
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
    <h1>OSINT Challenge</h1>
    <p>This page provides limited information about a target individual. Your goal is to gather additional information from publicly available sources and find the flag.</p>
    <p>Target: John Doe</p>
    <p>Location: New York City</p>
    <p>Occupation: Software Engineer</p>
    <?php
    // Flag
    $flag = "FLAG{discovered_information}";

    // Function to conduct OSINT investigation
    function conduct_osint_investigation() {
        // Simulated function to gather additional information
        return "Additional information: John Doe's social media profiles, GitHub account, and public records";
    }

    // Gather additional information
    $additional_info = conduct_osint_investigation();
    echo "<p>$additional_info</p>";

    // Check if additional information contains the flag
    if (strpos($additional_info, $flag) !== false) {
        echo "<p>Congratulations! You have found the flag: $flag</p>";
        echo "<script>
                    setTimeout(function(){
                        window.location.href = 'congrats.php?challenge=complete';
                    }, 3000);
                  </script>";
    } else {
        echo "<p>Sorry, the flag was not found in the additional information.</p>";
    }
    ?>
</body>
</html>
