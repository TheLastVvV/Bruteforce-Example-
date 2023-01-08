<!DOCTYPE html>
<html>
<head>
  <title>Password Checker</title>
</head>
<body>
  <h1>Enter the password:</h1>
  <input type="password" id="passwordInput">
  <button onclick="checkPassword()">View</button>
  <p id="result"></p>

  <script>
    function checkPassword() {
      // Get the password from the input field
      const password = document.getElementById('passwordInput').value;

      // Check if the password is correct
      if (password === '123456789') {
        // Display "Good job!" if the password is correct
        document.getElementById('result').innerHTML = 'Good job!';
      } else {
        // Display "Wrong password" if the password is incorrect
        document.getElementById('result').innerHTML = 'Wrong password';
      }
    }
  </script>
</body>
</html>
