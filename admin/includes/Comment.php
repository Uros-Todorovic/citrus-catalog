<?php

class Comment extends DB_Object {

    public $id;
    public $name;
    public $email;
    public $text;
    public $aprooved;

    public static function create_comment_object($name="Author", $email="", $text=""){
        if (!empty($email) && !empty($text)) {
            $comment = new Comment;
            $comment->name = $name;
            $comment->email = $email;
            $comment->text = $text;
            return $comment;
        }
    }

    public static function find_all_comments(){
        $sql = "SELECT * FROM comments";
        return static::find_querys($sql);
    }

    public static function find_comment_by_id($id) {
        $params = [
                    'id' => $id
        ];
        $sql = "SELECT * FROM comments WHERE id = :id";
        $result_array = static::find_by_query($sql, $params);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function submit_comment(){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $text = trim($_POST['text']);
        $error_message = "";

        $comment = Comment::create_comment_object($name, $email, $text);

        $params = [
            'name' => $name,
            'email' => $email,
            'text' => $text
           ];
        $sql = "INSERT INTO comments (name, email, text) VALUES (:name, :email, :text)";
        
        if ($comment && $comment->insert($sql, $params)) {
            Helper::redirect("index.php");
        } else {
            $error_message = "Comment not saved";
            return false;
        } 
    }

    public static function aproove_comment($id){
        $params = [
            'id' => $id
        ];
        $sql = "UPDATE comments SET aprooved = 1 WHERE id = :id";
        return static::update($sql, $params);
    }
}