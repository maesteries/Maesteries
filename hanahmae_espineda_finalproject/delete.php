<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <link rel="stylesheet" href="deletestyle.css">
</head>
<body>
    <div class="confirmation-container">
        <h2>Confirm Deletion</h2>
        <p>Are you sure you want to delete the book with ISBN: <?php echo htmlspecialchars($_GET['ISBN']); ?>?</p>
        <form method="post">
            <input type="hidden" name="ISBN" value="<?php echo htmlspecialchars($_GET['ISBN']); ?>">
            <button type="submit" name="confirm" value="yes">Yes</button>
            <button type="submit" name="confirm" value="no">No</button>
        </form>
    </div>
</body>
</html>

<?php
$xml = new DOMDocument();
$xml->load("bd.xml");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ISBN'])) {
    $ISBN = $_POST['ISBN'];

    if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        $books = $xml->getElementsByTagName("book");

        foreach ($books as $book) {
            if ($ISBN === $book->getAttribute("ISBN")) {
                $book->parentNode->removeChild($book);
                $xml->save("bd.xml");
                break;
            }
        }

        header('Location: main.php');
        exit;
    } else {
        header('Location: main.php');
        exit;
    }
}
?>
