<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <p>AirAsia Rewards</p>
  </header>

  <main class="page narrow">
    <h1>Login</h1>

    <form action="card-list.php" method="post">
      <label for="userName">Username</label>
      <input type="text" id="userName" name="userName" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <div class="actions">
        <button type="submit">Login</button>
      </div>
    </form>
  </main>
</body>
</html>