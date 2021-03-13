<?php 
    include_once "connect.php";
    include_once "plugins.php";
    $object = new Book;
    //Get form params
    if (isset($_POST['submit'])){
        $title = $_POST['title'];
        $desc  = $_POST['description'];
        $object->AddBook($title,$desc);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        fieldset {
            border: 2px solid black;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php 
        echo $object->getAllBooks();
    ?>
    <br>
    <br>
    <br>
    <form method="POST">
        <fieldset>
            <legend>Add Book</legend>
            Book Title: <input type="text" name='title'><br>
            Book Description: <textarea id="w3review" name="description" rows="4" cols="50">
        </textarea>
            <br>
            <br>
            <input type="submit" value='Add Book' name='submit'>
        </fieldset>
    </form>
</body>

</html>