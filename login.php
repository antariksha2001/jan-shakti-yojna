<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://images.pexels.com/photos/2325447/pexels-photo-2325447.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      
    }

    .login-box {
      width: 300px;
      background-color: rgba(24, 23, 23, 0.232);
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 92%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      border-style:inset;
           
      
    }

    .login-box input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
      background-color: #45a049;
    }

    .login-box .message {
      text-align: center;
      color: red;
      margin-top: 10px;
    }

    .login-box .signup-link {
      text-align: center;
      margin-top: 10px;
    }

    .login-box .signup-link a {
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="backend.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </form>
      <div class="signup-link">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        <a href="forget.php">Forget Password?</a>
      </div>
    </div>
  </div>
</body>
</html>
