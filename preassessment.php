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
        <div class="logo">ECHOES OF HOPE</div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li> <!-- Updated link to homepage -->
                <li><a href="questions.php">Give Assessment</a></li> <!-- Updated link to questions page -->

                <li><a href="contactus.php">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="#book-online">Book Online</a></li>
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
        <form id="preassessment" action="resultPre.php" method="post">
            
             <div class="form-section">
                <p>Choose the option that best describes how much each statement applied to you over the past week.</p>
               
            </div>
            

          
            
            <!-- Questions will follow this format -->
            <div class="form-section" >
            <h2>Physical Wellness:</h2>
    <p>Please select the option that best describes your condition.</p>
   
        <label>1. I engage in physical exercise regularly (e.g., 30 mins at least 5x a week or 10,000 steps a day)?</label>
        <div class="response-options">
          <label><input type="radio" name="question1" value="0" required> Never</label>
          <label><input type="radio" name="question1" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question1" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question1" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
     
        <label>2. I get 6-7 hours of sleep each night?</label>
        <div class="response-options">
          <label><input type="radio" name="question2" value="0" required> Never</label>
          <label><input type="radio" name="question2" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question2" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question2" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
     
        <label> 3.How often do you have a drink containing alcohol?</label>
        <div class="response-options">
          <label><input type="radio" name="question3" value="0" required> Never (**Underage drinking is illegal**)</label>
          <label><input type="radio" name="question3" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question3" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question3" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
     
                <br><br>
                <label>4.How often during the last year have you found that you were not able to stop drinking once you had started?</label>
                <div class="response-options">
          <label><input type="radio" name="question4" value="0" required> Never (**Underage drinking is illegal**)</label>
          <label><input type="radio" name="question4" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question4" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question4" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
                <br><br>
                <label>5. Are you smoking ( cigarette /tobacco /Any substance with smoking ) </label>
                <div class="response-options">
        <label><input type="radio" name="question5" value="0" required> Cigarette </label> 
        <label><input type="radio" name="question5" value="1" required>  Tobacco </label>
        <label><input type="radio" name="question5" value="2" required>  Any substance (Addictive substance ) </label>
        <label><input type="radio" name="question5" value="3" required>  Any other give name </label>
    </div>
                <br><br>
                <label>6.How often during the last year have you found that you were not able to stop Smoking once you had started?</label>
                <div class="response-options">
          <label><input type="radio" name="question6" value="0" required> Never </label>
          <label><input type="radio" name="question6" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question6" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question6" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
                <br><br>
                <label>7.Do you consume pizza/burger/gol gappas/ any other junk? </label>
                <div class="response-options">
          <label><input type="radio" name="question7" value="0" required> Never </label>
          <label><input type="radio" name="question7" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question7" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question7" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
                <br><br>
                <label>8. I get regular health tests done (i.e., physical, laboratory, eye, and dental) </label>
                <div class="response-options">
          <label><input type="radio" name="question8" value="0" required> Never </label>
          <label><input type="radio" name="question8" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question8" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question8" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
                <br><br>
                <h2>Social Wellness: </h2>

            <br>
                <label>9.I make a conscious effort to improve any behaviors or attitudes that have harmed my relationships with other people.</label>
                <div class="response-options">
               
          <label><input type="radio" name="question9" value="0" required> Never </label>
          <label><input type="radio" name="question9" value="1" required> Rarely (twice a month)</label>
          <label><input type="radio" name="question9" value="2" required> Sometimes in a week (once a week)</label>
          <label><input type="radio" name="question9" value="3" required> Nearly every day (> 3 times a week)</label>
        </div>
                <br><br>
                <label>10.I feel supported and wanted in my close relationships </label>
                <div class="response-options">
               
               <label><input type="radio" name="question10" value="0" required> Never </label>
               <label><input type="radio" name="question10" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question10" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question10" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <label>11.
Are you in trouble because of your husband/wife/friends/family
</label>
<div class="response-options">
               
               <label><input type="radio" name="question11" value="0" required> Never </label>
               <label><input type="radio" name="question11" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question11" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question11" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <label>12.I communicate effectively with others, share my views and listen to those of others </label>
                <div class="response-options">
               
               <label><input type="radio" name="question12" value="0" required> Never </label>
               <label><input type="radio" name="question12" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question12" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question12" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <label>13. I participate in a wide variety of social activities and find opportunities to form new relationships </label>
                <div class="response-options">
               
               <label><input type="radio" name="question13" value="0" required> Never </label>
               <label><input type="radio" name="question13" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question13" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question13" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <h2>Spiritual wellness: </h2><br>
                <label>14.
I take time to think about what’s important in life – who I am, what I value, where I fit in, and where I am going
</label>
<div class="response-options">
               
               <label><input type="radio" name="question14" value="0" required> Never </label>
               <label><input type="radio" name="question14" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question14" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question14" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <label>15.I engage in acts of caring and goodwill without expecting something in return</label>
                <div class="response-options">
               
               <label><input type="radio" name="question15" value="0" required> Never </label>
               <label><input type="radio" name="question15" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question15" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question15" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>
                <br><br>
                <label>16. I have no confidence on myself , feel very low and nervous to express myself  </label>
                <div class="response-options">
               
               <label><input type="radio" name="question16" value="0" required> Never </label>
               <label><input type="radio" name="question16" value="1" required> Rarely (twice a month)</label>
               <label><input type="radio" name="question16" value="2" required> Sometimes in a week (once a week)</label>
               <label><input type="radio" name="question16" value="3" required> Nearly every day (> 3 times a week)</label>
             </div>    <br><br>
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
