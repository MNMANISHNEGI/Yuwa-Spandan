// Get the modal
const modal = document.getElementById('assessmentModal');

// Open the modal when the page loads
window.onload = function() {
    modal.style.display = 'block';
};

// Start questionnaire function
function startQuestionnaire() {
    // Redirect user to the questionnaire page
    window.location.href = 'questions.php';
}

// Chatbot functionality
const questions = [
    "1. What's your name?",
    "2. What's your email address?",
    "3. I found it hard to wind down",
"4. I was aware of dryness of my mouth",
"5. I couldn't seem to experience any positive feeling at all",
"6. I experienced breathing difficulty (e.g. excessively rapid breathing, breathlessness in the absence of physical exertion)",
"7. I found it difficult to work up the initiative to do things",
"8. I tended to over-react to situations",
"9. I experienced trembling (e.g. in the hands)",
"10. I felt that I was using a lot of nervous energy",
"11. I was worried about situations in which I might panic and make a fool of myself",
"12. I felt that I had nothing to look forward to",
"13. I found myself getting agitated",
"14. I found it difficult to relax",
"15. I felt down-hearted and blue",
"16. I was intolerant of anything that kept me from getting on with what I was doing",
"17. I felt I was close to panic",
"18. I was unable to become enthusiastic about anything",
"19. I felt I wasn't worth much as a person",
"20. I felt that I was rather touchy",
"21. I was aware of the action of my heart in the absence of physical exertion (e.g. sense of heart rate increase, heart missing a beat)",
"22. I felt scared without any good reason",
"23. I felt that life was meaningless"

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

    sendResponsesToServer() {
        // Prepare the data to send to the server
        const data = {
            name: this.userResponses[0],
            email: this.userResponses[1],
            answers: this.userResponses.slice(2) // Exclude name and email
        };
        console.log(data);
        // Send the data to the server using AJAX
        fetch('chatbot_submission.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
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
            this.userResponses.push({ ['question' + (this.currentQuestionIndex + 1)]: userInput });
        }
    
        // Clear the user input field
        this.userInputElement.value = '';
    
        this.currentQuestionIndex++;
        if (this.currentQuestionIndex < questions.length) {
            // Display the next question immediately
            this.displayQuestion(this.currentQuestionIndex);
        } else {
            // No more questions, display a final message
            this.displayFinalMessage();
        }
    },
    
    sendSelectedResponse(index) {
        const selectedResponse = responses[index];

        const userResponseElement = document.createElement('div');
        userResponseElement.classList.add('user-response');
        userResponseElement.innerText = selectedResponse;
        this.chatbotBody.appendChild(userResponseElement);

        // Store the user's response
        this.userResponses.push(index);

        this.currentQuestionIndex++;
        if (this.currentQuestionIndex < questions.length) {
            // Wait for a short delay before displaying the next question
            setTimeout(() => {
                this.displayQuestion(this.currentQuestionIndex);
            }, 2000);
        } else {
            // No more questions, display a final message
            this.displayFinalMessage();
        }
    },

    displayFinalMessage() {
        const finalMessage = document.createElement('div');
        finalMessage.classList.add('bot-message');
        finalMessage.innerText = 'That\'s all the questions for now. Thank you for your responses!';
        this.chatbotBody.appendChild(finalMessage);
    
        if (this.userResponses.length === 23) {
            // If all 23 responses are collected, show the "See Recommendations" button
            const seeRecommendationsButton = document.createElement('button');
            seeRecommendationsButton.innerText = 'See Recommendations';
            seeRecommendationsButton.onclick = () => {
                // Redirect to the results page
                window.location.href = 'results.php';
            };
            this.chatbotBody.appendChild(seeRecommendationsButton);
        }
    
        // Send all responses to the server
        this.sendResponsesToServer();
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

// Open the modal when the page loads
window.onload = function() {
    const modal = document.getElementById('assessmentModal');
    modal.style.display = 'block';
};

// Start questionnaire function
function startQuestionnaire() {
    // Redirect user to the questionnaire page
    window.location.href = 'questions.php';
};
