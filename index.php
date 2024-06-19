<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Buku Tamu</h1>
    <form action="submit.php" method="post" class="guestbook-form">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="comment">Komentar:</label>
        <textarea id="comment" name="comment" required></textarea>
        <button type="submit">Kirim</button>
    </form>
    <div class="comments">
        <?php
        $comments = file_get_contents('comments.json');
        $comments = json_decode($comments, true);
        foreach ($comments as $comment) {
            echo "<div class='comment'><h3>{$comment['name']}</h3><p>{$comment['comment']}</p></div>";
        }
        ?>
    </div>
</body>
</html>
