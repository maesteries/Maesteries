<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="addstyle.css">
</head>
<body>
<?php
if (isset($_POST['saveNewBook'])) {
    $books = simplexml_load_file("bd.xml");
    $book = $books->addChild('book');
    $book->addAttribute('ISBN', $_POST['ISBN']);
    $book->addChild('title', htmlspecialchars($_POST['title']));
    $book->addChild('status', htmlspecialchars($_POST['status']));
    $book->addChild('rating', htmlspecialchars($_POST['rating']));
    $genres = $book->addChild('genres');
    $genres->addChild('genre1', htmlspecialchars($_POST['genre1']));
    $genres->addChild('genre2', htmlspecialchars($_POST['genre2']));

    file_put_contents("bd.xml", $books->asXML());
    header('Location: main.php');
    exit;
}
if (isset($_POST['submitCancel'])) {
    header('Location: main.php');
    exit;
}
?>
<form method="post">
    <h2>Add a Story</h2>
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="ISBN"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><input type="text" name="rating"></td>
        </tr>
        <tr>
            <td>Main Genre</td>
            <td><input type="text" name="genre1"></td>
        </tr>
        <tr>
            <td>Sub-Genre</td>
            <td><input type="text" name="genre2"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="Save" name="saveNewBook">
                <input type="submit" value="Cancel" name="submitCancel">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
