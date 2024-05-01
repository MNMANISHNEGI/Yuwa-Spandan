<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes of Hope</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylechatbot.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="studentlogin.php">Student</a></li>
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
            </ul>
        </nav>
    </header>

    <!-- Modal for Assessment Options -->
    <div id="assessmentModal" class="modal">
    <div class="modal-content">
        <h2 class="modal-heading">Choose Your Assessment Method</h2>
        <div class="option">
            <h3 class="option-heading">Fill Questionnaire</h3>
            <p class="option-description">Fill out the questionnaire in a single form.</p>
            <button onclick="startQuestionnaire()">Start Questionnaire</button>
        </div>
        <div class="option">
            <h3 class="option-heading">Let Chatbot Speak</h3>
            <p class="option-description">Have the Yuwa Mitr speak the questions to you.</p>
            <button onclick="chatbot.openChatbot()">Start Yuwa Mitr </button>
        </div>
    </div>
</div>
    <!-- Chatbot Window -->
    <div class="chatbot-window" style="display: none; width: 400px; height: 500px;">
        <div class="chatbot-header">
            <h3>Yuwa Mitr </h3>
            <button class="close-btn" onclick="chatbot.closeChatbot()">X</button>
        </div>
        <div class="chatbot-body" id="chatbot-body"></div>
        <div class="chatbot-footer" style="text-align: center;">
            <input type="text" id="user-input" class="user-input" placeholder="Enter your response">
            <button id="send-btn" onclick="chatbot.sendResponse()">Send</button>
        </div>
    </div>

    <footer class="studentfooter">
        <p>Contact</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
