
<?php 
include('./config/dbconnection.php');
$sql="SELECT count(*) as total FROM candidate";
$runquery=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($runquery);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - RDL</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="sidebar">
    <h2>Rwanda driving license</h2>
    <ul>
      <li><a href="./dashboard.php">Dashboard</a></li>
      <li><a href="./candidate.php">Candidates</a></li>
      <li><a href="./grade.php">View Grades</a></li>
      <li><a href="./report.php">Report</a></li>
      <li><a href="./login.php">Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
      <h1>Welcome Armand 🎉</h1>
      <p>Here's a quick overview of today's activities.</p>
    </header>

    <section class="cards">
      <div class="card">
        <h3>Total Candidates</h3>
        <p><?php echo $user['total'];?></p>
      </div>
      <div class="card">
        <h3>Today’s Exams</h3>
        <p>10</p>
      </div>
      <div class="card">
        <h3>Passed</h3>
        <p>102</p>
      </div>
      <div class="card">
        <h3>Failed</h3>
        <p>22</p>
      </div>
    </section>

    <section>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Exam Date</th>
                <th>Phone number</th>
                <th>License Category</th>
                <th>Marks</th>
                <th>Decisions</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Mugabo</td>
                <td>Girbert</td>
                <td>Male</td>
                <td>20/7/2000</td>
                <td>2/2/2025</td>
                <td>2507913928</td>
                <td>A</td>
                <td>18</td>
                <td class="correct">Pass</td>
            </tr>

            <tr>
                <td>002</td>
                <td>Kaze</td>
                <td>Jane</td>
                <td>Female</td>
                <td>20/7/2001</td>
                <td>2/4/2025</td>
                <td>2507813928</td>
                <td>B</td>
                <td>8</td>
                <td class="warning">Fail</td>
            </tr>

            <tr>
                <td>002</td>
                <td>Kaze</td>
                <td>Jane</td>
                <td>Female</td>
                <td>20/7/2001</td>
                <td>2/4/2025</td>
                <td>2507813928</td>
                <td>B</td>
                <td>8</td>
                <td class="warning">Fail</td>
            </tr>

            <tr>
                <td>001</td>
                <td>Mugabo</td>
                <td>Girbert</td>
                <td>Male</td>
                <td>20/7/2000</td>
                <td>2/2/2025</td>
                <td>2507913928</td>
                <td>A</td>
                <td>18</td>
                <td class="correct">Pass</td>
            </tr>
        </table>
    </section>
  </div>
</body>
</html>
