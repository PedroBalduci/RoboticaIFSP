<?php
    session_start();
    session_destroy();
    setcookie("login", $linha['login'], 1);
    setcookie("email", $linha['email'], 1);

    echo "<script>window.location = './index.php'</script>";
?>