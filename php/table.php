<?php require '/Applications/AMPPS/www/infoForm/php/con.php';  ?>

<?php 
$pdo = $pdo->prepare("SELECT * FROM `form` ORDER BY `id`");
$pdo->execute();
$list = $pdo->fetchAll(PDO::FETCH_ASSOC);
?>