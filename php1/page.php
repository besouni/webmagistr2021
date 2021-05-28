<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Php 1</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
      <h1>PHP 1</h1>
      <?php
         echo "<p>Line 1</p>";
         print "<p>Line 2</p>";
         printf("<p>Line 3</p>");
         var_dump("<p>Line 4</p>");
      ?>
   </div>

   <div class="container">
      <?php
         $n = 25;
         $s = "PHP";
         echo $n;
         echo "<hr>";
         echo $s;
         define("pi", 3.14);
         echo "<hr>";
         echo pi;
      ?>
   </div>
   <div class="container">
      <?php
         $s1 = "I am a good student";   //"I am a bad student"
         $s2 = "/good/i";
         echo preg_match($s2, $s1);
      ?>
   </div>
</body>
</html>