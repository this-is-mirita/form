<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '/Applications/AMPPS/www/infoForm/php/con.php';


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Telephone = $_POST['Telephone'];
    $Address = $_POST['Address'];
    $Education = $_POST['Education'];
    $Experience = $_POST['Experience'];
    $Skills = $_POST['Skills'];
    $Hobby = $_POST['Hobby'];
    $Message = $_POST['Message'];

    if(!empty($Name) && !empty($Email) && !empty($Telephone) && !empty($Address) && !empty($Education) && !empty($Experience) && !empty($Skills) && !empty($Hobby) && !empty($Message)){
        $pdo = $pdo->prepare("INSERT INTO `form`(`Name`, `Email`, `Telephone`, `Address`, `Education`, `Experience`, `Skills`, `Hobby`, `Message`) VALUES ('$Name','$Email','$Telephone','$Address','$Education','$Experience','$Skills','$Hobby','$Message')");
        
        $pdo->execute([$Name,$Email,$Telephone,$Address,$Education,$Experience,$Skills,$Hobby,$Message]);



        echo 'Данные отправлены';
        //header('Location: /index.php');
        exit;
    }else {
        echo 'Не все поля заполнены.';
    }
} else {
    echo 'Не работает.';
}
?>