<?php 
echo 'Ви ввели такі дані про себе:'.'<bг>';
echo "<b>Ім'я:</b>".$_GET['name']."<br>";
echo "<b>Прізвище:</b>".$_GET['surname']."<br>";
echo "<b>Пароль:</b>".$_GET['password']."<br>";
echo "<b>Адреса e-mail:</b>".$_GET['email']."<br>";
echo "<b>Дата народження:</b>".$_GET['date']."<br>";
echo "<b>Країна:</b>".$_GET['country']."<br>";
echo "<b>Місто:</b>".$_GET['city']."<br>";
echo "<b>Передзвонити:</b>".$_GET['qw']."<br>";

$secretNumber = rand(1, 10);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userGuess = (int)$_POST['userGuess'];

    if ($userGuess === $secretNumber) {

        echo '<div style="color: red; font-size: 24px;">ВІРНО</div>';
    } elseif ($userGuess < $secretNumber) {
        
        echo '<div style="color: red; font-size: 24px;">Загадане більше</div>';
    } else {
        
        echo '<div style="color: red; font-size: 24px;">Загадане менше</div>';
    }
}

?>
 