<?php
session_start();
if ($_GET && $_GET['submit'] == "OK" && $_GET['submit'] && $_GET['login'] != "" && $_GET['passwd'] != "")
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html>
<body>
    <form action="index.php" method="GET">
        Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
        <br />
        Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
        <input type="submit" name="submit" value="OK"/>
    </form>
</body>
</html>