<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      max-width: 400px;
      margin: 20px auto;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>

<form id="registrationForm" action="test2.php" method="post" onsubmit="return validateForm()">
  <h2>User Registration</h2>
  
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  
  <label for="confirmPassword">Confirm Password:</label>
  <input type="password" id="confirmPassword" name="confirmPassword" required>
  <span id="passwordError" class="error"></span>
  
  <input type="submit" value="Register">
</form>



</body>
</html>
