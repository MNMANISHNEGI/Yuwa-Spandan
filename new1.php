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

    <script>
        // Chatbot functionality
        const questions = [
            "1. What's your name?",
            "2. What's your email address?",
            "3. I found it hard to wind down.",
            "4. I was aware of dryness of my mouth.",
            "5. I couldn’t seem to experience any positive feeling at all."
        ];

        const responses = ["Did not apply to me at all", "Applied to me to some degree, or some of the time", "Applied to me to a considerable degree or a good part of time", "Applied to me very much or most of the time"];

        const chatbot = {
            currentQuestionIndex: 0,
            userResponses: [],
            chatbotWindow: document.querySelector('.chatbot-window'),
            chatbotBody: document.getElementById('chatbot-body'),
            userInputElement: document.getElementById('user-input'),
            sendButton: document.getElementById('send-btn'),

            openChatbot() {
                this.chatbotWindow.style.display = 'block';
                this.displayFirstQuestion();
            },

            closeChatbot() {
                this.chatbotWindow.style.display = 'none';
                alert("Thank you for your submission!");
            },

            displayFirstQuestion() {
                this.displayQuestion(this.currentQuestionIndex);
            },

            displayQuestion(index) {
                this.chatbotBody.innerHTML = ''; // Clear the previous messages

                const questionElement = document.createElement('div');
                questionElement.classList.add('bot-message');
                questionElement.innerText = questions[index];
                this.chatbotBody.appendChild(questionElement);

                // Speak the question
                this.speakQuestion(questions[index]);

                if (index === 0 || index === 1) {
                    // Display the input field for name and email
                    this.displayInputField();
                    this.sendButton.style.display = 'block'; // Show send button for name and email questions
                } else {
                    // Display the response options for other questions
                    this.displayResponseOptions(index);
                    this.sendButton.style.display = 'none'; // Hide send button for other questions
                }
            },

            displayInputField() {
                this.userInputElement.type = 'text';
                this.userInputElement.classList.add('user-input');
                this.userInputElement.placeholder = 'Enter your response';
                this.userInputElement.required = true;
                this.chatbotBody.appendChild(this.userInputElement);

                this.userInputElement.addEventListener('keyup', (event) => {
                    if (event.key === 'Enter') {
                        this.sendResponse();
                    }
                });
            },
            
            sendResponse() {
                const userInput = this.userInputElement.value.trim();
            
                if (userInput === '') {
                    alert('Please enter your response.');
                    return;
                }
            
                const userResponseElement = document.createElement('div');
                userResponseElement.classList.add('user-response');
                userResponseElement.innerText = userInput;
                this.chatbotBody.appendChild(userResponseElement);
            
                // Store the user's response
                if (this.currentQuestionIndex === 0) {
                    this.userResponses.push({ name: userInput });
                } else if (this.currentQuestionIndex === 1) {
                    this.userResponses.push({ email: userInput });
                } else {
                    // Store other responses with proper keys
                    this.userResponses.push({ ['response' + (this.currentQuestionIndex - 1)]: userInput });
                }
            
                // Clear the user input field
                this.userInputElement.value = '';
            
                this.currentQuestionIndex++;
                if (this.currentQuestionIndex < questions.length) {
                    // Display the next question immediately
                    this.displayQuestion(this.currentQuestionIndex);
                } else {
                    // No more questions, close the chatbot
                    this.closeChatbot();
                }
            },
            
            displayResponseOptions(index) {
                for (let i = 0; i < responses.length; i++) {
                    const responseButton = document.createElement('button');
                    responseButton.classList.add('response-button');
                    responseButton.innerText = responses[i];
                    responseButton.onclick = () => {
                        this.sendSelectedResponse(i);
                    };
                    this.chatbotBody.appendChild(responseButton);
                }
            },
            sendResponsesToServer() {
    // Prepare the data to send to the server
    const data = {
        name: this.userResponses.find(response => response.hasOwnProperty('name')).name,
        email: this.userResponses.find(response => response.hasOwnProperty('email')).email,
        responses: this.userResponses.filter(response => !response.hasOwnProperty('name') && !response.hasOwnProperty('email')).map(response => Object.values(response)[0])
    };

    // Send the data to the server using AJAX
    fetch('submit_responses1.php', {  // This line
        method: 'POST',                // This line
        headers: {                     // This line
            'Content-Type': 'application/json' // This line
        },                             // This line
        body: JSON.stringify(data)     // This line
    })
    .then(response => response.json())
    .then(data => {
        console.log('Response saved:', data);
        // Redirect or perform any other action after saving the responses
    })
    .catch(error => {
        console.error('Error saving response:', error);
        // Handle errors if necessary
    });
},


            sendSelectedResponse(index) {
                const selectedResponse = responses[index];

                const userResponseElement = document.createElement('div');
                userResponseElement.classList.add('user-response');
                userResponseElement.innerText = selectedResponse;
                this.chatbotBody.appendChild(userResponseElement);

                // Store the user's response
                this.userResponses.push(selectedResponse);

                this.currentQuestionIndex++;
                if (this.currentQuestionIndex < questions.length) {
                    // Wait for a short delay before displaying the next question
                    setTimeout(() => {
                        this.displayQuestion(this.currentQuestionIndex);
                    }, 2000);
                } else {
                    // No more questions, close the chatbot
                    this.closeChatbot();
                }
            },

            speakQuestion(question) {
                const utterance = new SpeechSynthesisUtterance(question);
                const voices = window.speechSynthesis.getVoices();
                const indianFemaleVoices = voices.filter(voice => voice.lang.includes('en-IN') && voice.gender === 'female');
                const selectedVoice = indianFemaleVoices.length > 0 ? indianFemaleVoices[0] : null;
                if (selectedVoice) {
                    utterance.voice = selectedVoice;
                    speechSynthesis.speak(utterance);
                } else {
                    console.log("No Indian female voices available. Using default voice.");
                    speechSynthesis.speak(utterance);
                }
            }
        };

        // Open the chatbot modal when the page loads
        window.onload = function() {
            chatbot.openChatbot();
        };
    </script>
</body>
</html>
