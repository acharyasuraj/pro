<!DOCTYPE html>
<html>
<head>
  <title>Smart Krishi</title>
  <style>
    body {
      background-color: #c2e8c2; /* Light green background color */
      font-family: Arial, sans-serif;
      background: url('./bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color:  #04d289;
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .container img {
      width: 120px;
      margin-bottom: 20px;
    }

    .container h1 {
      color: #008000; /* Green header color */
      margin-bottom: 20px;
    }

    .container label {
      display: block;
      text-align: left;
      margin-bottom: 10px;
    }

    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #3b2121;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    .container input[type="checkbox"] {
      margin-right: 5px;
    }

    .container input[type="submit"] {
      background-color: #008000; /* Green button color */
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .container input[type="submit"]:hover {
      background-color: #005700; /* Darker green button color on hover */
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="logo.png" alt="Agriculture Website Logo"> <!-- Replace "logo.png" with your logo image file -->
    <h1>Login</h1>
    <form action="loginn.php" method="post">
      <label for="username">Username/Email:</label>
      <input type="text" id="username" name="uname" placeholder="Enter your username/email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="psw" placeholder="Enter your password" required>

      <input type="checkbox" id="remember" name="remember">
      <label for="remember">Remember Me</label>

      <input type="submit" value="Login">
      <h3>Don't Have Account</h3>

      <button><a href="http://localhost:8080/project/register.php">Register Now</a></button>
    </form>
  </div>
</body>
</html>
