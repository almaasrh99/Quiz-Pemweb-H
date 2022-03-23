<?php
session_start();
// setcookie(session_name(), "", time() - 3600); //send browser command remove sid from cookie
// session_destroy(); //remove sid-login from server storage
// session_write_close();
unset($_SESSION["berhasil_login"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
header('location: index.php?logout=true');
exit;
 ?>