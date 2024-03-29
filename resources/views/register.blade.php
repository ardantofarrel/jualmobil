<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    .register-container h2 {
      text-align: center;
      color: #333;
    }

    .register-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      margin-bottom: 8px;
      color: #555;
      display: block;
    }

    .form-group input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    .form-group button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <h2>Register</h2>
    <form class="register-form">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>

</body>
</html>
