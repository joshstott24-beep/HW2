<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Gift Card - AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <p>AirAsia Rewards</p>
  </header>

  <main class="page narrow">
    <h1>Add Gift Card</h1>

    <form action="card-list.php" method="post">
      <label for="cardName">Card Name</label>
      <input type="text" id="cardName" name="cardName" required>

      <label for="cardType">Card Type</label>
      <input type="text" id="cardType" name="cardType" required>

      <label for="cardValue">Card Value</label>
      <input type="number" id="cardValue" name="cardValue" min="0" step="0.01" required>

      <label for="points">Points Required</label>
      <input type="number" id="points" name="points" min="0" required>

      <div class="actions">
        <button type="submit">Submit</button>
        <a href="card-list.php" class="cancel">Cancel</a>
      </div>
    </form>
  </main>
</body>
</html>