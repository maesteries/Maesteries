<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Maesteries Books</title>
</head>
<body>
<div class="container">
        <form action="add.php" method="get">
            <button type="submit" name="addNewBook">+ Add New Book</button>
        </form>
        <form id="search" method="GET">
        <input type="text" name="searchTerm" placeholder="Search..." value="<?php echo isset($_GET['searchTerm']) ? htmlentities($_GET['searchTerm']) : ''; ?>">
        <button id="searchbutton" type="submit"></button>  
        </form>
    </div>

    <?php
    $xml = simplexml_load_file('bd.xml');
    $counter = 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addNewBook'])) {
        header('Location: add.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveNewBook'])) {
        $code = htmlspecialchars($_POST['code']);
        $title = htmlspecialchars($_POST['title']);
        $status = htmlspecialchars($_POST['status']);
        $rating = htmlspecialchars($_POST['rating']);
        $genre1 = htmlspecialchars($_POST['genre1']);
        $genre2 = htmlspecialchars($_POST['genre2']);

        $book = $xml->addChild('book');
        $book->addAttribute('ISBN', $code);
        $book->addChild('title', $title);
        $book->addChild('status', $status);
        $book->addChild('rating', $rating);
        $genres = $book->addChild('genres');
        $genres->addChild('genre1', $s1);
        $genres->addChild('genre2', $s2);

        $xml->asXML('bd.xml');
        header('Location: main.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['ISBN'])) {
        $ISBNToDelete = $_GET['ISBN'];
        foreach ($xml->book as $book) {
            if ((string)$book['ISBN'] === $ISBNToDelete) {

                $dom = dom_import_simplexml($book);
                $dom->parentNode->removeChild($dom);

                $xml->asXML('bd.xml');
                header('Location: main.php');
                exit;
            }
        }
    }
    $searchTerm = isset($_GET['searchTerm']) ? strtoupper($_GET['searchTerm']) : '';
    ?>

    <table cellpadding="2" cellspacing="2" border="1">
        <tr>
            <th>#</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Status</th>
            <th>Rating</th>
            <th>Genres</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($xml->book as $book) {
            $ISBN = strtoupper((string)$book['ISBN']);
            $title = strtoupper((string)$book->title);
            $status = strtoupper((string)$book->status);
            $rating = strtoupper((string)$book->rating);
            $genres = strtoupper((string)$book->genres->genre1 . ' ' . $book->genres->genre2);

            if (
                $searchTerm === ''
                || strpos($ISBN, $searchTerm) !== false
                || strpos($title, $searchTerm) !== false
                || strpos($status, $searchTerm) !== false
                || strpos($rating, $searchTerm) !== false
                || strpos($genres, $searchTerm) !== false
            ) {
                ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $book['ISBN']; ?></td>
                    <td><?php echo $book->title; ?></td>
                    <td><?php echo $book->status; ?></td>
                    <td><?php echo $book->rating; ?></td>
                    <td><?php echo $book->genres->genre1 . ", " . $book->genres->genre2; ?></td>
                    <td>
                    <form action="edit.php" method="GET" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $book['ISBN']; ?>">
                        <button id="editbutton" type="submit"></button>
                    </form>|
                    <form action="cd.php" method="post" style="display:inline;">
                        <input type="hidden" name="ISBN" value="<?php echo $book['ISBN']; ?>">
                        <button id="deletebutton" type="submit"></button>
                    </form>
                    </td>
                </tr>
                <?php
                $counter++;
            }
        }
        if ($counter === 1) {
            ?>
            <tr>
                <td colspan="7">Book not found...</td>
            </tr>
            <?php
        }
        ?>
    </table>

    <form action="main.php" method="post">
        <input type="hidden" name="addNewBook" value="true">
    </form>
    
    <a href="index.php"><button id="back-btn">Back to Home Page</button></a>

</body>
</html>
