<?
if($this->registry->get("auth") == "Y"):
?>
Вы авторизованы
<?endif;?>
<a href="reg.php">Регистрация</a>
<a href="auth.php">Авторизация</a>
<a href="exit.php">Выход</a>