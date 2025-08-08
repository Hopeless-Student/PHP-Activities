<?php

$randomNumber = rand(1,5);
$color = "#" . substr(md5(rand()), 0, 6);
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
         border: solid;
         font-size: 30px;
         padding-top: 15px;
         text-align: center;
         color: black;
       }
       .box:hover {
         background: lightblue;
         transform: scale(1.1);
         transition: transform 0.2s;
       }

       button{
         border: 2px solid #008CBA;
         width: 120px;
         height: 60px;
         padding: inherit;
         border-radius: 10px;
         padding-left: 5px;
         padding-right: 5px;
         background-color: white;
         font-weight: bold;
         box-shadow: 5px 5px 8px #888888;
       }
       button:hover{
         cursor: pointer;
         background-color: #008CBA;
         color: white;

       }
     </style>
   </head>
   <body>
    <center>
      <?php
      echo '<table>';

    echo '<h1>'.$randomNumber.'</h1>';
    echo '<form method="post">';
      echo '<button type="submit">Generate New Grid</button>';
      echo '</form>';

    $numberOfChosen = 0;
      for ($y=1; $y <=10 ; $y++) {
        echo '<tr>';
        for ($x=1; $x<=10 ; $x++) {
          $randNum = rand(0,9);
            if ($randNum == $randomNumber) {
              $numberOfChosen++;
            echo '<td> <div class ="box" style="background: #111184; color: white;">
            '.$randNum.'
            </div></td>';
          } else {
              echo '<td> <div class ="box" style="background: '.$color.'">'.$randNum.'</div></td>';
          }

        }
      }
      echo '</table>';
      echo '<h2>Number of random number in box: '.$numberOfChosen.'</h2>';
      ?>

    </center>
   </body>
 </html>
