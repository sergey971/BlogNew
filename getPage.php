<?php
require_once './connect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Вставка в базу данных
function insertDB()
{
    if (isset($_POST["submit"])) {
        $author = $_POST['author'];
        $message = $_POST['message'];
        global $pdo;
        $query = "INSERT INTO blog (`author`, `message`) VALUES (?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$author, $message]);
        $data = $stmt->rowCount();
        if($data > 0) {
            header("Location: index.php");
            exit();
        }
    }

}
insertDB();
function getPage()
{
    global $pdo;
    $query = 'SELECT * FROM blog ORDER BY id DESC';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$stmt = getPage();

function deletePAge(){
    if(isset($_GET['delete'])){
        $id = ($_GET['delete']);
        global $pdo;
        $query = "DELETE FROM `blog` WHERE `blog`.`id` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $stmt->execute();
        $data = $stmt->rowCount();
        if($data > 0) {
            header("Location: index.php");
            exit();
        }
    }
}

deletePAge();

