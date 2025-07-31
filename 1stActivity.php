<?php

function colorBox(){

  echo "<table border = '0'>";
    for ($row=0; $row < 10; $row++) {
      echo "<tr>";
      for ($col=0; $col < 10; $col++) {
        $numberPicker = rand(1,5);
        $coloredPick = '';
        switch ($numberPicker) {
          case '1':  $coloredPick = 'red';
          break;
          case '2':  $coloredPick = 'blue';
          break;
          case '3':  $coloredPick = 'yellow';
          break;
          case '4':  $coloredPick = 'orange';
          break;
          case '5':  $coloredPick = 'green';
          break;
          default: echo "Error!";
            break;
          }
      echo "<td style = 'background-color:$coloredPick;' ></td>";
      }
    }
    echo "</table>";
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random Color Box</title>

    <style media="screen">
      table {
        margin: auto;
        border-spacing: 5px 10px;
      }
      td {
        width: 50px;
        height: 50px;
        transition: transform 0.2s ease, opacity 0.2s ease;
      }
      td:hover {
      transform: scale(1.1);
      opacity: 0.8;
      cursor: pointer;
    }
      #refreshButton{
        font-family: "Times New Roman", sans-serif;
        font-size: 15px;
        font-weight: bold;
        display: block; margin: auto;
        height: 50px;
        width: 100px;
        background-color: #ade6e6;
        border-style: none;
        border-radius: 50px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease-in;
      }
      #refreshButton:hover{
        background-color: lightblue;
        cursor: pointer;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);

      }

    </style>
  </head>
  <body>
    <button id = "refreshButton" onclick = "location.reload();">Refresh</button>
    <?php
    colorBox();
     ?>

  </body>
</html>
