<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deletestyle.css">
</head>
<body>
    <form action="delete.php" method="post">
    <h2>Confirm Deletion</h2>
    <p>Are you sure you want to delete this book?</p>
        <input type="hidden" name="ISBN" value="<?php echo htmlspecialchars($_POST['ISBN']); ?>">
        <button id = "dbtn" type="submit" name="confirm" value="yes">Yes</button>
        <button id = "cbtn" type="submit" name="confirm" value="no">No</button>
    </form>
</body>
</html>
