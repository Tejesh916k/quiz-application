<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2> <span style="text-decoration: underline; font-size:30px">"The Smartest Mind Quiz" </span> – Can You Score 10/10?</h2>
        <form action="result.php" method="POST">
            <label>⋙⋙⋙ Enter Your Name:</label>
            <input style="font-size:15px; color:black" type="text" name="username" required><br><br>

            <p>1. Who was the first President of India?</p>
            <input type="radio" name="q1" value="Dr. Rajendra Prasad"> Dr. Rajendra Prasad<br>
            <input type="radio" name="q1" value="Dr. B.R. Ambedkar"> Dr. B.R. Ambedkar<br>
            <input type="radio" name="q1" value="Jawaharlal Nehru"> Jawaharlal Nehru<br>
            <input type="radio" name="q1" value="Sardar Patel"> Sardar Patel<br>

            <p>2. What is the national animal of India?</p>
            <input type="radio" name="q2" value="Lion"> Lion<br>
            <input type="radio" name="q2" value="Elephant"> Elephant<br>
            <input type="radio" name="q2" value="Tiger"> Tiger<br>
            <input type="radio" name="q2" value="Peacock"> Peacock<br>

            <p>3. If 5x + 3 = 18, what is the value of x?</p>
            <input type="radio" name="q3" value="2"> 2<br>
            <input type="radio" name="q3" value="3"> 3<br>
            <input type="radio" name="q3" value="4"> 4<br>
            <input type="radio" name="q3" value="5"> 5<br>

            <p>4. What is the square root of 144?</p>
            <input type="radio" name="q4" value="10"> 10<br>
            <input type="radio" name="q4" value="11"> 11<br>
            <input type="radio" name="q4" value="12"> 12<br>
            <input type="radio" name="q4" value="14"> 14<br>

            <p>5. If A = 1, B = 2, C = 3, then what is the sum of "DOG"?</p>
            <input type="radio" name="q5" value="26"> 26<br>
            <input type="radio" name="q5" value="24"> 24<br>
            <input type="radio" name="q5" value="21"> 21<br>
            <input type="radio" name="q5" value="19"> 19<br>

            <p>6. How many states are there in India?</p>
            <input type="radio" name="q6" value="27"> 27<br>
            <input type="radio" name="q6" value="28"> 28<br>
            <input type="radio" name="q6" value="29"> 29<br>
            <input type="radio" name="q6" value="30"> 30<br>

            <p>7. If a train travels 60 km in 1 hour, how far will it travel in 3.5 hours?</p>
            <input type="radio" name="q7" value="180"> 180 km<br>
            <input type="radio" name="q7" value="200"> 200 km<br>
            <input type="radio" name="q7" value="210"> 210 km<br>
            <input type="radio" name="q7" value="220"> 220 km<br>

            <p>8. Who is known as the "Missile Man of India"?</p>
            <input type="radio" name="q8" value="APJ Abdul Kalam"> APJ Abdul Kalam<br>
            <input type="radio" name="q8" value="Vikram Sarabhai"> Vikram Sarabhai<br>
            <input type="radio" name="q8" value="C.V. Raman"> C.V. Raman<br>
            <input type="radio" name="q8" value="Homi Bhabha"> Homi Bhabha<br>

            <p>9. If a clock shows 9:15, what is the angle between the hour and minute hands?</p>
            <input type="radio" name="q9" value="97.5"> 97.5°<br>
            <input type="radio" name="q9" value="90"> 90°<br>
            <input type="radio" name="q9" value="82.5"> 82.5°<br>
            <input type="radio" name="q9" value="75"> 75°<br>

            <p>10. Who wrote the national anthem of India?</p>
            <input type="radio" name="q10" value="Rabindranath Tagore"> Rabindranath Tagore<br>
            <input type="radio" name="q10" value="Bankim Chandra Chattopadhyay"> Bankim Chandra Chattopadhyay<br>
            <input type="radio" name="q10" value="Sarojini Naidu"> Sarojini Naidu<br>
            <input type="radio" name="q10" value="Subhash Chandra Bose"> Subhash Chandra Bose<br>

            <br>
            <div style="text-align: center;">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
