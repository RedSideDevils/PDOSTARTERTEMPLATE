<?php 

class Book extends Dbh{
    public function getAllBooks() {
        $sql = $this -> connect() -> query("SELECT * FROM books ORDER BY id");
        while($row = $sql->fetch()){
            ?>
            <h1><?php echo $row['title']; ?></h1><a href="post/<?php echo $row['id']?>">Read more</a>
            <?php 
        }
    }
    public function readMore($id){
        $conn = $this -> connect();
        $sql = $conn-> query("SELECT * FROM books where id= $id");
        $row = $sql->fetch();
        ?>
        <h1>Title: <?php echo $row['title'];?></h1>
        <hr style='width:80px;float:left;'>
        <br>
        <h4>Descripton</h4>
        <p><?php echo $row['description']; ?></p>
        <?php 
    }
    public function AddBook($title,$description){
        $pdo = $this -> connect();
        if (!empty($title) && !empty($description)){
            $stmt = $pdo->prepare("INSERT INTO books (title,description) VALUES (?,?)");
            $stmt->execute([$title,$description]);
        }
    }
}

?>