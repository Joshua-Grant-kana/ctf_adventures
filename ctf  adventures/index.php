<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CTF Adventures</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #000;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            text-align: center;
        }

        #video-container {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        #video-container video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        p {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .level-links {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        .level-link {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            letter-spacing: 1px;
            margin: 0 10px; /* Add margin to space out the links */
        }
        .easy { background-color: #0099ff; }
        .medium { background-color: #ff9900; }
        .hard { background-color: #cc0000; }
        .level-link:hover { background-color: #007acc; }

        /* Animation for links */
        .level-link:hover {
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
    <div id="video-container">
        <video autoplay muted loop>
            <source src="video-bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <h1>Welcome to CTF Adventures</h1>
    <p>Welcome to CTF Adventures - Your Ultimate Destination for Capture the Flag Challenges! Embark on an exhilarating journey into the heart of strategic gameplay with CTF Adventures, where the thrill of capture the flag competitions comes to life like never before. Whether you're a seasoned strategist or a novice adventurer, our platform offers an immersive experience tailored to challenge and delight players of all skill levels. At CTF Adventures, we've crafted an extensive array of captivating challenges set in dynamic virtual environments, each designed to push your tactical prowess to its limits. Engage in adrenaline-pumping missions, test your mettle against fellow gamers, and unleash your strategic ingenuity to outwit opponents and claim victory. Our intuitive interface provides seamless navigation, allowing you to dive into the action with ease. Explore a variety of game modes, from classic capture the flag scenarios to innovative twists on the genre, ensuring endless excitement and variety with every play session. Join a vibrant community of thrill-seekers from around the globe, forge alliances, and compete for glory on the leaderboards. With regular updates and new challenges added frequently, there's always something fresh and exciting waiting for you at CTF Adventures. Are you ready to rise to the challenge and prove yourself as the ultimate flag-capturing champion? Begin your adventure today with CTF Adventures and experience the thrill of capture the flag like never before!</p>

    <div class="level-links">
        <a href="level-1/easy_challenges.php" class="level-link easy">Easy</a>
        <a href="level-2/medium_challenges.php" class="level-link medium">Medium</a>
        <a href="level-3/hard_challenges.php" class="level-link hard">Hard</a>
    </div>

    <script>
        // Function to speak the text
        function speakText(text) {
            var utterance = new SpeechSynthesisUtterance(text);
            window.speechSynthesis.speak(utterance);
        }

        // Call the speakText when the page loads
        window.onload = function() {
            speakText(`<?php echo htmlspecialchars("
                        Welcome to CTF Adventures - Your Ultimate Destination for Capture the Flag Challenges! Embark on an exhilarating journey into the heart of strategic gameplay with CTF Adventures, where the thrill of capture the flag competitions comes to life like never before. Whether you're a seasoned strategist or a novice adventurer, our platform offers an immersive experience tailored to challenge and delight players of all skill levels. At CTF Adventures, we've crafted an extensive array of captivating challenges set in dynamic virtual environments, each designed to push your tactical prowess to its limits. Engage in adrenaline-pumping missions, test your mettle against fellow Cyber Guardians, and unleash your strategic ingenuity to outwit opponents and claim victory. Our intuitive interface provides seamless navigation, allowing you to dive into the action with ease. Explore a variety of game modes, from basic hacking techniques to data recovery, ensuring endless excitement and variety with every play session. Join a vibrant community of thrill-seekers from around the globe, forge alliances, and compete for glory on the leaderboards. With regular updates and new challenges added frequently, there's always something fresh and exciting waiting for you at CTF Adventures. Are you ready to rise to the challenge and prove yourself as the ultimate flag-capturing champion? Begin your adventure today with CTF Adventures and experience the thrill of capture the flag like never before!
                "); ?>`);
        };
    </script>
</body>
</html>
