<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Grades - RDL</title>
  <link rel="stylesheet" href="grades.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Candidate Grades</h1>
      <div class="actions">
        <input type="text" id="searchInput" placeholder="Search by ID or Name..." />
        <button class="add-btn">➕ Add Grade</button>
      </div>
    </div>

    <table id="gradeTable">
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
  </div>

</body>
</html>
