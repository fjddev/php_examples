<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'pa55word';
    $dbname = 'pdoposts';

    // Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
 

    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // // PDO QUERY
    // $stmt = $pdo->query('SELECT * FROM posts');
 
    // Fetch as Associative array
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //    echo $row['title'] . '<br>';
    // }
    
    # Fetch as Object
    // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //     echo $row->title . '<br>';
    //  }

    // Fetch as Object with default
    // while($row = $stmt->fetch()){
    //     echo $row->title . '<br>';
    //  }   
    
    # PREPARED STATEMENTS (prepare and execute)

    // Fetch MULTIPLE POSTS
    $author = 'Brad';
    $is_published = true;
    $id = 1;
    //Positional Params
    $limit = 1;
    $sql = 'SELECT * FROM posts WHERE author = ? LIMIT ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author, $limit]);
    $posts = $stmt->fetchAll();
    var_dump($posts);

    // Named Params
    // $limit = 1;
    // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published LIMIT 1' ;
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author'=>$author,'is_published'=>$is_published]);
    // $posts = $stmt->fetchAll();
    // // // var_dump($posts);    

    // foreach($posts as $post){
    //     echo $post->title . '<br>';
    // }

    // FETCH SINGLE POST
    // $sql = 'SELECT * FROM posts WHERE id = :id ' ;
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id]);
    // $post = $stmt->fetch();   
    
    // echo $post->body;

    // GET ROW COUNT
    // $stmt = $pdo->prepare('SELECT * FROM POSTS WHERE author = ?');
    // $stmt->execute([$author]);
    // $postCount = $stmt->rowCount();
    // echo $postCount;

    // INSERT
    // $title = 'POST Five';
    // $body = 'This is post five';
    // $author = 'Kevin';
    // $sql = 'INSERT INTO POSTS(title, body, author) ' .
    //        ' VALUES(:title, :body, :author)';
    // $stmt = $pdo->prepare($sql);     
    // $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);

    // UPDATE
    // $id = 1;
    // $body = 'This is the updated version for post one';

    // $sql = 'UPDATE posts SET '  
    //      . 'body = :body '
    //      . 'WHERE id = :id';  
    // $stmt = $pdo->prepare($sql);     
    // $stmt->execute(['body'=>$body, 'id'=>$id]);    

    // DELETE
    // $id = 5;
    // $body = 'This is the updated version for post one';

    // $sql = 'DELETE FROM posts '  
    //      . 'WHERE id = :id';  
    // $stmt = $pdo->prepare($sql);     
    // $stmt->execute([ 'id'=>$id]);       
    // echo 'Delete success'; 

    // SEARCH
    // $search = '%post%';
    // $sql = 'SELECT * FROM posts '  
    //      . 'WHERE body LIKE ?';  
    // $stmt = $pdo->prepare($sql);     
    // $stmt->execute([ $search]);  
    // $posts = $stmt->fetchAll(); 
    // foreach($posts as $post){
    //       echo $post->title . '<br>';
    // }  
    // echo 'Search success';     
    