<?php
$name = $_POST['name'];
$comment = $_POST['comment'];

$comments = file_get_contents('comments.json');
$comments = json_decode($comments, true);

$comments[] = ['name' => $name, 'comment' => $comment];

file_put_contents('comments.json', json_encode($comments));

header('Location: index.php');
