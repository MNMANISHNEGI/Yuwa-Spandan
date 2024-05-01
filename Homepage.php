<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes of Hope</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylechatbot.css"> <!-- Update this path as needed -->
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li> <!-- Updated link to homepage -->
                <li><a href="fillchat.php">Give Assessment</a></li> <!-- Updated link to questions page -->
                <li><a href="studentlogin.php">Student</a></li>
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
              
            </ul>
        </nav>
    </header>
    <!-- <section class="hero">
        <h1>WELCOME</h1>
        <h4>to</h4>
        <h2>Yuwa Spandan</h2>
        <p>"Our mission is to illuminate the path to mental wellness for young adults. Echoes of Hope is more than just a platform; it's a movement towards breaking the stigma surrounding mental health, encouraging open conversations, and fostering an environment where seeking help is seen as a step of courage and strength."</p>
    </section> -->
    <!-- <div class="chatbot-container">
    <img src="hello.gif" alt="Hello GIF" class="hello-gif">
        <div class="chatbot-btn" onclick="openChatbot()">
            <i class="fas fa-comments" ></i> Chat with Yuwa Mitr
        </div>
        <div class="chatbot-window" style="display: none;">
            <div class="chatbot-header">
                <h3>Yuwa Mitr is here for you </h3>
                <button class="close-btn" onclick="closeChatbot()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="chatbot-body" id="chatbot-body">
              
            </div>
            <div class="chatbot-footer">
                <div class="response-buttons">
                    <button class="response-btn full-width" onclick="sendResponse('yes')">
                        <i class="fas fa-check-circle"></i> Yes
                    </button>
                    <button class="response-btn full-width" onclick="sendResponse('no')">
                        <i class="fas fa-times-circle"></i> No
                    </button>
                </div>
            </div>
        </div> -->
    </div><div class="carousel-container">
    <div class="carousel">
     
      <!-- <div class="carousel-slide" style="background-image: url('home1.jpg');">
        <div class="quote">"Change your thoughts and you change your world." - Norman Vincent Peale</div>
      </div> -->
      <div class="carousel-slide" style="background-image: url('home7.jpg');">
        <div class="quote">"Change your thoughts and you change your world." - Norman Vincent Peale</div>
      </div>
      <div class="carousel-slide" style="background-image: url('home3.jpg');">
        <div class="quote">"The greatest glory in living lies not in never falling, but in rising every time we fall." - Nelson Mandela</div>
      </div>b
      <div class="carousel-slide" style="background-image: url('home4.jpg');">
        <div class="quote">"Happiness is when what you think, what you say, and what you do are in harmony." - Mahatma Gandhi</div>
      </div>
      <div class="carousel-slide" style="background-image: url('home5.jpg');">
        <div class="quote">"You are braver than you believe, stronger than you seem, and smarter than you think." – A.A. Milne</div>
      </div>
      <div class="carousel-slide" style="background-image: url('home6.jpg');">
        <div class="quote">"Out of suffering have emerged the strongest souls; the most massive characters are seared with scars." – Khalil Gibran</div>
      </div>

      <div class="carousel-slide">
      <video loop muted playsinline>
        <source src="homepage1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="quote">"You don't have to control your thoughts. You just have to stop letting them control you." — Dan Millman</div>
    </div>
      <!-- Add more slides as needed -->
    </div> </div>
    <!-- Additional sections can be added here -->
    <footer>
        <p>Contact us: contact@echoesofhope.org</p>
        <p>Follow us on social media</p>
    </footer>
    <script>let slideIndex = 0;
const slides = document.getElementsByClassName("carousel-slide");

function showSlides() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
        const video = slides[i].getElementsByTagName("video")[0];
        if (video) {
            video.pause();
        }
    }
    
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    
    slides[slideIndex - 1].classList.add("active");
    const activeVideo = slides[slideIndex - 1].getElementsByTagName("video")[0];
    if (activeVideo) {
        activeVideo.play();
    }
    
    setTimeout(showSlides, 4000); // Change slide every 4 seconds
}

showSlides(); // Start the slideshow
// const questions = [
//             "Do you feel burdened by academic expectations from family, society, or yourself?",
//             "Do you feel comfortable seeking help from friends, family, or professionals?",
//             "Have you ever experienced discrimination or prejudice based on your ethnicity or cultural background?",
//             "Have family conflicts impacted your mental health?",
//             "Have experiences of loneliness impacted your mental health?",
//             "How do you communicate with your parents about your academic, social, and personal life?",
//             "Do you feel confident in your ability to communicate effectively in various social situations?",
//             "Do you believe that your relationships are impacting your mental or emotional well-being?"
//         ];
//         let currentQuestionIndex = 0;

// function openChatbot() {
//     document.querySelector('.chatbot-window').style.display = 'block';
//     displayFirstQuestion();
// }

// function closeChatbot() {
//     document.querySelector('.chatbot-window').style.display = 'none';
// }

// function displayFirstQuestion() {
//     displayQuestion(currentQuestionIndex);
// }

// function displayQuestion(index) {
//     const chatbotBody = document.getElementById('chatbot-body');
//     chatbotBody.innerHTML = ''; // Clear the previous messages

//     const questionElement = document.createElement('div');
//     questionElement.classList.add('bot-message');
//     questionElement.innerText = questions[index];
//     chatbotBody.appendChild(questionElement);

//     // Speak the question
//     speakQuestion(questions[index]);
// }

// function sendResponse(response) {
//     const chatbotBody = document.getElementById('chatbot-body');

//     const botResponseElement = document.createElement('div');
//     botResponseElement.classList.add('bot-response');
//     botResponseElement.innerText = response.toUpperCase();
//     chatbotBody.appendChild(botResponseElement);

//     // Disable the response buttons
//     const responseButtons = document.querySelectorAll('.response-btn');
//     responseButtons.forEach(btn => btn.disabled = true);

//     currentQuestionIndex++;
//     if (currentQuestionIndex < questions.length) {
//         // Wait for a short delay before displaying the next question
//         setTimeout(() => {
//             displayQuestion(currentQuestionIndex);

//             // Re-enable the response buttons
//             responseButtons.forEach(btn => btn.disabled = false);
//         }, 2000);
//     } else {
//         // No more questions, you can add a final message or close the chatbot
//         const finalMessage = document.createElement('div');
//         finalMessage.classList.add('bot-message');
//         finalMessage.innerText = 'That\'s all the questions for now. Thank you for your responses!';
//         chatbotBody.appendChild(finalMessage);
//     }
// }

// function speakQuestion(question) {
//     const utterance = new SpeechSynthesisUtterance(question);
//     const voices = window.speechSynthesis.getVoices();
//     const indianFemaleVoices = voices.filter(voice => voice.lang.includes('en-IN') && voice.gender === 'female');
//     const selectedVoice = indianFemaleVoices.length > 0 ? indianFemaleVoices[0] : null;
//     if (selectedVoice) {
//         utterance.voice = selectedVoice;
//         speechSynthesis.speak(utterance);
//     } else {
//         console.log("No Indian female voices available. Using default voice.");
//         speechSynthesis.speak(utterance);
//     }
// }
</script>

</body>
</html>
