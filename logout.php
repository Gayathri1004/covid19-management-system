<?php
session_start();
session_unset();
session_destroy();
echo '<script>window.alert("You have logged out!");</script>';
echo '<script>location.href="roletype_login.php"</script>';
?>