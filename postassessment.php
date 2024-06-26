<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Assessment - Echoes of Hope</title>
    <!-- Update the link to your CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo"></div>
    <nav>
    <ul>
                <li><a href="homepage.php">Home</a></li> <!-- Updated link to homepage -->
                <li><a href="questions.php">Give Assessment</a></li> <!-- Updated link to questions page -->
              
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
              
            </ul>
    </nav>
</header>
    
    <!-- Update the source of your video -->
    <video autoplay muted loop id="myVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;">
        <source src="flower.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <main class="questions-main">
        <!-- Update the action attribute to point to your PHP file for form processing -->
        <form id="preassessment" action="preresult.php" method="post">
            
             <div class="form-section">
                <p>Choose the option that best describes how much each statement applied to you over the past week.</p>
                <!-- <p>
                    0 - Did not apply to me at all<br>
                    1 - Applied to me to some degree, or some of the time<br>
                    2 - Applied to me to a considerable degree, or a good part of time<br>
                    3 - Applied to me very much, or most of the time
                </p> -->
            </div>
            <div class="form-section">
                <label for="name">1. Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-section">
                <label for="email">2. Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

          
            
            <!-- Questions will follow this format -->
            <div class="form-section" >
                <label>3. I found it hard to wind down</label>
                <div class="response-options">
        <label><input type="radio" name="question3" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question3" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question3" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question3" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>4.I was aware of dryness of my mouth</label>
                <div class="response-options">
        <label><input type="radio" name="question4" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question4" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question4" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question4" value="3" required>  Applied to me very much, or most of the time</label>

    </div>
                <br><br>
                <label>5.I couldn’t seem to experience any positive feeling at all </label>
                <div class="response-options">
        <label><input type="radio" name="question5" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question5" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question5" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question5" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>6.I experienced breathing difficulty (e.g. excessively rapid breathing, 
                    breathlessness in the absence of physical exertion) </label>
                    <div class="response-options">
        <label><input type="radio" name="question6" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question6" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question6" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question6" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>7.I found it difficult to work up the initiative to do things</label>
                <div class="response-options">
        <label><input type="radio" name="question7" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question7" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question7" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question7" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>8.I tended to over-react to situations </label>
                <div class="response-options">
        <label><input type="radio" name="question8" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question8" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question8" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question8" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>9.I experienced trembling (e.g. in the hands)</label>
                <div class="response-options">
        <label><input type="radio" name="question9" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question9" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question9" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question9" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>10.I felt that I was using a lot of nervous energy</label>
                <div class="response-options">
        <label><input type="radio" name="question10" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question10" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question10" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question10" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>11.I was worried about situations in which I might panic and make a fool 
                    of myself</label>
                    <div class="response-options">
        <label><input type="radio" name="question11" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question11" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question11" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question11" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>12.I felt that I had nothing to look forward to </label>
                <div class="response-options">
        <label><input type="radio" name="question12" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question12" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question12" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question12" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>13. I found myself getting agitated </label>
                <div class="response-options">
        <label><input type="radio" name="question13" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question13" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question13" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question13" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>14. I found it difficult to relax</label>
                <div class="response-options">
        <label><input type="radio" name="question14" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question14" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question14" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question14" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>15. I felt down-hearted and blue</label>
                <div class="response-options">
        <label><input type="radio" name="question15" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question15" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question15" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question15" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>16. I was intolerant of anything that kept me from getting on with what I 
                    was doing </label>
                    <div class="response-options">
        <label><input type="radio" name="question16" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question16" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question16" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question16" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>17.I felt I was close to panic </label>
                <div class="response-options">
        <label><input type="radio" name="question17" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question17" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question17" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question17" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>18.I was unable to become enthusiastic about anything </label>
                <div class="response-options">
        <label><input type="radio" name="question18" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question18" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question18" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question18" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>19.I felt I wasn’t worth much as a person</label>
                <div class="response-options">
        <label><input type="radio" name="question19" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question19" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question19" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question19" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>20.I felt that I was rather touchy</label>
                <div class="response-options">
        <label><input type="radio" name="question20" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question20" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question20" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question20" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>21.I was aware of the action of my heart in the absence of physical 
                    exertion (e.g. sense of heart rate increase, heart missing a beat)</label>
                    <div class="response-options">
        <label><input type="radio" name="question21" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question21" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question21" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question21" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>

                <label>22.I felt scared without any good reason </label>
                <div class="response-options">
        <label><input type="radio" name="question22" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question22" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question22" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question22" value="3" required>  Applied to me very much, or most of the time</label>
    </div>
                <br><br>
                <label>23. I felt that life was meaningless</label>
                <div class="response-options">
        <label><input type="radio" name="question23" value="0" required>  Did not apply to me at all</label> 
        <label><input type="radio" name="question23" value="1" required>  Applied to me to some degree, or some of the time</label>
        <label><input type="radio" name="question23" value="2" required>  Applied to me to a considerable degree, or a good part of time</label>
        <label><input type="radio" name="question23" value="3" required>  Applied to me very much, or most of the time</label>
    </div>


                
            </div>
        
            
            <div class="form-section">
                <input type="submit" value="Submit Assessment">
            </div>
        </form>
    </main>
    
    <footer>
        <p>Contact us: contact@echoesofhope.org</p>
        <p>Follow us on social media</p>
    </footer>
</body>
</html>
