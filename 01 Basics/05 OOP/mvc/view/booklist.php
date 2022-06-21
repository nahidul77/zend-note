<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>Title</td>
            <td>Author</td>
            <td>description</td>
            <td>Price</td>
        </tr>
        <?php
        foreach ($books as $title => $book) {
        ?>
            <tr>
                <td><a href="index.php?book=<?= $book->getTitle() ?>"><?= $book->getTitle() ?></a></td>
                <td><?= $book->getAuthor() ?></td>
                <td><?= $book->getDescription() ?></td>
                <td><?= $book->getPrice() ?></td>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>