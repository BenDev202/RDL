<?php 
include('./config/dbconnection.php');

if(isset($_POST['']))

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RDL Admin - Add Candidates</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="candidate-form.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Add Candidates</h2>
      <form method="POST">
        <div class="input-group">
          <label for="firstName">First Name</label>
          <input type="text" name="firstName" id="firstName" required>
        </div>
        <div class="input-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" required>
          </div>
        <div class="input-group">
          <label for="gender">Gender</label>
          <select name="gender" id="gender">
            <option value="MALE">Male</option>
            <option value="FEMALE">Female</option>
          </select>
        </div>
          <div class="input-group">
            <label for="DOB">Date of Birth</label>
            <input type="date" name="DOB" id="DOB" required>
          </div>
          <div class="input-group">
            <label for="ExamDate">Exam Date</label>
            <input type="date" name="ExamDate" id="ExamDate" required>
          </div>
          <div class="input-group">
            <label for="PhoneNumber">Phone Number</label>
            <input type="tel" name="PhoneNumber" id="PhoneNumber" required>
          </div>
        <button type="submit" class="btn-add" name="">Add Candidate</button>
      </form>
    </div>
  </div>
</body>
</html>