<?php
include "./BookDAO.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Pages</th>
            <th>Genre</th>
        </tr>

        <?php
        $showBooks = new BookDAO();
        $books = $showBooks->getBooks();
        foreach ($books as $book) {
        ?>
            <tr>
                <td><?php echo $book->getISBN() ?></td>
                <td><?php echo $book->getTitle() ?></td>
                <td><?php echo $book->getAuthor() ?></td>
                <td><?php echo $book->getPages() ?></td>
                <td><?php echo $book->getPrice() ?></td>
                <td><?php echo $book->getGenre() ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>