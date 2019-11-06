<?php

require_once('includes/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $comment = Comment::find_comment_by_id($id);
    if ($comment) {
        $comment::aproove_comment($id);
        Helper::redirect('index.php');
    } else {
        echo "Undifined comment";
    }
}