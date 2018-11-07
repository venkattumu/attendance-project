<?php
session_start();

include 'db.php';
if (isset($_POST['submit'])) {
  $student_id = $_SESSION['id'];
  $name = $_POST['name'];
  $date = $_POST['date'];
  $present = $_POST['pre'];
  $absent = $_POST['ab'];
  $topic = $_POST['topic'];
  $sql = "INSERT INTO report (idfromstudents, name, date, present, absent, topic)
   VALUES('$student_id', '$name', '$date', '$present', '$absent', '$topic')";
   if (mysqli_query($con, $sql)) {
      $message = "inserted";
     }
     else{
       $message2 = "not inserted";
     }

}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="2.css">
</head>
<body style="background: red;">
  <header>
    <nav class="navbar">
      <div class="left">
        <h1><a href="index1.php">Assesment</a></h1>
      </div>
      <div class="right">
          <ul>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
      </div>
    </nav>
  </header>

  <section>

    <?php if (isset($message)) {echo "$message";}?>
    <?php if (isset($message2)) {echo "$message2";}?>

    <div id="sec_one">
      <h1>attendance</h1><br>
      <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="date" name="date" ><br>
        <input type="text" name="pre" placeholder="Present"><br>
        <input type="text" name="ab" placeholder="Absent"><br>
        <textarea type="text" rows="5" cols="50" name="topic" placeholder="today topic"></textarea><br><br>
        <input type="submit" name="submit" value="submit"><br>
      </form>
    </div>

  </section>


</body>
</html>
