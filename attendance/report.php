<?php
include 'db.php';

$sql = "SELECT report.name, report.date, report.present, report.absent, report.topic, students.id
      FROM report
      INNER JOIN students WHERE students.id = report.idfromstudents";

  $records = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="2.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="left">
        <h1><a href="index1.php">Assesment</a></h1>
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
    <div id="sec_two">
      <h1>output</h1><br>
      <table width="600px" border="1" cellpadding="1" cellspacing="1">
    		<tr>
    			<th>Name</th>
    			<th>Date</th>
    			<th id="p">Present</th>
    			<th id="a">Absent</th>
          <th>Topic</th>
    		</tr>
    	<?php
    		while($persons = mysqli_fetch_assoc($records))
    		{
    			echo "<tr>";
    				echo "<td>".$persons['name']."</td>";
    				echo "<td>".$persons['date']."</td>";
    				echo "<td id='p'>".$persons['present']."</td>";
            echo "<td id='a'>".$persons['absent']."</td>";
            echo "<td>".$persons['topic']."</td>";
    			echo "</tr>";
    		}

    	?>
    	</table>

    </div>

  </section>
</body>
</html>
