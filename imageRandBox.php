  <?php

  $randomNumber = rand(1,5);
  $numberOfChosen = 0;
  //Gonzales, C-jay B. BSCS3B
   ?>

   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title></title>
       <style media="screen">
         .box{
           height: 60px;
           width: 75px;
           border-radius: 10px;
           border: 1px solid;
           font-size: 30px;
           padding-top: 15px;
           text-align: center;
           color: black;
         }

         .box:hover{
           background: lightblue;
         }
         img{
           height: 60px;
           width: 75px;
           border-radius: 10px;
           border: solid;
           transition: transform 0.3s ease-in-out;
         }
         img:hover{
           cursor: pointer;
           transform: scale(1.1);
            opacity: 0.7;
         }
         .timer{
           font-size:50px;
           color: green;
         }
         #countGuess{
           width: 120px;
           height: 10px;
           padding: 10px 20px 10px 20px;
           border: none;
           border-bottom: 2px solid green;
           border-radius: 5px;
           margin-right: 15px;
         }

         #countGuess:hover{
           background: lightgray;
           cursor: pointer;
         }
         #submitButton{
           width: 100px;
           height: 30px;
           border: none;
           border-radius: 10px;
           background: #00D100;
           box-shadow: 0px 0px 5px;
           font-family: Corbel;
           font-weight: bold;
           transition: box-shadow 0.5s ease-in;
           color: white;
         }
         #submitButton:hover{
           background: white;
           border: 1px solid #00D100;
           color: black;
           cursor: pointer;
           box-shadow: none;

         }
       </style>
     </head>
     <body>
      <center>
        <h2 id="rs"></h2>
        <?php
        echo '<div class="timer" id="timer">30</div>';
        echo "Count the unique cat before time runs out! ";


      echo '<form class="countGuess" action="" method="post"> <br>';

      echo '<input id="countGuess" type="text" value=""placeholder="Enter Count here">';
      echo '<input id="submitButton" type="button" value="Submit" onclick="checkAnswer()">';

      echo '</form>';

        echo '<table>';
        for ($y=1; $y <=10 ; $y++) {
          echo '<tr>';
          for ($x=1; $x<=10 ; $x++) {
            $randNum = rand(0,9);
              if ($randNum == $randomNumber) {
                $numberOfChosen++;
              echo '<td> <img src="laughcat.gif" alt="Laughing Cat meme"></img> </td>';
            } else {
                echo '<td> <img src="cutecat.jpg" alt ="Cute Cat meme"></img></td>';
            }

          }
        }
        echo '</table>';
        ?>
        <script>

        let correctAnswer = <?php echo $numberOfChosen; ?>;
        console.log("Correct answer is: " + correctAnswer);



         let timeRemaining = 30;
         let timerCounter = document.getElementById("timer");

         let countdownInterval = setInterval(function() {
           if (timeRemaining <= 0) {
             clearInterval(countdownInterval);
             alert("Time's up!");
           } else if(timeRemaining <= 10){
             timerCounter.style.color = 'red';
             timerCounter.textContent = timeRemaining;
             timeRemaining--;
           }
            else {
             timerCounter.textContent = timeRemaining;
             timeRemaining--;
           }
         }, 800);

         function checkAnswer(){
             const userAns = document.getElementById('countGuess');
             const getUserAns = userAns.value;

             if (parseInt(getUserAns) === correctAnswer) {
               document.getElementById('rs').innerText = "Correct!";
               clearInterval(countdownInterval);
               timerCounter.textContent = 0;
               timerCounter.style.color = 'green';
               userAns.disabled = true;
             } else {
               document.getElementById('rs').innerText = "Wrong!";
               clearInterval(countdownInterval);
               timerCounter.textContent = 0;
               timerCounter.style.color = 'red';
               userAns.disabled = true;
             }
         }
       </script>
      </center>
     </body>
   </html>
