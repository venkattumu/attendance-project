<?php
session_start();

include 'db.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="left">
        <h1><a href="index.php">Assesment</a></h1>
      </div>
      <div class="right">
          <ul>
            <li><a href="attendance.php">Attendance</a></li>

            <li><a href="logout.php">logout</a></li>
          </ul>
      </div>
    </nav>
  </header>

  <section>
    <div class="banner">
        <div class="text">
          <h1>Online Assesment</h1>
      </div>
    </div>
  </section>
</body>
</html>
