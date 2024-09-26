 <?php 
 
 include 'db.php'; 

 $stmt = $pdo->query('SELECT * FROM articles');
 $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>

 