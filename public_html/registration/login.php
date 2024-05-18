<?

if ($_POST['email'] == "") {
    echo "Вы не ввели email!";
}elseif($_POST['password'] == ""){ echo "Вы не ввели пароль";} 
else {
    




global $Tpass;
require "../../db.php";

$mail = $_POST["email"];
$pass = $_POST['password'];
$result = $conn->query("SELECT * FROM Users where email like '$mail'");
if ($result == NULL) {
    echo "Такого аккаунта нет!";
}else {
    foreach($result as $row){
        
        $Tpass= $row['password'];
        // echo $Tpass;
        if ($Tpass==""){
            echo "Ошибка Аккаунта";
            die();
        }
    }
    if ($Tpass == $pass) {
            setcookie("sqpass", $row['id'],12312312312,'/');
            echo "LOGIN";
            header("Location: https://sql-tec.ru/index.php");
    }else {
        echo "Неправильный Email или Пароль!";
    };
};    
}












?>