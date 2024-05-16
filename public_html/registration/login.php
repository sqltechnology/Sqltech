<?
require "../../db.php";
if (isset($_POST["email"])) {
    $mail = $_POST["email"];
}
if (isset($_POST['password'])) {
    $pass = $_POST['password'];
}





$result = $conn->query("SELECT * FROM Users where email like '$mail'");
foreach($result as $row){

        $Tpass = $row['password'];
        


    }
if ($Tpass == $pass) {
    
            setcookie("sqpass", $row['id'],0,'/');
            echo "LOGIN";
            header("Location: https://tech.local/index.php");
            
        
    }
else {
        echo "Неправильный Email или Пароль!";

    };





?>