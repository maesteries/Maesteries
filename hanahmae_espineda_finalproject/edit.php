<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="editstyle.css">
</head>
<body>
<?php
$books = simplexml_load_file("bd.xml");

if(isset($_POST['submitSave'])) {
    foreach($books->book as $book){
        if($book['ISBN'] == $_POST['ISBN']){
            $book->title = $_POST['title'];
            $book->status = $_POST['status'];
            $book->rating = $_POST['rating'];
            $book->genres->genre1 = $_POST['genre1'];
            $book->genres->genre2 = $_POST['genre2'];
            break;
        }
    }
    file_put_contents("bd.xml", $books->asXML());
    header('location:main.php');
    exit;
}

if(isset($_POST['submitCancel'])) {
    header('location:main.php');
    exit;
}

foreach($books->book as $book){
    if($book['ISBN'] == $_GET['id']){
        $ISBN = $book['ISBN'];
        $title = $book->title;
        $status = $book->status;
        $rating = $book->rating;
        $genre1 = $book->genres->genre1;
        $genre2 = $book->genres->genre2;
    }
}
?>

<form method="post">
<h2>Update the Story</h2>
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="ISBN" value="<?php echo $ISBN; ?>" readonly></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status">
                    <option value="To be Read" <?php if($status == 'To be Read') echo 'selected'; ?>>To be Read</option>
                    <option value="Ongoing" <?php if($status == 'Ongoing') echo 'selected'; ?>>Ongoing</option>
                    <option value="Done Reading" <?php if($status == 'Done Reading') echo 'selected'; ?>>Done Reading</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><input type="text" name="rating" value="<?php echo $rating; ?>"></td>
        </tr>
        <tr>
            <td>Main Genre</td>
            <td><input type="text" name="genre1" value="<?php echo $genre1; ?>"></td>
        </tr>
        <tr>
            <td>Sub-Genre</td>
            <td><input type="text" name="genre2" value="<?php echo $genre2; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="Confirm" name="submitSave">
                <input type="submit" value="Cancel" name="submitCancel">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
